<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $image = new Image();
        $image->setLink("https://static.fnac-static.com/multimedia/Images/FR/NR/24/d1/d8/14209316/1507-1/tsp20220625110408/La-foudre-et-la-fureur.jpg");
        $image->setDescription("couverture de la foudre et de la terreur");

        $image1 = new Image();
        $image1->setLink("https://static.fnac-static.com/multimedia/Images/FR/NR/51/ad/db/14396753/1507-1/tsp20220621080236/Les-tenebres-et-la-nuit.jpg");
        $image1->setDescription("couverture des ténèbres et la nuit");

        $image2 = new Image();
        $image2->setLink("https://static.fnac-static.com/multimedia/Images/FR/NR/54/9c/d8/14195796/1507-1/tsp20220617065927/A-l-ombre-de-la-nuit.jpg");
        $image2->setDescription("couverture de à l'ombre de la nuit");

        $image3 = new Image();
        $image3->setLink("https://static.fnac-static.com/multimedia/Images/FR/NR/38/50/d6/14045240/1507-1/tsp20220601062325/Le-Sang-des-anges.jpg");
        $image3->setDescription("couverture du sang des anges");

        $this->addReference("la foudre et la furreur", $image);
        $this->addReference("des ténèbres et la nuit", $image1);
        $this->addReference("à l'ombre de la nuit", $image2);
        $this->addReference("le sang des anges", $image3);
        $manager->persist($image);
        $manager->persist($image1);
        $manager->persist($image2);
        $manager->persist($image3);
        

        $manager->flush();
    }
}
