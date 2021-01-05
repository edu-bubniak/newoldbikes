<?php 

namespace Oldbikes\Loja\Controller;

use Oldbikes\Loja\Controller\ControlaRequisicao;

class LoginPagina implements ControlaRequisicao
{
    public function processaRequisicao() : void
    {
        require __DIR__ . "/../../view/login/login.php";
    }
}