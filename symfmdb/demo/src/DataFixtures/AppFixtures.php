<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Genre;
use App\Entity\Movie;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $hasher){

    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
       
        $matrixMovie = new Movie();
        $matrixMovie->setTitle('The Matrix');
        $matrixMovie->setDescription('A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.');
        $matrixMovie->setReleaseDate(new \DateTime('1999-03-31'));
        $manager->persist($matrixMovie);

        $genreAction = new Genre();
        $genreAction->setName('Action');
        $matrixMovie->setGenre($genreAction);
        //$genreRepository->save($genreAction,true);
        $manager->persist($genreAction);
        
        $blackPantherMovie = new Movie();
        $blackPantherMovie->setTitle('Black Panther');
        $blackPantherMovie->setDescription('After the death of his father, T\'Challa returns home to the African nation of Wakanda to take his rightful place as king.');
        $blackPantherMovie->setReleaseDate(new \DateTime('2018-02-16'));
        $blackPantherMovie->setGenre($genreAction);
        //$movieRepository->save($blackPantherMovie,true);
        $manager->persist($blackPantherMovie);
        

        $bluesBrothersMovie = new Movie();
        $bluesBrothersMovie->setTitle('The Blues Brothers');
        $bluesBrothersMovie->setDescription('Jake Blues, just out from prison, puts together his old band to save the Catholic home where he and brother Elwood were raised.');
        $bluesBrothersMovie->setReleaseDate(new \DateTime('1980-06-20'));

        $genreMusical = new Genre();
        $genreMusical->setName('Musical');
        $bluesBrothersMovie->setGenre($genreMusical);
        //$genreRepository->save($genreMusical,true);
        //$movieRepository->save($bluesBrothersMovie,true);
        $manager->persist($genreMusical);
        $manager->persist($bluesBrothersMovie);

        $manager->flush();

        $admin = new User();
        $admin 
            ->setEmail('john.doe@admin.com')
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $admin->setPassword($this->hasher->hashPassword($admin, 't'));

        $manager->persist($admin);
        $manager->flush();
    }
}
