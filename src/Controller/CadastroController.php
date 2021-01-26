<?php 

namespace Oldbikes\Loja\Controller;

use Oldbikes\Loja\Helper\FlashMessageTrait;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Entity\Usuario;

class CadastroController implements ControlaRequisicao
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
        $nome = filter_input(
            INPUT_POST,
            'nome',
            FILTER_SANITIZE_STRING
        );
       
        if (is_null($nome) || $nome === false || strlen($nome) == 0) {
            $this->defineMensagem('danger','Digite seu nome');
            header('Location: /oldbikes-cadastro');
            return; 
        }

        $email = filter_input(
                INPUT_POST,
                'email',
                FILTER_VALIDATE_EMAIL
            );

        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger','Digite seu email');
            header('Location: /oldbikes-cadastro');
            return;      
        }

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );
                

        if (is_null($senha) || $senha === false) {
            $this->defineMensagem('danger','Digite sua senha');
            header('Location: /oldbikes-cadastro');
            return;      
        }
        
        $usuario = $this->repositorioDeUsuarios
            ->montarUsuario($email, $senha, $nome);
        $usuarioValidado = $this->repositorioDeUsuarios
            ->validaEmail($usuario);
        $insertUsuario = $this->repositorioDeUsuarios
            ->InsertUsuario($usuarioValidado);
        $insertUsuario = $this->repositorioDeUsuarios->flush();

        if (is_null($insertUsuario) === false) {
            $this->defineMensagem('danger','Não foi possível criar seu usuário');
            header('Location: /oldbikes-cadastro');
            return;
        }

        $this->defineMensagem('success','Contra criada com sucesso');
        header('Location: /oldbikes-login');
    }


}