<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Continents;

class NationController extends AbstractController
{
    /** 
     * @Route("/", name="nation")
    */
    public function index()
    {
        $continent_id = $this->getDoctrine()->getRepository(Continents::class)->findAll();
        
        return $this->render('index.html.twig',['continent_id'=>$continent_id]);
    }
}
