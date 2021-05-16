<?php
namespace App\Service\Api;

use App\Repository\ActionRepository;
use App\Repository\CategorieRepository;
use DateTime;
use SimpleXMLElement;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use function Sodium\add;

class LivreApi
{
    private $serializer;
    private $isbn;
    private $infosGoogle;
    private $infosEbay;
    private $infosGoodRead;
    private $infosOpenLibrary;

    public function __construct(SerializerInterface $serializer){
        $this->serializer = $serializer;
    }


    /**
     * récupère des données
     * @param $isbn -isbn du livre
     */
    public function getDataFromIsbn($isbn): array
    {
        $this->isbn = $isbn;
        $this->getGoogleIsbn(); // récupère les infos de google
        $this->infosEbay = $this->getEbayIsbn($this->isbn); // récupère les infos de ebay
        $this->getOlIsbn(); // recupère les infos de Open Library
        $this->getGoodReadIsbn(); // recupère les infos de goodReads
        return $this->verifyResponseIsbn();
        //return $this->json($this->verifyResponseIsbn($articleGoogle,$articleEbay,$this->infosOpenLibrary,$articleSurf),200, []);
    }

    /**
     * récupure les infos de google
     * @throws \Exception
     */
    private function getGoogleIsbn(){
        $response = @file_get_contents('https://www.googleapis.com/books/v1/volumes?q=isbn:' . $this->isbn) ?? null;
        if($response == false){
            $this->infosGoogle['erreur'] = "Google Books n'a aucune information";
            return;
        }
        $article = $this->serializer->decode($response,'json');
        $this->infosGoogle = $article["items"][0]["volumeInfo"] ?? null;
        $keywords = '';
        $date = '';
        // transforme la date de publication de google en objet datetime
        if(!empty($this->infosGoogle['publishedDate'])){
            $keywords = str_split($this->infosGoogle['publishedDate']) ?? '';
        }
        if($keywords != ''){
            if(!empty($keywords[4])){
                $date = DateTime::createFromFormat('Y-m-j',$this->infosGoogle['publishedDate']);
            }else{
                $date = new DateTime($keywords[0].$keywords[1].$keywords[2].$keywords[3]."-01-01");
            }
        }
        $this->infosGoogle['publishedDate'] = $date;


    }

    /**
     * récupère les infos de ebay
     * @param $key -isbn/ean/code musique
     * @return mixed|void|null
     */
    public function getEbayIsbn($key){
        // url
        $firstEbay = 'https://svcs.ebay.com/services/search/FindingService/v1?SECURITY-APPNAME=ArthurDu-proktila-PRD-47ccf9c51-93b76bcb&OPERATION-NAME=findItemsByKeywords&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=JSON&REST-PAYLOAD&keywords=';
        // fin url
        $lastEbay = '&paginationInput.entriesPerPage=6&GLOBAL-ID=EBAY-FR&siteid=71&Content-Type=application/json';
        $response = @file_get_contents($firstEbay.$key.$lastEbay) ?? null;
        // gestion d'erreurs
        if($response == false){
            $this->infosEbay['erreur'] = "Ebay n'a aucune information";
            return;
        }
        // transforme en tableau php
        $articleEbay = $this->serializer->decode($response,'json');
        // récupère le 1er élément
        return $articleEbay['findItemsByKeywordsResponse'][0]['searchResult'][0]['item'][0] ?? null;
    }

    /**
     * récupère les infos de open Library
     * @throws \Exception
     */
    private function getOlIsbn(){
        $response = @file_get_contents('https://openlibrary.org/api/books?bibkeys=ISBN:'.$this->isbn.'&jscmd=data&format=json') ?? null;
        if($response == false){
            $this->infosOpenLibrary['erreur'] = "Open library n'a aucune information";
            return;
        }
        // transforme les données en tableau
        $article = $this->serializer->decode($response,'json');
        $this->infosOpenLibrary = array_shift($article) ?? null;


        // transforme la date de openlibrary en format datetime
        if(!empty($this->infosOpenLibrary['publish_date'])){
            $this->infosOpenLibrary['publish_date'] = new DateTime(date('Y-m-d', strtotime($this->infosOpenLibrary['publish_date'])));
        }
    }

    /**
     * récupère les infos xml de good read et les convertit en tableau
     */
    private function getGoodReadIsbn(){

        // récupère le xml
        $response = @file_get_contents("https://www.goodreads.com/book/isbn/".$this->isbn."?format=xml&key=GawUBNIKswjA2y2MmSA");
        // gestion d'erreurs
        if($response == false){
            $this->infosGoodRead['erreur'] = "Good read n'a aucune information";
            return;
        }
        // crée un élément php xml
        $xml = new SimpleXMLElement($response);
        // prend uniquement le contenu "book" du xml
        $xml = $xml->book;
        // transforme le xml en json puis en tableau php
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        // remplie un tableau avec le melange du json et du xml
        $infos['titre'] = $xml->title->__toString() ?? null;
        $infos['description'] = $xml->description->__toString() ?? null;
        $infos['auteurs'] = $this->getAuteursGoodRead(json_decode(json_encode($xml->authors)));
        $infos['image'] = $array['image_url'] ?? $array['small_image_url'] ?? null;
        $infos['publication'] = $this->getDateGoodRead($array['publication_year'],$array['publication_month'],$array['publication_day']);
        $infos['editeur'] = $array['publisher'];

        $this->infosGoodRead = $infos ?? null;
    }

