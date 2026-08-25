<?php
require __DIR__ . '/../vendor/autoload.php';
 
use Slim\Factory\AppFactory;
 
$app = AppFactory::create();
 
// status
$app->get('/status', function ($request, $response) {
    $response->getBody()->write(json_encode(['status' => 'ok']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// nome
$app->get('/nome', function ($request, $response) {
    $response->getBody()->write(json_encode(['nome' => 'Luiza']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// curso
$app->get('/curso', function ($request, $response) {
    $response->getBody()->write(json_encode(['curso' => 'Informatica']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// gato
$app->get('/gato', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Miau']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// dog
$app->get('/dog', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Au Au']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// telefone
$app->get('/telefone', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Trimm Trimm']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// desmotivacional
$app->get('/desmotivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['frase' => 'O não você já tem, agora busque o humilhação']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// motivacional
$app->get('/motivacional', function ($request, $response) {
    $response->getBody()->write(json_encode(['frase' => 'Acredite nos seus sonhos e persista sempre']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// musica
$app->get('/musica', function ($request, $response) {
    $response->getBody()->write(json_encode(['musica' => 'A Thousand Years']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// filme
$app->get('/filme', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Como treinar seu dragão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// tic
$app->get('/tic', function ($request, $response) {
    $response->getBody()->write(json_encode(['resposta' => 'toc']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
// Atividade 2

// status 2
$app->get('/status2', function ($request, $response) {
    $response->getBody()->write(json_encode(['status2' => 'ok']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme1', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Como treinar seu dragão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme2', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Interestelar']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme3', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Poderoso Chefão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme4', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Duna: Parte 2']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme5', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Parasita']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme6', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Avatar']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme7', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Iluminado']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme8', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Mad Max: Estrada da Fúria']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->get('/filme9', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Clube da Luta']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});
 
$app->run();