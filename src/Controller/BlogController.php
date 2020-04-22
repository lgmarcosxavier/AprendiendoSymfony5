<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    public function listarBlogs()
    {
        $blogs = array(
            [
                'id' => 1,
                'title' => 'First blog',
                'description' => 'My first blog'
            ],
            [
                'id' => 2,
                'title' => 'Learning Symfony 5',
                'description' => 'I have to learn Symfony 5, is funny!'
            ]
        );

        $response = new Response(json_encode($blogs));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function buscarBlog($id, $titulo, Request $request)
    {
        $routeName = $request->attributes->get('_route');

        return new Response(
            '<html>
                <body>
                    <h1>'. $titulo .'</h1>
                    <h2>
                        Buscando el blog con código: '. $id .
                    '</h2>
                    <h4>Nombre de la ruta es: '. $routeName .'</h4>
                </body>
            </html>'
        );
    }

}