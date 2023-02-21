<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class HomeController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController','options'=> ['a','b','c']
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/option", name="app_option")
     */
    public function option(): Response
    {
        return $this->render('base.html.twig');
    }
}
