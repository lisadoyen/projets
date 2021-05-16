<?php


namespace App\Controller\Api;


use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Entite;
use App\Repository\ArticleRepository;
use App\Repository\EntiteRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEntiteRepository;
use App\Repository\UserRepository;
use App\Service\Api\LivreApi;
use Doctrine\ORM\EntityManagerInterface;
use SimpleXMLElement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/api/video")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class VideoApiController extends AbstractController
{
    /**
     * @Route("/{gencode}", name="oneVideo", methods={"GET","POST"}, options={"expose" = true})
     * @param ArticleRepository $articleRepository
     * @IsGranted("ROLE_ADMIN")
     * @return RedirectResponse
     */
    public function oneVideo($gencode, ArticleRepository $articleRepository){
        $xml = simplexml_load_file("https://www.dvdfr.com/api/search.php?gencode=".$gencode);
        $xml = $xml->dvd;
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        $xml = simplexml_load_file("https://www.dvdfr.com/api/dvd.php?id=".$array["id"]);
        dd($xml);
        $xml = $xml->dvd;
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        dd($array);



        return $this->redirectToRoute("index");
    }

    public function findByVideo(){
        $query = $this
            ->createQueryBuilder('a')
            ->andWhere("a.gencode != ''")
            ->andWhere("a.categorie = 2")
            ->andWhere("a.gencode != 0");
        return $query->getQuery()->getResult();
    }
    
}