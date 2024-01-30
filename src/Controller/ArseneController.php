<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArseneController extends AbstractController
{
    
    
    #[Route('/arsene', name: 'arsene')]
    public function index(): Response
    {
        return $this->render('arsene/index.html.twig', [
            'controller_name' => 'ArseneController',
        ]);
    }
    
    #[Route('/', name: 'arsene')]
    Public function home() 
    { 
        return $this->render('arsene/home.html.twig');
    } 
    #[Route('/plus', name: 'plus')]
    public function about(): Response
    {
        return $this->render('arsene/plus.html.twig');
    }
    #[Route('/ars1', name: 'ars1')]
    public function ars1(): Response
    {
        return $this->render('arsene/ars1.html.twig');
    }
    #[Route('/ars2', name: 'ars2')]
    public function ars2(): Response
    {
        return $this->render('arsene/ars2.html.twig');
    }
    

   
}
