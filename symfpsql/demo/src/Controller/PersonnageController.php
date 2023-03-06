<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnage;

class PersonnageController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    #[Route('/persos', name: 'app_persos')]
    public function persos(): Response
    {
        Personnage::creerPersonnages();
        return $this->render('personnage/persos.html.twig', [
            'players' => Personnage::$personnages
        ]);
    }

    #[Route('/persos/{nom}', name: 'app_afficher')]
    public function afficherPerso($nom): Response
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/perso.html.twig', [
            "perso" => $perso
        ]);
    }
}
