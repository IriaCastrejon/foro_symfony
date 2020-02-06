<?php

namespace App\Controller;

use App\Repository\PublicaciónRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicacionController extends AbstractController
{
    /**
     * @Route("/ultimas", name="ultimas-publicaciones")
     */
    public function index(PublicaciónRepository $pr)
    {
            //preguntar a los modelos
            $publicaciones = $pr->findAll();

            //pintar en vista

            return $this->render('publicacion/index.html.twig', [
            'listado_publicaciones' => $publicaciones,
        ]);
    }
}
