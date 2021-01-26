<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Entity\Anuncio;

class SlideCompra implements ControlaRequisicao
{
    private $repositorioDeAnuncios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeAnuncios = $entityManager->getReference('anuncio');
    }

    public function processaRequisicao() : void 
    {
        $id = filter_input(
            INPUT_GET,
            'id', 
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header('Location: /oldbikes-loja');
            return;
        }

        $anuncio = $this->repositorioDeAnuncios->find($id);
        require __DIR__ . "/../../view/paginasPrincipais/pagina-slide-compra.php";
    }
}