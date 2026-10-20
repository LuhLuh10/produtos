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
    $response->getBody()->write(json_encode(['frase' => 'O não você já tem, agora busque o humilhação']));
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
    $response->getBody()->write(json_encode(['frase' => 'Acredite nos seus sonhos e persista sempre']));
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

// status 2
$app->get('/status2', function ($request, $response) {
    $response->getBody()->write(json_encode(['status2' => 'ok']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

// status2 xml
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

// filme1 xml
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

// filme2 xml
$app->get('/filme2/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Interestelar</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme3', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Poderoso Chefão']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme3/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>O Poderoso Chefão</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme4', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Duna: Parte 2']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme4/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Duna: Parte 2</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme5', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Parasita']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme5/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Parasita</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme6', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Avatar']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme6/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Avatar</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme7', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'O Iluminado']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme7/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>O Iluminado</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme8', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Mad Max: Estrada da Fúria']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme8/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Mad Max: Estrada da Fúria</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/filme9', function ($request, $response) {
    $response->getBody()->write(json_encode(['filme' => 'Clube da Luta']));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/filme9/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filme>Clube da Luta</filme>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/populares', function ($request, $response) {
    $dados = ['populares' => ['Attack on Titan', 'Demon Slayer', 'Jujutsu Kaisen', 'One Piece']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/populares/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><populares><anime>Attack on Titan</anime><anime>Demon Slayer</anime><anime>Jujutsu Kaisen</anime><anime>One Piece</anime></populares>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/generos', function ($request, $response) {
    $dados = ['generos' => ['Shonen', 'Seinen', 'Isekai', 'Mecha', 'Shojo', 'Slice of Life']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/generos/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><generos><genero>Shonen</genero><genero>Seinen</genero><genero>Isekai</genero><genero>Mecha</genero><genero>Shojo</genero><genero>Slice of Life</genero></generos>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/estudios', function ($request, $response) {
    $dados = ['estudios' => ['MAPPA', 'ufotable', 'Studio Ghibli', 'Kyoto Animation', 'Madhouse']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/estudios/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><estudios><estudio>MAPPA</estudio><estudio>ufotable</estudio><estudio>Studio Ghibli</estudio><estudio>Kyoto Animation</estudio><estudio>Madhouse</estudio></estudios>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/protagonistas', function ($request, $response) {
    $dados = ['protagonistas' => ['Monkey D. Luffy', 'Naruto Uzumaki', 'Eren Yeager', 'Saitama']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/protagonistas/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><protagonistas><protagonista>Monkey D. Luffy</protagonista><protagonista>Naruto Uzumaki</protagonista><protagonista>Eren Yeager</protagonista><protagonista>Saitama</protagonista></protagonistas>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/filmes', function ($request, $response) {
    $dados = ['filmes' => ['A Viagem de Chihiro', 'Your Name', 'Koe no Katachi', 'Akira']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/filmes/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><filmes><filme>A Viagem de Chihiro</filme><filme>Your Name</filme><filme>Koe no Katachi</filme><filme>Akira</filme></filmes>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/classicos', function ($request, $response) {
    $dados = ['classicos' => ['Dragon Ball Z', 'Cowboy Bebop', 'Neon Genesis Evangelion', 'Death Note']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/classicos/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><classicos><classico>Dragon Ball Z</classico><classico>Cowboy Bebop</classico><classico>Neon Genesis Evangelion</classico><classico>Death Note</classico></classicos>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/viloes', function ($request, $response) {
    $dados = ['viloes' => ['Madara Uchiha', 'Meruem', 'Johan Liebert', 'Aizen Sosuke']];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/viloes/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><viloes><vilao>Madara Uchiha</vilao><vilao>Meruem</vilao><vilao>Johan Liebert</vilao><vilao>Aizen Sosuke</vilao></viloes>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/frase', function ($request, $response) {
    $dados = [
        'frase' => 'Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.',
        'autor' => 'Naruto Uzumaki'
    ];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/frase/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><frase><texto>Se você não gosta do seu destino, não o aceite. Em vez disso, tenha a coragem para mudá-lo.</texto><autor>Naruto Uzumaki</autor></frase>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});

$app->get('/animes/curiosidades', function ($request, $response) {
    $dados = ['curiosidade' => 'Sazae-san é a série de anime de televisão mais longa do mundo, sendo exibida desde 1969.'];
    $response->getBody()->write(json_encode($dados));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/animes/curiosidades/xml', function ($request, $response) {
    $response->getBody()->write('<?xml version="1.0" encoding="UTF-8"?><curiosidade>Sazae-san é a série de anime de televisão mais longa do mundo, sendo exibida desde 1969.</curiosidade>');
    return $response
        ->withHeader('Content-Type', 'application/xml')
        ->withStatus(200);
});



/*


                                   ATIVIDADE 3 - SLIM



*/

//GET
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$produtos = [
['id' => 1, 'nome' => 'Teclado'],
['id' => 2, 'nome' => 'Mouse'],
['id' => 3, 'nome' => 'Monitor'],
['id' => 4, 'nome' => 'Laptop'],
['id' => 5, 'nome' => 'Cadeira Gamer'],
['id' => 6, 'nome' => 'Fone de Ouvido'],
];

$app->get('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
$produto = current(array_filter($produtos, fn ($p) => $p['id'] === (int) $args['id'])) ?: null;
if (!$produto) {
$response->getBody()->write(json_encode(['erro' => 'Produto não encontrado']));
return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
}
$response->getBody()->write(json_encode($produto));
return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
});

//POST
$app->post('/produtos', function ($request, $response) use (&$produtos) {
$dados = $request->getParsedBody();
$novoProduto = ['id' => count($produtos) + 1, 'nome' => $dados['nome']];
$produtos[] = $novoProduto;
$response->getBody()->write(json_encode($novoProduto));
return $response->withHeader('Content-Type', 'application/json')->withStatus(201);
});


$app->get('/produtos',function ($request, $response, $args) use  (&$produtos) {
    $queryParams = $request->getQueryParams();
    $nome = $queryParams ['nome ' ] ?: null;
 
    if($nome) {
 $filtrados = array_filter($produtos,fn($item) => str_contains(mb_strtolower($item['nome']), mb_strtolower($nome)));
    $response->getBody()->write(json_encode($filtrados));
}else{
    $response->getBody()->write(json_encode($produtos));
 
     return$response->withHeader('Content-Type','application/json')->withStatus(200);
}
});

/*


                                   ATIVIDADE 4 - PUT



*/

//PUT
$app->put('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
    $dados = $request->getParsedBody();
    foreach ($produtos as &$produto) {
    if ($produto['id'] === (int) $args['id']) {
        $produto['nome' ] = $dados['nome'];
        $response->getBody()->write(json_encode($produto));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
  }
return $response->withStatus(404);
});

//DELETE
$app->delete('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
    $produtos = array_values(array_filter($produtos, fn($p) => $p['id'] !== (int) $args['id']));
    return $response->withStatus(204);
});
$app->run();