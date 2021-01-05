<?php 

require __DIR__ . '/../vendor/autoload.php';

use Oldbikes\Loja\Controller\ControlaRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . "/../config/routes.php";

if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
} 

$classeControladora = $rotas[$caminho];
/** @var ControlaRequisicao $controlador */
$controlador = new $classeControladora;
$controlador->processaRequisicao();

