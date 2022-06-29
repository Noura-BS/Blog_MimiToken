<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setRef("A0001");
        $book1->setTitle("La foudre et la furreur");
        $book1->setNbPages(410);
        $book1->setDescription("Brillant étudiant, féru d'histoire de l'art et polyglotte, Harry Booth est surtout un cambrioleur hors pair. L'appât du gain n'est pas son moteur, le Caméléon, comme la presse le surnomme, est accro à l'adrénaline. Celle qu'il a ressentie lors de son premier vol, à onze ans, commis pour couvrir les dettes de sa mère malade.
        Toujours sur les routes, depuis le décès de celle-ci, il fuit jusqu'en Europe les gri- es de Carter LaPorte, un puissant commanditaire qui déteste plus que tout qu'on lui résiste et est bien décidé à récupérer les talents d'Harry.
        Une seule échappatoire s'offre au Caméléon : l'affronter, et peut-être enfin revoir Miranda, son grand amour de jeunesse qu'il a dû sacrifier pour la protéger.");
        $book1->setPrice(10);
        $book1->setYEdition(2022);
        $book1->setCategory($this->getReference("fantastique"));
        $book1->setEditor($this->getReference("j'ai lu"));
        $book1->setAuthor($this->getReference("jennifer armentrout"));
        $book1->setUser($this->getReference("martine_admin"));
        $book1->setImage($this->getReference("la foudre et la furreur"));
       

        $book2 = new Book();
        $book2->setRef("A0002");
        $book2->setTitle("A l'ombre de la nuit");
        $book2->setNbPages(382);
        $book2->setDescription("Brillant étudiant, féru d'histoire de l'art et polyglotte, Harry Booth est surtout un cambrioleur hors pair. L'appât du gain n'est pas son moteur, le Caméléon, comme la presse le surnomme, est accro à l'adrénaline. Celle qu'il a ressentie lors de son premier vol, à onze ans, commis pour couvrir les dettes de sa mère malade.
        Toujours sur les routes, depuis le décès de celle-ci, il fuit jusqu'en Europe les gri- es de Carter LaPorte, un puissant commanditaire qui déteste plus que tout qu'on lui résiste et est bien décidé à récupérer les talents d'Harry.
        Une seule échappatoire s'offre au Caméléon : l'affronter, et peut-être enfin revoir Miranda, son grand amour de jeunesse qu'il a dû sacrifier pour la protéger.");
        $book2->setPrice(18);
        $book2->setYEdition(2022);
        $book2->setCategory($this->getReference("romance"));
        $book2->setEditor($this->getReference("michel lafond"));
        $book2->setAuthor($this->getReference("nora roberts"));
        $book2->setUser($this->getReference("martine_admin"));
        $book2->setImage($this->getReference("à l'ombre de la nuit"));
       

        $book3 = new Book();
        $book3->setRef("A0003");
        $book3->setTitle("Les ténèbres et la nuit");
        $book3->setNbPages(382);
        $book3->setDescription("Brillant étudiant, féru d'histoire de l'art et polyglotte, Harry Booth est surtout un cambrioleur hors pair. L'appât du gain n'est pas son moteur, le Caméléon, comme la presse le surnomme, est accro à l'adrénaline. Celle qu'il a ressentie lors de son premier vol, à onze ans, commis pour couvrir les dettes de sa mère malade.
        Toujours sur les routes, depuis le décès de celle-ci, il fuit jusqu'en Europe les gri- es de Carter LaPorte, un puissant commanditaire qui déteste plus que tout qu'on lui résiste et est bien décidé à récupérer les talents d'Harry.
        Une seule échappatoire s'offre au Caméléon : l'affronter, et peut-être enfin revoir Miranda, son grand amour de jeunesse qu'il a dû sacrifier pour la protéger.");
        $book3->setPrice(25);
        $book3->setYEdition(2022);
        $book3->setCategory($this->getReference("polar"));
        $book3->setEditor($this->getReference("calmann-levy"));
        $book3->setAuthor($this->getReference("mickeal connelly"));
        $book3->setUser($this->getReference("martine_admin"));
        $book3->setImage($this->getReference("des ténèbres et la nuit"));
       
        $book4 = new Book();
        $book4->setRef("A0004");
        $book4->setTitle("Le sang des anges");
        $book4->setNbPages(382);
        $book4->setDescription("L'Homme Debout, tueur en série aux victimes innombrables, s'est évadé de prison. Pour Ward Hopkins, pas de doute possible : 
        son frère a bénéficié de la complicité des sinistres Hommes de Paille. Mais seules deux personnes sont prêtes à le croire : sa petite amie Nina, enquêtrice du FBI en disgrâce, et John Zandt, ancien policier hanté par le meurtre de sa fille, et lui-même un homme recherché. 
        La disparition soudaine de Nina balaie ses derniers doutes : les Hommes de Paille ont repris les armes. C'est un véritable carnage qui s'annonce...");
        $book4->setPrice(15);
        $book4->setYEdition(2022);
        $book4->setCategory($this->getReference("polar"));
        $book4->setEditor($this->getReference("bragelonne"));
        $book4->setAuthor($this->getReference("mickael marshall"));
        $book4->setUser($this->getReference("martine_admin"));
        $book4->setImage($this->getReference("le sang des anges"));
       

        $manager->persist($book1);
        $manager->persist($book2);
        $manager->persist($book3);
        $manager->persist($book4);
        $this->addReference("la foudre et la furreur1", $book1);
        $this->addReference("a l'ombre de la nuit1", $book2);
        $this->addReference("les ténèbres et la nuit1", $book3);
        $this->addReference("le sang des anges1", $book4);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    public function getDependencies() {
        return [
            CategoryFixtures::class,
            EditorFixtures::class,
            AuthorFixtures::class,
            ImageFixtures::class,
            UserFixtures::class
        ];
    }
}
