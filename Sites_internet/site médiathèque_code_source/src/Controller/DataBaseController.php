<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DataBaseController extends AbstractController
{
    /**
     * @Route("/articles", name="operations_articles")
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function index()
    {
        return $this->render('data_base/operation_articles.html.twig');
    }

    /**
     * @Route("/database/articles/", name="data_base_articles")
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function DataBaseArticle()
    {
        return $this->render('data_base/data_base_articles.html.twig');
    }

    /**
     * @Route("/database/users/", name="data_base_users")
     * @IsGranted("ROLE_ADMIN")
     */
    public function DataBaseUsers()
    {
        return $this->render('data_base/data_base_users.html.twig');
    }

    /**
     * @Route("/database/{table}/file", name="data_base_file")
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function backupDataBase(Request $request, $table=null) :BinaryFileResponse
    {
        $projectRoot = $this->getParameter('kernel.project_dir');

        $file = $projectRoot.'/var/db-backup/'.$table.'-'.date('Y-m-d-H-i').'.sql';

        if ($table == 'complete') {
            $process= new Process([
                'mysqldump'
                , '--host=localhost'
                , '--user=root'
                , '--password='
                , 'mediatheque']);
        } else {
            $process= new Process([
                'mysqldump'
                , '--host=localhost'
                , '--user=root'
                , '--password='
                , 'mediatheque'
                , $table]);
        }

        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $resultat = $process->getOutput();

        //TODO Problème lors de la génération, avec les apostrophes et des insertions de ; à corriger
        // sinon marche, trouver un meilleur moyen de put dans un fichier
        file_put_contents($file, $resultat);

        $response = new BinaryFileResponse($file);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

        return $response;
    }
}
