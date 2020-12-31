<?php 

require __DIR__ . "/../vendor/autoload.php";

use Oldbikes\Loja\Controller\{
    Home,
    Loja,
    Sobre
};

$rotas = [
    '/oldbikes-home' => Home::class,
    '/oldbikes-loja' => Loja::class,
    '/oldbikes-sobre' => Sobre::class 
];

return $rotas;