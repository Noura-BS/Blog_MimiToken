<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $author = new author();
        $author->setFirstname("Nora");
        $author->setLastname("Roberts");

        $author1 = new author();
        $author1->setFirstname("Stephen");
        $author1->setLastname("King");

        $author2 = new author();
        $author2->setFirstname("Jennifer");
        $author2->setLastname("Armentrout");

        $author3 = new author();
        $author3->setFirstname("Mickael");
        $author3->setLastname("Connelly");

        $this->addReference("nora roberts", $author);
        $this->addReference("mickael marshall", $author1);
        $this->addReference("jennifer armentrout", $author2);
        $this->addReference("mickeal connelly", $author3);
        // $product = new Product();
        // $manager->persist($product);
        $manager->persist($author);
        $manager->persist($author1);
        $manager->persist($author2);
        $manager->persist($author3);

        $manager->flush();
    }
}
