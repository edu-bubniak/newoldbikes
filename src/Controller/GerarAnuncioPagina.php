<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Helper\FlashMessageTrait;

class GerarAnuncioPagina implements ControlaRequisicao
{
    use FlashMessageTrait;

    public function processaRequisicao() : void 
    {
        require __DIR__ . "/../../view/login/gerarAnuncio.php";
    }
}