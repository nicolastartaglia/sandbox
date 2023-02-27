<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Movie;
use App\Omdb\OmdbGateway;

class ShowMovieController extends AbstractController
{
    // #[Route('/show/movie/{id}', name: 'app_show_movie')]
    // public function index(MovieRepository $movieRepository, int $id): Response
    // {
    //     $movie = $movieRepository->findOneBy(['id' => $id]);
    //     if(!$movie){
    //         throw $this->createNotFoundException('movie non trouvé');
    //     }
    //     return $this->render('show_movie/index.html.twig', [
    //         'movie' => $movie,
    //     ]);
    // }

    public function __construct(
        private OmdbGateway $omdbGateway
    )
    {
        
    }

    

    #[Route('/show/movie/{id}', name: 'app_show_movie')]
    public function index(MovieRepository $movieRepository, Movie $movie): Response
    {
        // $movie = $movieRepository->findOneBy(['id' => $id]);
        // if(!$movie){
        //     throw $this->createNotFoundException('movie non trouvé');
        // }

        $moviePoster = $this->omdbGateway->getPosterByMovie($movie);
        return $this->render('show_movie/index.html.twig', [
            'movie' => $movie,
            'moviePoster' => $moviePoster,
        ]);
    }
}
