<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

# possibilité de mettre la racine route pour tout le controller
class Hello2WorldController extends AbstractController
{
    # /hello/{post<\w+>} our , requirements: ['post' => '\w+'] + , defaults: ['post' => 1]
    # ,condition: ***
    #[Route('/hello_b', name: 'app_hello2_world')]
    public function index(Request $request): Response
    {

        $param = $request->attributes;
        # ?? gère les valeurs nulles
        $name = $request->query->get('name','world') ?? 'World';
        dump($name);
        return $this->render('hello2_world/index.html.twig', [
            'controller_name' => 'Hello2WorldController',
        ]);
    }


    #[Route('/hello/{name}', name: 'hello')]
    public function afficheNom(Request $request, string $name = "nicolas"): Response
    {

        $param = $request->attributes;
        # ?? gère les valeurs nulles
        #$name = $request->query->get('name','world') ?? 'World';
        #dump($name);
        return $this->render('hello2_world/index.html.twig', [
            'name' => $name,
        ]);
    }
}
