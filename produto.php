<?php


class Produto{
    private $id;
    private $descricao;
    private $un_medida;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;

        return $this;
    }

    public function getUn_medida(){
        return $this->un_medida;
    }

    public function setUn_medida($un_medida){
        $this->un_medida = $un_medida;

        return $this;
    }
}
