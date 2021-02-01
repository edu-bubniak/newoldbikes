<?php 

namespace Oldbikes\Loja\Helper;
use Oldbikes\Loja\Infra\EntityManagerCreator;
use Oldbikes\Loja\Helper\FlashMessageTrait;
use Oldbikes\Loja\Entity\Anuncio;


class EntityManager 
{
    use FlashMessageTrait;

    private $statement;
    private $id;
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function getRepository($repositorio)
    {
        $this->statement = new $repositorio($this->id);
        return $this;
    }

    public function getReference($repositorio)
    {
        $this->statement = $this->pdo->query("SELECT * FROM $repositorio;");
        return $this;
    }

    public function find($param)
    {
        if($param === filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $usuario = $this->statement;

            $this->statement = $this->pdo->query("SELECT * FROM usuario WHERE EMAIL = '$param'");
            $findUsuario = $this->statement->fetch(\PDO::FETCH_ASSOC);
            
            $usuario->id = ($findUsuario['id']);
            $usuario->setEmail($findUsuario['email']);
            $usuario->setSenha($findUsuario['senha']);
            $usuario->setNome($findUsuario['nome']);
    
            return $usuario;
        }

        $anuncio = $this->statement; 
      
        $this->statement = $this->pdo->query("SELECT * FROM anuncio WHERE ID = '$param'");
        $anuncio = $this->statement->fetch(\PDO::FETCH_ASSOC);
        
        $anuncioMontado = new Anuncio(
            $anuncio['id'],
            $anuncio['titulo'],
            $anuncio['descricao'],
            $anuncio['preco'],
            $anuncio['foto1'],
            $anuncio['foto2'],
            $anuncio['foto3']
        );

        return $anuncioMontado;

    }

    public function montarUsuario($email, $senha, $nome)
    {
        $senhaCriptografada = $this->statement;
        $senhaPronta = $senhaCriptografada->criptografarSenha($senha);
        $usuario = [
            'email' => $email,
            'senha' => $senhaPronta,
            'nome' => $nome
        ];

        return $usuario;
        

    }

    public function validaEmail($usuario)
    {
        $email = $usuario['email'];

        $this->statement = $this->pdo->query("SELECT * FROM usuario WHERE EMAIL = '$email'");

        if($validaEmail = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
            return false;
        }
        
        return $usuario;
    }

    public function insertUsuario($usuario)
    {
        $dadosUsuario = [
            $email = $usuario['email'],
            $senha = $usuario['senha'],
            $nome = $usuario['nome']
        ];
        
        $sqlInsert = "INSERT INTO usuario (email,senha,nome) VALUES (:email,:senha,:nome)";  
        $this->statement = $this->pdo->prepare($sqlInsert);
        $this->statement->bindValue(':email', $email);
        $this->statement->bindValue(':senha', $senha);
        $this->statement->bindValue(':nome', $nome);

        return $this->statement;

    }

    public function montarAnuncio($titulo,$descricao,$preco,$data1,$data2,$data3)
    {
        $anuncio = [
            'titulo' => $titulo,
            'descricao' => $descricao,
            'preco' => $preco,
            'foto1' => $data1,
            'foto2' => $data2,
            'foto3' => $data3
        ];

        return $anuncio;
    }

    public function precoValido($preco)
    {
        $regex_preco = "/^[0-9]{1,3}([.][0-9]{3})*[,][0-9]{2}$/";
        return preg_match($regex_preco, $preco);
    }

    public function insertAnuncio($anuncio)
    {
            $titulo = $anuncio['titulo'];
            $descricao = $anuncio['descricao'];
            $preco = $anuncio['preco'];
            $data1 = $anuncio['foto1'];
            $data2 = $anuncio['foto2'];
            $data3 = $anuncio['foto3'];

        
        $sqlInsertAnuncio = "INSERT INTO anuncio (titulo,descricao,preco,foto1,foto2,foto3) VALUES (:titulo,:descricao,:preco,:data1,:data2,:data3)";

        $this->statement = $this->pdo->prepare($sqlInsertAnuncio);
        $this->statement->bindParam(':titulo', $titulo);
        $this->statement->bindParam(':descricao', $descricao);
        $this->statement->bindParam(':preco', $preco);
        $this->statement->bindParam(':data1', $data1, \PDO::PARAM_LOB);
        $this->statement->bindParam(':data2', $data2, \PDO::PARAM_LOB);
        $this->statement->bindParam(':data3', $data3, \PDO::PARAM_LOB);

        $this->statement->execute();
    }


    public function flush()
    {
        $this->statement->execute();
    }

    public function findAll()
    {
        $select = $this->statement->fetchAll(\PDO::FETCH_ASSOC);
        
        $listaAnuncio = [];

        foreach ($select as $anuncio) {
            $listaAnuncio[] = new Anuncio(
                $anuncio['id'],
                $anuncio['titulo'],
                $anuncio['descricao'],
                $anuncio['preco'],
                $anuncio['foto1'],
                $anuncio['foto2'],
                $anuncio['foto3']
            );
        }
        
        return $listaAnuncio;
    }

}