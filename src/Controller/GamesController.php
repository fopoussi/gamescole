<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GamesController extends AbstractController
{
    #[Route('/', name: 'app_games')]
    public function index(): Response
    {
        return $this->render('games/index.html.twig', [
            'controller_name' => 'GamesController',
        ]);
    }
    #[Route('/{id}', name: 'app_games_post')]
    public function show(): Response
    {
        return $this->render('games/show.html.twig', [
            'controller_name' => 'GamesController',
        ]);
    }
}
