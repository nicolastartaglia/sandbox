<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Jawira\PlantUmlClient\Client;
use Jawira\PlantUmlClient\Format;

class PlantUMLController extends AbstractController
{
    #[Route('/plantUML', name: 'app_plant_u_m_l')]
    public function index(): Response
    {
        $puml = <<<PLANTUML
                @startuml
                Bob -> Alice : hello
                @enduml
        PLANTUML;

        $client = new Client();
        $url = $client->generateUrl($puml, Format::PNG);
        return $this->render('plant_uml/index.html.twig', [
            'urlUML' => $url,
        ]);
    }
}
