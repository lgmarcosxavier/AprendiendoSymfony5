<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * Direccionar a la página principal.
     * @param Request $request
     * @return void
     */
    public function paginaInicio(Request $request)
    {
        // redireccionar a otra ruta, enviando los parametros necesarios de ese controlador
        return $this->redirectToRoute('blog_buscar', ['id' => 10]);

        // redireccionar a una ruta y mantener los parametros originales del request
        //return $this->redirectToRoute('blog_buscar', $request->query->all());


        //return $this->render('inicio.html.twig');
    }
}