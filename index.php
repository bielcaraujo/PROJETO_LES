<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

//usuario

$app->get('/usuario', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'usuario.php';
    $response->withJson(getAllUsuario());
    return $response;
});

$app->get('/usuario/{id}', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'usuario.php';
    $response->withJson(getUsuario($args['id']));
    return $response;
});

$app->post('/usuario', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'usuario.php';
    $data = $request->getParsedBody();
    $response->withJson(insertUsuario($data["nome"], $data["idade"], $data["tipo"], $data["login"], $data["senha"], $data["genero"], $data["desc"]));
    return $response;
});

$app->post('/usuario/update', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'usuario.php';
    $data = $request->getParsedBody();
    $response->withJson(updateUsuario($data["id"], $data["nome"], $data["idade"], $data["tipo"], $data["login"], $data["senha"], $data["genero"], $data["desc"]));
    return $response;
});


//login
$app->get('/login', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'login.php';
    $response->withJson(getSession());
});

$app->post('/login', function (Request $request, Response $response, array $args) {   
    $response->withHeader('Content-type', 'application/json');
    $data = $request->getParsedBody();
    include 'login.php';
    $response->withJson(login($data));
    return $response;
});

//jogo

$app->get('/jogo', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'jogo.php';
    $response->withJson(getAllUsuario());
    return $response;
});

$app->get('/jogo/{id}', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'jogo.php';
    $response->withJson(getUsuario($args['id']));
    return $response;
});

$app->post('/jogo', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(insertJogo($data["nome"], $data["idade"], $data["tipo"], $data["login"], $data["senha"], $data["genero"], $data["desc"]));
    return $response;
});

$app->run();