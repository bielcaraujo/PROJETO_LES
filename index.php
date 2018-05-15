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

$app->get('/logout', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'login.php';
    $response->withJson(logout());
});
//jogo

$app->get('/jogo', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'jogo.php';
    $response->withJson(getAllJogo());
    return $response;
});

$app->get('/jogo/{id}', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'jogo.php';
    $response->withJson(getJogo($args['id']));
    return $response;
});

$app->post('/jogo', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(insertJogo($data["nome"], $data["plataforma"]));
    return $response;
});

$app->post('/jogo/update', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(updateJogo($data["id"], $data["nome"], $data["plataforma"]));
    return $response;
});

//usuario jogo
$app->get('/usuario_jogo', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'usuario_jogo.php';
    $response->withJson(getMyUsuarioJogo());
    return $response;
});

$app->get('/usuario_jogo/{id}', function (Request $request, Response $response, array $args) {
    $response = $response->withHeader('Content-Type', 'application/json');
    include 'usuario_jogo.php';
    $response->withJson(getUsuarioJogoFrom($args['id']));
    return $response;
});

$app->post('/usuario_jogo', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'usuario_jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(insertUsuarioJogo($data["jogo"], $data["conhecimento"], $data["tipo"]));
    return $response;
});

$app->post('/usuario_jogo/update', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'usuario_jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(updateUsuarioJogo($data["id"], $data["conhecimento"], $data["tipo"]));
    return $response;
});

$app->post('/usuario_jogo/delete', function (Request $request, Response $response, array $args) {
    $response->withHeader('Content-type', 'application/json');
    include 'usuario_jogo.php';
    $data = $request->getParsedBody();
    $response->withJson(deleteUsuarioJogo($data["id"]));
    return $response;
});

$app->run();