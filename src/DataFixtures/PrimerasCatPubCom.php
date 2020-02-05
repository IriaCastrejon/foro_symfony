<?php

namespace App\DataFixtures;

use App\Entity\Categoria;
use App\Entity\Comentario;
use App\Entity\Publicación;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PrimerasCatPubCom extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $p = new Publicación();
        $repoCat = $manager->getRepository(Categoria::class);

        $cat = $repoCat->findOneBy(
            ['nombre' => 'Deportes']
        );


        $p->setCategoria($cat);
        $p->setTitulo("Otra publicacion");
        $p->setContenido("A ver que pasa aqui");
        $p->setFechaPublicacion(new \DateTime("now"));


        $manager->persist($p);




        $com = new Comentario();

        $comentarios = ["Esperemos que funcione esta cosa", "comentario 2 para llegar a lo alto", " otra mas, funcionara?"];

        foreach ($comentarios as $coment){
            $com->setContenido($coment);
            $com->setFechaPublicacion(new \DateTime("now"));
            $com->setPublicacion($p);
            $manager->persist($com);
        }






        $manager->flush();
    }
}
