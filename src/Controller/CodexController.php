<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CodexController extends AbstractController
{
    #[Route('/codex', name: 'app_codex')]
    public function index(): Response
    {
        return $this->render('codex/index.html.twig', [
            'controller_name' => 'CodexController',
        ]);
    }
}
