<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use App\DataFixtures\AppFixtures;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;


class MovieTest extends WebTestCase
{
    private static ?KernelBrowser $client = null;

    // public function setUp(): void
    // {
        // https://www.doctrine-project.org/projects/doctrine-data-fixtures/en/latest/how-to/loading-fixtures.html
     //   param ObjectMananger $manager
    //     $matrixMovie = new Movie();
    //     $matrixMovie->setTitle('The Matrix');
    //     $matrixMovie->setDescription('A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.');
    //     $matrixMovie->setReleaseDate(new \DateTime('1999-03-31'));
    //     $manager->persist($matrixMovie);

    //     $genreAction = new Genre();
    //     $genreAction->setName('Action');
    //     $matrixMovie->setGenre($genreAction);
    //     $genreRepository->save($genreAction,true);
        
    //     $blackPantherMovie = new Movie();
    //     $blackPantherMovie->setTitle('Black Panther');
    //     $blackPantherMovie->setDescription('After the death of his father, T\'Challa returns home to the African nation of Wakanda to take his rightful place as king.');
    //     $blackPantherMovie->setReleaseDate(new \DateTime('2018-02-16'));
    //     $blackPantherMovie->setGenre($genreAction);
    //     $movieRepository->save($blackPantherMovie,true);
        

    //     $bluesBrothersMovie = new Movie();
    //     $bluesBrothersMovie->setTitle('The Blues Brothers');
    //     $bluesBrothersMovie->setDescription('Jake Blues, just out from prison, puts together his old band to save the Catholic home where he and brother Elwood were raised.');
    //     $bluesBrothersMovie->setReleaseDate(new \DateTime('1980-06-20'));

    //     $genreMusical = new Genre();
    //     $genreMusical->setName('Musical');
    //     $bluesBrothersMovie->setGenre($genreMusical);
    //     $genreRepository->save($genreMusical,true);
    //     $movieRepository->save($bluesBrothersMovie,true);

    // }

    public function setUp(): void
    {
        
        self::bootKernel();
        $entityManager = self::getContainer()->get(EntityManagerInterface::class);


        // chargement des fixtures dans les tests
        $purger = new ORMPurger();
        $executor = new ORMExecutor($entityManager, $purger);
        


        $executor->execute([new AppFixtures()]);
        // $executor->execute([new MovieTestFixture()])

        self::ensureKernelShutdown();
    }

    public function testItShowsTheMoviesList(): void
    {
       
        $client = static::createClient();
        $client->request('GET', '/list/movie');

        $this->assertResponseIsSuccessful();
        $expectedMoviesCount = 3;
        $movieNodes = $client->getCrawler()->filter('ul.movies li');
        $this->assertCount($expectedMoviesCount, $movieNodes);

        $firstMovieHref = $movieNodes->eq(0)->filter('a')->attr('href');
        //$this->assertStringStartsWith('/movie/',$first)
       // $this->assertSelectorTextContains('h1', 'The Matrix');

        $client->request('GET', '/show/movie/4');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('div.details', 'The Matrix');
    }

    // public function testItThrowExceptionWhenMovieDoesntExist(): void
    // {
    //     $client = static::createClient();  
    //     $client->request('GET', '/show/movie/5');


    // }
}
