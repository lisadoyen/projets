<?php

namespace App\Repository;

use App\Data\ArticleSearch;
use App\Data\SearchData;
use App\Data\StatistiqueSearch;
use App\Entity\Article;
use App\Entity\Enregistrement;
use App\Form\StatistiqueSearchType;
use App\Service\Article\Nouveaute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function findByISBN(){
        $query = $this
            ->createQueryBuilder('a')
            ->andWhere("a.gencode != ''")
            ->andWhere("a.categorie = 1")
            ->andWhere("a.gencode != 0");
        return $query->getQuery()->getResult();
    }

    /** requete permettant de compter le nombre d'articles total (vendable, empruntable et emprunté)
     * -> qui peuvent être affiché sur le site
     * @return int|mixed|string
     */
    public function findNbArticleTotal(){
        $query = $this
            ->createQueryBuilder('a')
            ->select('count(a.id)')
            ->join('a.statut', 's')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable' or s.libelle = 'emprunte'  or s.libelle = 'reserve_emprunt' or s.libelle = 'reserve_achat'");
        try {
            return $query->getQuery()->getSingleScalarResult();
        } catch (NoResultException | NonUniqueResultException $e) {
            return null;
        }
    }


    public function findNbArticleTotalSortie()
    {
        $query = $this
            ->createQueryBuilder('a')
            ->select('count(a.id)')
            ->join('a.statut', 's')
            ->andWhere("s.libelle = 'vendu' or s.libelle = 'perdu' or s.libelle = 'donnee'");
        try {
            return $query->getQuery()->getSingleScalarResult();
        } catch (NoResultException | NonUniqueResultException $e) {
            return null;
        }
    }

    /** requete permettant de trouver tous les articles vendables (pour accueil)
     * @return int|mixed|string
     */
    public function findArticleVendable(){
        $query = $this
            ->createQueryBuilder('a')
            ->join('a.statut', 's')
            ->andWhere("s.libelle = 'vendable'");
        return $query->getQuery()->getResult();
    }

    /**
     * @param SearchData $search
     * @param $order
     * @param $type
     * @param EnregistrementRepository $enregistrementRepository
     * @return int|mixed|string
     */
    public function findSearch(SearchData $search, $order,$type, EnregistrementRepository $enregistrementRepository){
        return $this->getSearchQuery($enregistrementRepository, $order,$type,$search)->getQuery()->getResult();
    }

    public function getSearchQuery(EnregistrementRepository $enregistrementRepository, $order,$type,SearchData $search): \Doctrine\ORM\QueryBuilder
    {

        if($type == null) // si pas de selection du type
            $type = "date"; // rangement par date d'acquisition par défault
        if($order == null) // si pas de selection de l'ordre
            $order = "DESC"; // rangement par décroissant par défault

        $query = $this
            ->createQueryBuilder('a') // a = article
            ->join('a.genre', 'g')
            ->join('a.categorie', 'c')
            ->join('a.actions', 'ac')
            ->join('a.statut', 's')
            ->join('a.trancheAge', 'age')
            ->andWhere("s.libelle = 'vendable' or s.libelle = 'empruntable' or s.libelle = 'emprunte' 
                or s.libelle = 'reserve_emprunt' or s.libelle = 'reserve_achat'")
            ->groupBy("a.titre");



        if($type == "popularite") { // si le type (pour bouton trier par) est popularite
            $test = $enregistrementRepository->getNbEmpruntByArticleTrierPar($order);
            dd("test");
        }elseif ($type == "date"){ // si le type (pour bouton trier par) est date d'acqisistion
            $query = $query
                ->join('ac.typeAction', 't') // inner join sur la table TypeAction
                //->andWhere("t.libelle ='obtention'") // trier uniquement sur le type : obtention
                ->addSelect("(CASE WHEN t.libelle='obtention' THEN ac.date ELSE 0 END) AS HIDDEN date")
                ->addOrderBy("date", $order); // attribuer l'ordre et trier par date
        }else{
            $query = $query
                ->addOrderBy("a.$type", $order); // pour prix et titre
        }


        /* filtre date */
        if(!empty($search->dateMin)){
            $query = $query
                ->andWhere("a.datePublication >= '$search->dateMin'");
        }
        if(!empty($search->dateMax)){
            $query = $query
                ->andWhere("a.datePublication <= '$search->dateMax'");
        }

        // filtre rubrique
        if(!empty($search->rubrique)){
            $query = $query
                ->join('a.rubriques', 'r') // join sur les rubriques ici car tous les articles non pas forcément de rubriques associés
                ->andWhere('r.id IN (:rubrique)')
                ->setParameter('rubrique', $search->rubrique);
        }

        // filtre sur la barre de recherche
        if(!empty($search->q)){
            $query = $query
                ->join('a.entites', 'e') // join sur la table entites (pour les champs : prenom et nom)
                ->andWhere('a.titre LIKE :q OR e.nom LIKE :q OR e.prenom LIKE :q') // permet de cherche le titre de l'article, le nom ou le prenom de l'auteur/éditeur...
                ->setParameter('q', "%{$search->q}%");
        }

        // filtre par genre
        if(!empty($search->genre)) {
            //dd("test");
            $query = $query
                ->andWhere('g.id IN (:genre)')
                ->setParameter('genre', $search->genre);
        }

        // filtre pas categorie
        if(!empty($search->categorie)) {
            $query = $query
                ->andWhere('c.id IN (:categorie)')
                ->setParameter('categorie', $search->categorie);
        }

        // filtre par statut
        if(!empty($search->statut)) {
            $query = $query
                ->andWhere("s.id IN (:statut)")
                ->setParameter('statut', $search->statut);
        }

        // filtre par tranche d'age
        if(!empty($search->age)) {
            $query = $query
                ->andWhere("age.id IN (:age)")
                ->setParameter('age', $search->age);
        }

        // filtre par nouveaute
        if(!empty($search->nouveaute)){
            $nouveaute = new Nouveaute();
            $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
            $today = $dateTodayConvert->format('Y-m-d');
            $dateDureeMaxConvert=\DateTime::createFromFormat('d/m/Y',$nouveaute->transformDate($today, 500)); // TODO : 500 => récupérer la(les) durée(s) de(s) nouveauté(s) de(s) catégorie(s) du filtre
            $dateDureeMax = $dateDureeMaxConvert->format('Y-m-d');
            $query=$query
                ->join( 'ac.typeAction', 'ty')
                ->andWhere("ac.date BETWEEN '$dateDureeMax' AND '$today'")
                ->andWhere("ty.libelle='creation'")
                ->groupBy('a.titre');
        }

        // retourne la requete
        return $query;
    }


    public function findSearchStatistique(StatistiqueSearch $search){
        if($this->getSearchQueryStatistique($search) != null) {
            return $this->getSearchQueryStatistique($search)->getQuery()->getResult();
        }else{
            return null;
        }
    }


    public function getSearchQueryStatistique(StatistiqueSearch $search): ?\Doctrine\ORM\QueryBuilder
    {

        $query = $this
            ->createQueryBuilder('a') // a = article
            ->join('App:TypeEnregistrement', 't')
            ->join('a.categorie', 'c')
            ->join('a.genre', 'g')
            ->andWhere("t.libelle = 'emprunt'");

        if(!empty($search)) {
            // filtre pas categorie
            if (!empty($search->categorie)) {
                if (!empty($search->genre)) {
                    $query = $query
                        ->select('distinct count(c.libelle) as nbEmpruntByCategorie, c.libelle as categorie,
                         count(g.libelle) as nbEmpruntByGenre, g.libelle as genre')
                        ->andWhere('g.id IN (:genre)')
                        ->andWhere('c.id IN (:categorie)')
                        ->groupBy('c.libelle')
                        ->addGroupBy('g.libelle')
                        ->addOrderBy('nbEmpruntByGenre', 'DESC')
                        ->addOrderBy('nbEmpruntByCategorie', 'DESC')
                        ->setParameter('genre', $search->genre)
                        ->setParameter('categorie', $search->categorie);

                }
                else{
                    $query = $query
                        ->select('distinct count(c.libelle) as nbEmpruntByCategorie, c.libelle as categorie')
                        ->andWhere('c.id IN (:categorie)')
                        ->groupBy('c.libelle')
                        //->addOrderBy('nbEmpruntByCategorie', 'DESC')
                        ->setParameter('categorie', $search->categorie);
                }
            }

            return $query;

        }else{
           return null;
        }
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
