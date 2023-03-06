<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'app_animaux')]
    public function index(AnimalRepository $repository): Response
    {
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig',[
            "animaux" => $animaux
        ]);
    }

    #[Route('/animal/{id}', name: 'app_afficher')]
    public function afficherAnimal(AnimalRepository $repository, $id): Response
    {
        $animal = $repository->find($id);
        return $this->render('animal/index.html.twig',[
            "animaux" => $animal
        ]);
    }
}
