<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdjiawaController extends AbstractController
{
    #[Route('/adjiawa', name: 'app_adjiawa')]
    public function index(): Response
    {
        return $this->render('adjiawa/index.html.twig', [
            'controller_name' => 'AdjiawaController',
        ]);
    }

    #[Route('/Adjiawa/formulaire', name: 'app_adjiawa_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('adjiawa/formulaire.html.twig', [
            'controller_name' => 'AdjiawaController',
        ]);
    }

    #[Route('/Adjiawa/cv', name: 'app_adjiawa_cv')]
    public function cv(): Response
    {
        return $this->render('adjiawa/cv.html.twig', [
            'controller_name' => 'AdjiawaController',
        ]);
    }

    #[Route('/Adjiawa/portfolio', name: 'app_adjiawa_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('Adjiawa/portfolio.html.twig', [
            'controller_name' => 'AdjiawaController',
        ]);
    }
    

}





