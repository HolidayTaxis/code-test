<?php

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

use Slim\Views\{
    Twig,
    TwigExtension
};

use Symfony\Component\Dotenv\Dotenv;

$container = $app->getContainer();

// register Dotenv component with container
$container['env'] = function( $container ) {

    $dotenv = new Dotenv();

    $dotenv->load(__DIR__. '/../.env');

    return $dotenv;

};

// register Twig component with container
$container['view'] = function( $container ) {

    $view = new Twig(
        __DIR__. '/../resources/views',
        [
            'cache' => false,
        ]
    );

    // instantiate and add Slim specific extension
    $view->addExtension(
        new TwigExtension(
            $container->get('router'),
            rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/')
        )
    );

    return $view;

};
