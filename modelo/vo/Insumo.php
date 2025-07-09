<?php
 class Insumo{
    public $id;
    public $nome;
    public $qtdEstoque;
    public $idProduto;

    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getQtdEstoque() {
        return $this->qtdEstoque;
    }
    function getIdProduto() {
        return $this->idProduto;
    }
    

 }

?>