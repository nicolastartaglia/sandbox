<?php

namespace App\Controller;

use App\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MovieType;
use App\Repository\MovieRepository;

class CreateMovieController extends AbstractController
{
    #[Route('/create/movie', name: 'app_create_movie')]
    public function create(Request $request, MovieRepository $movieRepository): Response
    {
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);

        $form->handleRequest($request);

       //if($form->isSubmitted() && $form->isValid() && $this->IsGranted('ADMIN'){
        if($form->isSubmitted() && $form->isValid()){
            $movie = $form->getData();
            $movieRepository->save($movie,true);
            return $this->redirectToRoute('app_list_movie');
        }
        return $this->renderForm('create_movie/index.html.twig',[
            'creationForm' => $form,
        ]);

    }
    
}
