<?php

use App\Controller\BlogController;
use App\Controller\HomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('listar_blogs', '/listar/blogs') // name, url
        ->controller([
            BlogController::class, // clase controller
            'listarBlogs' // metodo
        ])
        ->methods([
            'GET', 
            'HEAD'
        ]);

    $routes->add('blog_buscar', '/blog/buscar/{id}') // name, url
        ->controller([BlogController::class, 'buscarBlog'])
        ->methods(['GET', 'HEAD' ])
        ->defaults([
            'id' => 1,
            'titulo' => 'Hola mundo!'
        ])->requirements([
                'id' => '[0-9]+'
        ]);

    $routes->add('inicio', '/inicio')
        ->controller([HomeController::class, 'paginaInicio'])
        ->methods(['GET']);

};