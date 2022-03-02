<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisorController extends AbstractController
{
    #[Route('/app',name: 'vue' )]
    public function index(): Response
    {
        return $this->render('visor/index.html.twig', [
            'controller_name' => 'VisorController',
        ]);
    }
}
