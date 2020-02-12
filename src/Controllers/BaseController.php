<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;

class BaseController
{

    protected $view;

    public function __construct( ContainerInterface $container )
    {

        // all subclasses of this controller will likely require access to the view service
        // so we grab it from the DI container and make it available as an instance variable
        // not really true DI but a reasonable trade-off
        $this->view = $container['view'];

    }

}
