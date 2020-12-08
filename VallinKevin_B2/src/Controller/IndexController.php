<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function Accueil()
    {
        return $this->render('index/accueil.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

        /**
     * @Route("/Artistes", name="Artistes")
     */
    public function Artistes()
    {
        return $this->render('index/Artistes.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

        /**
     * @Route("/Showartistes", name="Showartistes")
     */
    public function Showartistes()
    {
        return $this->render('index/Showartistes.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
