<?php 

namespace Oldbikes\Loja\Entity;

class Anuncio 
{
    private $id;

    private $titulo;

    private $descricao;

    private $preco;

    private $foto1;

    private $foto2;

    private $foto3;

    public function __construct($id, $titulo, $descricao, $preco, $foto1, $foto2, $foto3)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->foto1 = $foto1;
        $this->foto2 = $foto2;
        $this->foto3 = $foto3;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitulo() : string 
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo) : void 
    {
        $this->titulo = $titulo;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescricao() : string 
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) : void 
    {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) : void 
    {
        $this->preco = $preco;
    }

    public function getPreco() : string 
    {
        return $this->preco;
    }

    public function setFoto1($foto1) : void
    {
        $this->foto1 = $foto1;
    }

    public function setFoto2($foto2) : void
    {
        $this->foto2 = $foto2;
    }

    public function setFoto3($foto3) : void
    {
        $this->foto3 = $foto3;
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

}