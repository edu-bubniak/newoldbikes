<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;

class Home implements ControlaRequisicao
{
    public function processaRequisicao() : void
    {
        require __DIR__ . "/../../view/paginasPrincipais/principal.php";
    }
}