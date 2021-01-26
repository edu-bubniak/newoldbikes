<?php

namespace Oldbikes\Loja\Infra;
use PDO;

use Oldbikes\Loja\Helper\EntityManager;

class EntityManagerCreator
{
    public function getEntityManager(): EntityManager
    {
        try {
            $caminhoBanco = __DIR__ . '/../../banco.sql';
            $pdo = new \PDO('mysql:host=localhost;dbname=oldbikes','root','1234');

            return new EntityManager($pdo); 
                
        } catch(PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
            exit();
        }   
    }

}
