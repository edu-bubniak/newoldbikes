<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;

class Loja implements ControlaRequisicao
{
    public function processaRequisicao() : void
    {
        require __DIR__ . "/../../view/paginasPrincipais/pagina-loja.php";
    }
}