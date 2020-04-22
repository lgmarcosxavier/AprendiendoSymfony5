<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route(
     *  "lucky/number", 
     *  name="lucky_number", 
     *  methods={"GET", "HEAD"}
     * )
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);

    }

    /**
     * @Route(
     *  "mostrar/numero/{numero}",
     *  name="mostrar_numero",
     *  methods={"GET"},
     *  requirements={"numero"="[0-9]+"}
     * )
     *
     * @param [type] $numero
     * @return void
     */
    public function mostrarNumero($numero)
    {
        return new Response(
            '<html><body><h2>El número es: '. $numero .'</h2></body></html>'
        );
    }

    public function mostrarNumeroEnLetras($letras)
    {
        return new Response(
            '<html><body><h2>El número en letras es: '. $letras .'</h2></body></html>'
        );
    }
}