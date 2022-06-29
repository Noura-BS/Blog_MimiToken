<?php

namespace App\DataFixtures;

use App\Entity\Editor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EditorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $editor = new editor();
        $editor->setName("Bragelonne");

        $editor1 = new editor();
        $editor1->setName("Michel Lafond");

        $editor2 = new editor();
        $editor2->setName("Calmann-Levy");

        $editor3 = new editor();
        $editor3->setName("J'ai lu");

        $this->addReference("bragelonne", $editor);
        $this->addReference("michel lafond", $editor1);
        $this->addReference("calmann-levy", $editor2);
        $this->addReference("j'ai lu", $editor3);
        $manager->persist($editor);
        $manager->persist($editor1);
        $manager->persist($editor2);
        $manager->persist($editor3);
        $manager->flush();
    }
}
