<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function inicio(): Response
    {
        $datos = [ 
            ['id' => 1, 'nombre' => 'Sergio', 'edad' => 41], 
            ['id' => 2, 'nombre' => 'Alberto', 'edad' => 23], 
            ['id' => 3, 'nombre' => 'Karen', 'edad' => 35], 
            ['id' => 4, 'nombre' => 'Micaela', 'edad' => 22,]
        ];
        return $this->render('home/index.html.twig', [
            'titulo' => 'SerSystems',
            'clientes' => $datos,
        ]);
        //return new Response('pagina inicio');
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        // ]);
    }

    /**
     * @Route("/cliente/{nombre}/{edad}", name="cliente")
     */
    public function cliente($nombre = "sin nombre", $edad = 0)
    {
        print_r('nombre de cliente '.$nombre.' tiene '.$edad.' años.');
        exit;
    }
}
