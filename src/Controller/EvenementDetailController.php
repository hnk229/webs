<?php

namespace App\Controller;

use App\Entity\Evenements;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementDetailController extends AbstractController
{
    #[Route('/evenement/detail/{id}', name: 'app_evenement_detail')]
    public function index(Evenements $evenements): Response
    {

        

        return $this->render('Evenements/detail.html.twig', [
            'controller_name' => 'EvenementDetailController',
            'detail' => $evenements,
        ]);
    }
}