    /**
     * Crée une date en fonction des éléments fournit ou renvoie null
     * @param $year -année
     * @param $month -mois
     * @param $day -jour
     * @return DateTime|null Date de publication
     */
    private function getDateGoodRead($year, $month, $day): ?DateTime
    {
        // si l'année est vide renvoi null
        if(empty($year)) return null;
        // si il y a 1 année et 1 mois et 1 jour
        else if (!empty($month) && !empty($day)){
            try {
                // crée date année-mois-jour
                return new DateTime($year . "-" . $month . "-" . $day);
            } catch (\Exception $e) {
                return null;
            }
        // sinon si il n'y a pas de jour mais quand même année et mois
        }else if(!empty($month)){
            try {
                // crée date année-mois-01
                return new DateTime($year . "-" . $month . "-01");
            } catch (\Exception $e) {
                return null;
            }
        }
        // il n'y a qu'une année
        try {
            // crée date année-01-01
            return new DateTime($year . "-01-01");
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * simplifie les auteurs en créant un tableau et en les incluants dedans
     * @param $auteurs -auteurs  en format json
     * @return mixed|null listeAuteurs/ 1 auteur / null
     */
    private function getAuteursGoodRead($auteurs){
        // vérifie si le xml contient des données
        if(empty($auteurs)) return null;
        $allAuteurs = [];
        // boucle sur les données envoyées
        foreach ($auteurs as $auteur){
            array_push($allAuteurs,$auteur);
        }
        $auteurs = [];
        if(is_array($allAuteurs[0])){
            $allAuteurs = array_shift($allAuteurs);
            foreach ($allAuteurs as $auteur){
                array_push($auteurs,$auteur->name);
            }
        }else{
            array_push($auteurs,$allAuteurs[0]->name);
        }
        // renvoie le 1 élement du tableau contenant tout les auteurs
        return $auteurs;
    }


    private function verifyResponseIsbn(){
        $infos['titres'] = $this->getTitres();

        $infos['auteurs'] = $this->getAuteurs();

        $infos['editeurs'] = $this->getEditeurs();

        $infos['publications'] = $this->getDatePublication();

        $infos['descriptions'] = [];
        array_push($infos['descriptions'],$this->infosGoogle['description'] ?? '');
        array_push($infos['descriptions'],$this->infosGoodRead['description'] ?? '');

        $infos['images'] = $this->getImages();

        $infos['erreurs'] = $this->getErreurs();


        return $infos;
    }

    /**
     * regroupe les titres des différentes api en 1 tableau
     * @return array de titre
     */
    private function getTitres(): array
    {
        $infos['titres'] = [];
        array_push($infos['titres'],$this->infosGoogle['title'] ?? '');
        array_push($infos['titres'],$this->infosGoodRead['titre'] ?? '');
        array_push($infos['titres'],$this->infosOpenLibrary['title'] ?? '');
        array_push($infos['titres'],$this->infosEbay['title'][0] ?? '');
        return $infos['titres'];
    }

    /**
     * regroupe les auteurs des différents api en 1 tableau
     * @return array d'auteurs
     */
    private function getAuteurs():array{
        $infos['auteurs'] = [];
        $infos['auteurs'] = $this->remplirTableauAuteur($this->infosGoogle["authors"] ?? null,$infos['auteurs']);
        $infos['auteurs'] = $this->remplirTableauAuteur($this->infosGoodRead['auteurs'] ?? null,$infos['auteurs']);
        array_push($infos['auteurs'], $this->infosOpenLibrary['authors'][0]["name"] ?? '');
        return $infos['auteurs'];
    }

    private function getEditeurs():array{
        $infos['editeurs'] = [];
        array_push($infos['editeurs'],$this->infosGoogle['publisher'] ?? '');
        array_push($infos['editeurs'],$this->infosGoodRead['editeur'] ?? '');
        array_push($infos['editeurs'],$this->infosOpenLibrary['publishers'][0]['name'] ?? '');
        return $infos['editeurs'];
    }

    private function getDatePublication():array{
        $infos['publication'] = [];
        array_push($infos['publication'], $this->infosGoogle['publishedDate'] ?? '');
        array_push($infos['publication'], $this->infosGoodRead['publication'] ?? '');
        array_push($infos['publication'], $this->infosOpenLibrary['publish_date'] ?? '');
        return $infos['publication'];
    }
    private function getErreurs():array{
        $infos['erreurs'] = [];
        array_push($infos['erreurs'], $this->infosGoogle['erreur'] ?? '');
        array_push($infos['erreurs'], $this->infosGoodRead['erreur'] ?? '');
        array_push($infos['erreurs'], $this->infosOpenLibrary['erreur'] ?? '');
        array_push($infos['erreurs'], $this->infosEbay['erreur'] ?? '');
        return $infos['erreurs'];
    }

    private function remplirTableauAuteur($entree,$sortie){
        if(!empty($entree)){
            foreach ($entree as $auteur){
                array_push($sortie,$auteur);
            }
        }
        return $sortie;
    }

    private function getImages(){
        $images = array();
        if (!empty($this->infosGoogle['imageLinks']) && !empty($this->infosGoogle['imageLinks']['thumbnail'])) {
            array_push($images,$this->infosGoogle['imageLinks']['thumbnail']);
        }
        if(!empty($this->infosOpenLibrary['cover'])){
            if(!empty($this->infosOpenLibrary['cover']['large'])) array_push($images,$this->infosOpenLibrary['cover']['large']);
            if(!empty($this->infosOpenLibrary['cover']['medium'])) array_push($images,$this->infosOpenLibrary['cover']['medium']);
            if(!empty($this->infosOpenLibrary['cover']['small'])) array_push($images,$this->infosOpenLibrary['cover']['small']);
        }
        if(!empty($this->infosGoodRead['image'])) array_push($images,$this->infosGoodRead['image']);
        if(!empty($this->infosEbay['galleryURL'][0])) array_push($images,$this->infosEbay['galleryURL'][0]);
        return $images;
    }


}