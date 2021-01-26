<?php 

namespace Oldbikes\Loja\Controller;

use Oldbikes\Loja\Helper\FlashMessageTrait;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Entity\Usuario;
use Oldbikes\Loja\Controller\LoginPagina;

class LoginController implements ControlaRequisicao
{
    use FlashMessageTrait;

    private $repositorioUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao() : void
    {   
        $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_VALIDATE_EMAIL
            );
        
        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger','E-mail inválido');
            header('Location: /oldbikes-login');
            return;            
        }

        $senha = filter_input(
                INPUT_POST,
                'senha',
                FILTER_SANITIZE_STRING
            );

        $usuario = $this->repositorioDeUsuarios
            ->find($email);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $this->defineMensagem('danger','E-mail ou senha incorretos');
            header('Location: /oldbikes-login');
            return;
        }

        $_SESSION['logado'] = true;
        header('Location: /oldbikes-home');

    }



}