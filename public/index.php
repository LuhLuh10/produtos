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
 
// status xml

$app->get('/status/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><status>ok</status>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// nome
$app->get('/nome', function ($request, $response) {
    $response->getBody()->write(json_encode(['nome' => 'Luiza']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// nome xml
$app->get('/nome/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><nome>Luiza</nome>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// curso
$app->get('/curso', function ($request, $response) {
    $response->getBody()->write(json_encode(['curso' => 'Informatica']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});


// curso xml
$app->get('/curso/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><curso>Informatica</curso>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// gato
$app->get('/gato', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Miau']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});


// gato xml
$app->get('/gato/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><som>Miau</som>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// dog
$app->get('/dog', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Au Au']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// dog xml
$app->get('/dog/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><som>Au Au</som>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// telefone
$app->get('/telefone', function ($request, $response) {
    $response->getBody()->write(json_encode(['som' => 'Trimm Trimm']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});


// telefone xml
$app->get('/telefone/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><som>Trimm Trimm</som>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// desmotivacional
$app->get('/desmotivacional', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'frase' => 'O não você já tem, agora busque o humilhação'
    ]));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// desmotivacional xml
$app->get('/desmotivacional/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><frase>O não você já tem, agora busque o humilhação</frase>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// motivacional
$app->get('/motivacional', function ($request, $response) {
    $response->getBody()->write(json_encode([
        'frase' => 'Acredite nos seus sonhos e persista sempre'
    ]));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// motivacional xml
$app->get('/motivacional/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><frase>Acredite nos seus sonhos e persista sempre</frase>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// musica
$app->get('/musica', function ($request, $response) {
    $response->getBody()->write(json_encode(['musica' => 'A Thousand Years']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});


// musica xml
$app->get('/musica/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><musica>A Thousand Years</musica>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme
$app->get('/filme', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Como treinar seu dragão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme xml
$app->get('/filme/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Como treinar seu dragão</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// tic
$app->get('/tic', function ($request, $response) {
    $response->getBody()->write(json_encode(['resposta' => 'toc']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// tic xml
$app->get('/tic/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><resposta>toc</resposta>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
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

// status 2 xml
$app->get('/status2/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><status2>ok</status2>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 1
$app->get('/filme1', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Como treinar seu dragão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 1 xml
$app->get('/filme1/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Como treinar seu dragão</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 2
$app->get('/filme2', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Interestelar']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 2 xml
$app->get('/filme2/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Interestelar</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 3
$app->get('/filme3', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Poderoso Chefão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 3 xml
$app->get('/filme3/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>O Poderoso Chefão</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 4
$app->get('/filme4', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Duna: Parte 2']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 4 xml
$app->get('/filme4/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Duna: Parte 2</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 5
$app->get('/filme5', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Parasita']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 5 xml
$app->get('/filme5/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Parasita</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 6
$app->get('/filme6', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Avatar']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 6 xml
$app->get('/filme6/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Avatar</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 7
$app->get('/filme7', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Iluminado']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 7 xml
$app->get('/filme7/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>O Iluminado</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 8
$app->get('/filme8', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Mad Max: Estrada da Fúria']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 8 xml
$app->get('/filme8/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Mad Max: Estrada da Fúria</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});


// filme 9
$app->get('/filme9', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Clube da Luta']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// filme 9 xml
$app->get('/filme9/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Clube da Luta</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
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