<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Movie;
use App\Repository\GenreRepository;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoadMoviesController extends AbstractController
{
    #[Route('/load/movies', name: 'app_load_movies')]
    public function index(MovieRepository $movieRepository, GenreRepository $genreRepository): Response
    {
        // return $this->render('load_movies/index.html.twig', [
        //     'controller_name' => 'LoadMoviesController',
        // ]);
        $matrixMovie = new Movie();
        $matrixMovie->setTitle('The Matrix');
        $matrixMovie->setDescription('A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.');
        $matrixMovie->setReleaseDate(new \DateTime('1999-03-31'));
        $movieRepository->save($matrixMovie,true);

        $genreAction = new Genre();
        $genreAction->setName('Action');
        $matrixMovie->setGenre($genreAction);
        $genreRepository->save($genreAction,true);
        
        $blackPantherMovie = new Movie();
        $blackPantherMovie->setTitle('Black Panther');
        $blackPantherMovie->setDescription('After the death of his father, T\'Challa returns home to the African nation of Wakanda to take his rightful place as king.');
        $blackPantherMovie->setReleaseDate(new \DateTime('2018-02-16'));
        $blackPantherMovie->setGenre($genreAction);
        $movieRepository->save($blackPantherMovie,true);
        

        $bluesBrothersMovie = new Movie();
        $bluesBrothersMovie->setTitle('The Blues Brothers');
        $bluesBrothersMovie->setDescription('Jake Blues, just out from prison, puts together his old band to save the Catholic home where he and brother Elwood were raised.');
        $bluesBrothersMovie->setReleaseDate(new \DateTime('1980-06-20'));

        $genreMusical = new Genre();
        $genreMusical->setName('Musical');
        $bluesBrothersMovie->setGenre($genreMusical);
        $genreRepository->save($genreMusical,true);
        $movieRepository->save($bluesBrothersMovie,true);


        return new Response('Movies successfully loaded.');
    }
}
