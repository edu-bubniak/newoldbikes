<?php 

require __DIR__ . "/../vendor/autoload.php";

use Oldbikes\Loja\Controller\{
    Home,
    Loja,
    Sobre,
    LoginPagina,
    CadastroPagina
};

$rotas = [
    '/oldbikes-home' => Home::class,
    '/oldbikes-loja' => Loja::class,
    '/oldbikes-sobre' => Sobre::class,
    '/oldbikes-login' => LoginPagina::class,
    '/oldbikes-cadastro' => CadastroPagina::class
];

return $rotas;