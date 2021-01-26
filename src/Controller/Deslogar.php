<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Helper\FlashMessageTrait;

class Deslogar implements ControlaRequisicao
{
    use FlashMessageTrait;

    public function processaRequisicao() : void 
    {
        session_destroy();
        header('Location: /oldbikes-login');
    }
}