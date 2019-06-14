<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    const TYPES = ['Prospect' , 'Client'];

    public function load(ObjectManager $manager)
    {
        foreach (self::TYPES as $typeName) {
            $type = new Type();
            $type->setName($typeName);
            $manager->persist($type);
        }
        $manager->flush();
    }
}
