<?php

namespace App\DataFixtures;

use App\Entity\Diagram;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $diag = new Diagram();
        $diag->setCode("");
        
        $manager->flush();
    }
}
