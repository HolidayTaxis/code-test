<?php

use Slim\{
    App,
    Container
};
use Slim\Handlers\Strategies\RequestResponseArgs;

$app = new App([
    'settings' => [
        'displayErrorDetails' => getenv('APP_DEBUG'),
        'debug' => getenv('APP_DEBUG'),
    ],
    'foundHandler' => function() {
        return new RequestResponseArgs;
    }
]);

require __DIR__. '/routes.php';
require __DIR__. '/services.php';

return $app;
