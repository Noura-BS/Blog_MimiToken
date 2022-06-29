<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName("Fantastique");

        $category1 = new Category();
        $category1->setName("Polar");

        $category2 = new Category();
        $category2->setName("Romance");

        $category3 = new Category();
        $category3->setName("Thriller");

        $this->addReference("fantastique", $category);
        $this->addReference("polar", $category1);
        $this->addReference("romance", $category2);
        $this->addReference("thriller", $category3);
        $manager->persist($category);
        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->flush();
    }
}
