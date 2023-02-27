<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListMovieController extends AbstractController
{
    //#[IsGranted('movie.age', subject: $movie)]
    #[Route('/list/movie', name: 'app_list_movie')]
    public function index(MovieRepository $movieRepository): Response
    {

        //$this->denyAccessUnlessGranted('movie.age',$movie);
        $movies = $movieRepository->findAll();
        return $this->render('list_movie/index.html.twig', [
            'movies' => $movies,
        ]);
    }

    

}
