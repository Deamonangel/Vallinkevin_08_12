<?php

namespace App\DataFixtures;

use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Album;
use App\Entity\Style;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        $artist = array();
        $style = array();
        $album = array();
        for ($i = 0; $i < 12; $i++) {
            $style[$i] = new Style();
            $style[$i]->setName($faker->sentence($nbWords = 6, $variableNbWords = true));

            $manager->persist($style[$i]);
        }

        for ($i = 0; $i < 4; $i++) {
            $artist[$i] = new Artist();
            $artist[$i]->setName($faker->sentence($nbWords = 6, $variableNbWords = true));
            $artist[$i]->setPicture("http://placehold.it/350x150");
            $artist[$i]->setStyle($style[3]);

            $manager->persist($artist[$i]);
        }

        for ($i = 0; $i < 12; $i++) {
            $album[$i] = new Album();
            $album[$i]->setName($faker->sentence($nbWords = 6, $variableNbWords = true));
            $album[$i]->setReleaseYear($faker->numberBetween($min = 1900, $max = 2020));
            $album[$i]->setcover("http://placehold.it/350x150");
            $album[$i]->setartist($artist[0]);

            $manager->persist($album[$i]);
        }

        $manager->flush();
    }
}
