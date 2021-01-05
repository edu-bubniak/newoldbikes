<?php

namespace Oldbikes\Loja\Infra;
use PDO;

use Oldbikes\Loja\Helper\EntityManager;

class EntityManagerCreator
{
    public function getEntityManager(): EntityManager
    {
        $caminhoBanco = __DIR__ . '/../../banco.sql';
        $pdo = new PDO('mysql:' . $caminhoBanco);

        return new EntityManager($pdo);        
    }

}
