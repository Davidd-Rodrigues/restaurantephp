<?php

class Permissao{
    private  $id;
    private  $nome;

    /*public function __construct($id, $nome) {
        $this->$id = $id;
        $this->$nome = $nome;
    }*/
    function getId(){
        return $this->id;
    }

    function setID($id){
        $this->$id=$id;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->$nome=$nome;
    }
}
