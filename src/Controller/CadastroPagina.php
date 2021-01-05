<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;

class CadastroPagina implements ControlaRequisicao
{
    public function processaRequisicao() : void
    {
        require __DIR__ . "/../../view/login/cadastro.php";
    }
}