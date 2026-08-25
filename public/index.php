<?php
require __DIR__.'/vendor/autoload.php';
 
use Slim\Factory\AppFactory;
 
$app = AppFactory::create();
$app->get('/status', function ($request, $response) {
$response->getBody()->write(json_encode(['status' => 'ok']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});
 
$app = AppFactory::create();
$app->get('/nome', function ($request, $response) {
$response->getBody()->write(json_encode(['nome' => 'Luiza']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/curso', function ($request, $response) {
$response->getBody()->write(json_encode(['curso' => 'Informatica']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/gato', function ($request, $response) {
$response->getBody()->write(json_encode(['som' => 'Miau']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/dog', function ($request, $response) {
$response->getBody()->write(json_encode(['som' => 'Au Au']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/telefone', function ($request, $response) {
$response->getBody()->write(json_encode(['som' => 'Trimm Trimm']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/desmotivacional', function ($request, $response) {
$response->getBody()->write(json_encode(['frase' => 'O não você já tem, agora busque o humilhação']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/motivacional', function ($request, $response) {
$response->getBody()->write(json_encode(['frase' => 'Acredite nos seus sonhos e persista sempre']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/musica', function ($request, $response) {
$response->getBody()->write(json_encode(['musica' => 'A Thousand Years']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/filme', function ($request, $response) {
$response->getBody()->write(json_encode(['filme' => 'Como treinar seu dragão']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});


$app->get('/tic', function ($request, $response) {
$response->getBody()->write(json_encode(['resposta' => 'toc']));
return $response
->withHeader('Content-Type', 'application/json')
->withStatus(200);
});



$app->run();