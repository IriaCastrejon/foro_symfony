<?php

namespace App\DataFixtures;

use App\Entity\Categoria;
use App\Entity\Publicación;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PrimerasPublicaciones extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $p = new Publicación();
        $repoCat = $manager->getRepository(Categoria::class);

        $c = $repoCat->findOneBy(
            ['nombre' => 'Programación']
        );


        $p->setCategoria($c);
        $p->setTitulo("Mi primera publicación");
        $p->setContenido("Hola mundo de Symfony");
        $p->setFechaPublicacion(new \DateTime("now"));

        $manager->persist($p);

        $manager->flush();
    }
}
