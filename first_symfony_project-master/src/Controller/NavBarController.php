<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NavBarController extends AbstractController
{
    /**
     * @Route("/", name="nav_bar") 
     
     */
    public function index()
    {
        return $this->render('nav_bar/index.html.twig', [
            'controller_name' => 'NavBarController',
        ]);
    }
}
