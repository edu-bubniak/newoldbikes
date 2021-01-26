<?php 
require __DIR__. '/../../vendor/autoload.php';

use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Entity\Anuncio;

$entityManager = (new EntityManagerCreator())->getEntityManager();

$caminho = __DIR__ . '\foto1.jpeg';
$arquivo = file_get_contents($caminho);

$sql = "INSERT INTO oldbikes.anuncio(id,titulo,descricao,preco,imagem) VALUES(1 ,'teste','descricao','R$3000.00', $arquivo;)";
$stmt = $entityManager->query($sql);
$stmt->execute();

