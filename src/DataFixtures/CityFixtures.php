<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $city = new City();
        $city->setCp("42300");
        $city->setName("Roanne");

        $city1 = new City();
        $city1->setCp("42000");
        $city1->setName("Saint-Etienne");

        $city2 = new City();
        $city2->setCp("63000");
        $city2->setName("Clermont-Ferrand");

        $city3 = new City();
        $city3->setCp("42153");
        $city3->setName("Riorges");

        $this->addReference("roanne", $city);
        $this->addReference("saint-etienne", $city1);
        $this->addReference("clermont-ferrand", $city2);
        $this->addReference("riorges", $city3);
        $manager->persist($city);
        $manager->persist($city1);
        $manager->persist($city2);
        $manager->persist($city3);

        $manager->flush();
    }
}
