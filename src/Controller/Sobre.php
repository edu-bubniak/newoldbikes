<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;

class Sobre implements ControlaRequisicao
{
    public function processaRequisicao() : void
    {
        require __DIR__ . "/../../view/paginasPrincipais/pagina-sobre.php";
    }
}