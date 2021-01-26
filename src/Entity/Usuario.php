<?php
namespace Oldbikes\Loja\Entity;

/**
 * @Entity
 * @Table(name="usuarios")
 */
class Usuario
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $email;
    /**
     * @Column(type="string")
     */
    private $senha;
    /**
     * @Column(type="string")
     */
    private $nome;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setNome(string $nome) : void 
    {
        $this->nome = $nome;
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email) : void 
    {
        $this->email = $email;
    }

    public function setSenha(string $senha) : void 
    {
        $this->senha = $senha;
    }

    public function __set($id, $valor)
    {
        if(!property_exists($this, $id)){
            throw new Excpetion("Atributo {$id} não existe nessa classe");
        }

        $this->{$id} = $valor;
    }

    public function __get($id)
    {
        if(!property_exists($this, $id)){
            throw new Excpetion("Atributo {$id} não existe nessa classe");
        }
        return $this->{$id};
    }

    /**Além de criptografar esse método verifica se a senha é nula*/
    public function criptografarSenha(string $senha)
    {
        $senhaCriptografada = password_hash($senha, PASSWORD_ARGON2I);
        return $senhaCriptografada;
    }

    public function senhaEstaCorreta(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);
    }
}
