<?php

namespace App\Controller;

use App\Repository\EvenementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EvenementsRepository $repository): Response
    {
        $events = $repository->findAll();
        // dd($events);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'events' => $events,
        ]);
    }

    #[Route('/Evenements_passées', name: 'app_passer')]
    public function passer(EvenementsRepository $passer): Response
    {
        $passers = $passer -> findAll();

        return $this -> render('Evenements/eventPasse.html.twig',[
            'controller_name' => 'HomeController',
            'passer' => $passers,
        ]);
    }
}
