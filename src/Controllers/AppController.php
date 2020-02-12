<?php

namespace App\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class AppController extends BaseController
{

    public function home( Request $request, Response $response )
    {

        return $this->view->render($response, 'home.html');

    }

}
