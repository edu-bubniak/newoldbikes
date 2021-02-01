<?php 

namespace Oldbikes\Loja\Controller;
use Oldbikes\Loja\Controller\ControlaRequisicao;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Entity\Anuncio;
use Oldbikes\Loja\Helper\FlashMessageTrait;

class GerarAnuncioController implements ControlaRequisicao
{
    use FlashMessageTrait;
    
    private $repositorioDeAnuncios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeAnuncios = $entityManager->getReference('anuncio');
    }

    public function processaRequisicao() : void
    {
        if(isset($_POST['btn'])){

            $titulo = filter_input(
                INPUT_POST,
                'titulo',
                FILTER_SANITIZE_STRING
            );

            if (is_null($titulo) || $titulo === false || strlen($titulo) == 0) {
                $this->defineMensagem('danger','Titulo inválido');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }

            $descricao = filter_input(
                INPUT_POST,
                'descricao',
                FILTER_SANITIZE_STRING
            );

            if (is_null($descricao) || $descricao === false || strlen($descricao) == 0) {
                $this->defineMensagem('danger','Descrição inválida');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }

            $preco = filter_input(
                INPUT_POST,
                'preco',
                FILTER_SANITIZE_STRING
            );

            if (is_null($preco) || $preco === false || strlen($preco) == 0 || !$this->repositorioDeAnuncios->precoValido($preco)) {
                $this->defineMensagem('danger','Preço inválido');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }

            /*$data = file_get_contents($_FILES['data']['tmp_name']);*/
            $data1 = file_get_contents($_FILES['data1']['tmp_name']);

            if (is_null($data1) || $data1 === false || strlen($data1) == 0) {
                $this->defineMensagem('danger','Imagem inválida');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }

            $data2 = file_get_contents($_FILES['data2']['tmp_name']);

            if (is_null($data2) || $data2 === false || strlen($data2) == 0) {
                $this->defineMensagem('danger','Imagem inválida');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }

            $data3 = file_get_contents($_FILES['data3']['tmp_name']);

            if (is_null($data3) || $data3 === false || strlen($data3) == 0) {
                $this->defineMensagem('danger','Imagem inválida');
                header('Location: /oldbikes-gerar-anuncio');
                return;            
            }
            
            $anuncioMontado = $this->repositorioDeAnuncios
                ->montarAnuncio($titulo,$descricao,$preco,$data1,$data2,$data3);
            $insertAnuncio = $this->repositorioDeAnuncios
                ->insertAnuncio($anuncioMontado);

            
            if (is_null($insertAnuncio) === false) {
                header('Location: /oldbikes-gerar-anuncio');
                return;
            }

            header('Location: /oldbikes-loja');
        }

    }
}
    