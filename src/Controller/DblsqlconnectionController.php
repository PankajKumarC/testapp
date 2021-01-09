<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DblsqlconnectionController extends AbstractController
{
    #[Route('/dblsqlconnection', name: 'dblsqlconnection')]
    public function index(): Response
    {
        return $this->render('dblsqlconnection/index.html.twig', [
            'controller_name' => 'DblsqlconnectionController',
        ]);
    }
}
