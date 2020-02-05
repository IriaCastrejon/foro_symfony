<?php

namespace App\DataFixtures;


use App\Entity\Comentario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PrimerosComentarios extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $comentario = new Comentario();

     //  $comentarm -rfrio.set

        //$manager->persist($cat);
      //  $manager->flush();


    }
}
