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
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setQtdEstoque($qtdEstoque) {
        $this->qtdEstoque = $qtdEstoque;
    }
    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }
    
    

 }

?>