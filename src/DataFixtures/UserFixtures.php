<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $admin = new User;
        $admin->setUsername('mimi');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setEmail('admin@admin.com');
        $admin->setFirstname('martine');
        $admin->setLastname('dupond');
        $admin->setNumTel('0611000000');
        $admin->setStreetNumber('45');
        $admin->setStreetName('Avenue de la gare');
        $admin->setCity($this->getReference("roanne"));
        $admin->setPassword($this->encoder->hashPassword($admin, 'MartinP@ssw0rd2022'));
        $admin->setBirthDate(new \DateTime());

        $user = new User;
        $user->setUsername('nounou');
        $user->setRoles(['ROLE_USER']);
        $user->setEmail('user@user.com');
        $user->setFirstname('noura');
        $user->setLastname('soltani');
        $user->setNumTel('0611000001');
        $user->setStreetNumber('40');
        $user->setStreetName('Avenue de la Loire');
        $user->setCity($this->getReference("riorges"));
        $user->setPassword($this->encoder->hashPassword($user, 'user'));
        $user->setBirthDate(new \DateTime());

        $manager->persist($admin);
        $manager->persist($user);
        $this->addReference("martine_admin", $admin);
        $this->addReference("noura_user", $user);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    public function getDependencies() {
        return [
            CityFixtures::class
        ];
    }
}
