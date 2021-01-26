<?php 

require __DIR__ . '/../vendor/autoload.php';

use Oldbikes\Loja\Controller\ControlaRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . "/../config/routes.php";

if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
} 

session_start();

$acessivel = stripos($caminho, 'oldbikes');
if(!isset($_SESSION['usuario_logado']) && $caminho !== '/logout' && $caminho !== '/realiza-login' && $caminho !== '/realiza-cadastro' && $acessivel === FALSE) {
    header('Location: /oldbikes-home');
    exit();
}


$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora;
$controlador->processaRequisicao();

