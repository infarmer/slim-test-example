<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/{id}', function (Request $request, Response $response, array $args) {
    $id = (int)$args['id'];
    $response->getBody()->write($id);

    return $response;
});


$app->run();