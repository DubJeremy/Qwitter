<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QwitterController extends AbstractController
{
    /**
     * @Route("/qwitter", name= "app_qwitter_index")
     */
    public function index(): Response
    {
        return $this->render('qwitter/index.html.twig', [
            'controller_name' => 'QwitterController',
        ]);
    }
}
