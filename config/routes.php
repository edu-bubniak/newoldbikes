<?php 

require __DIR__ . "/../vendor/autoload.php";

use Oldbikes\Loja\Controller\{
    Home,
    Loja,
    Sobre,
    LoginPagina,
    LoginController,
    CadastroPagina,
    CadastroController,
    Deslogar,
    SlideCompra,
    GerarAnuncioPagina,
    GerarAnuncioController
};

$rotas = [
    '/oldbikes-home' => Home::class,
    '/oldbikes-loja' => Loja::class,
    '/oldbikes-sobre' => Sobre::class,
    '/oldbikes-login' => LoginPagina::class,
    '/oldbikes-cadastro' => CadastroPagina::class,
    '/realiza-login' => LoginController::class,
    '/realiza-cadastro' => CadastroController::class,
    "/logout" => Deslogar::class,
    '/oldbikes-compra' => SlideCompra::class,
    '/oldbikes-gerar-anuncio' => GerarAnuncioPagina::class,
    '/oldbikes-upload' => GerarAnuncioController::class
];

return $rotas;