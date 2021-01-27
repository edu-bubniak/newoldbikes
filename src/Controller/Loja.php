<?php 

namespace Oldbikes\Loja\Controller;
require __DIR__. '/../../vendor/autoload.php';

use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Entity\Anuncio;

class Loja implements ControlaRequisicao
{
    private $repositorioDeAnuncios;
    
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeAnuncios = $entityManager->getReference('anuncio');
    }
    public function processaRequisicao() : void
    {
        $anuncios = $this->repositorioDeAnuncios->findAll();
        require __DIR__ . "/../../view/paginasPrincipais/pagina-loja.php";
    }
}