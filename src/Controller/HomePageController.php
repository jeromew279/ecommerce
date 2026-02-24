<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomePageController extends AbstractController
{

    
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $studentsNames = ["AliBaba", "Alice", "Roger", "Pablo"];
        $age = 17;

        return $this->render('home_page/index.html.twig', [
            'names' => $studentsNames,
            'age' => $age
        ]);
    }
}
