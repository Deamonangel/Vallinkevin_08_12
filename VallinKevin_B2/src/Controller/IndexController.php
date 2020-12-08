<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(AlbumRepository $albumRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'albums' => $albumRepository -> findAll()
        ]);
    }

    /**
     * @Route("/", name="accueil")
     */
    public function Accueil(AlbumRepository $albumRepository)
    {
        return $this->render('index/accueil.html.twig', [
            'controller_name' => 'IndexController',
            'albums' => $albumRepository -> findAll()
        ]);
    }

        /**
     * @Route("/artistes", name="artistes")
     */
    public function Artistes(ArtistRepository $artistesRepository)
    {
        return $this->render('index/Artistes.html.twig', [
            'controller_name' => 'IndexController',
            'artistes' => $artistesRepository -> findAll()
        ]);
    }

        /**
     * @Route("/showartistes", name="showartistes")
     */
    public function Showartistes()
    {
        return $this->render('index/Showartistes.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
