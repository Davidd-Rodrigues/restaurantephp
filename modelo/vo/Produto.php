<?php

class Produto {
    private $id;
    private $nome;
    private $precoFornecedor;
    private $precoVenda;
    private $quantidadeEmEstoque;
          
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPrecoFornecedor() {
        return $this->precoFornecedor;
    }

    function getPrecoVenda() {
        return $this->precoVenda;
    }

    function getQuantidadeEmEstoque() {
        return $this->quantidadeEmEstoque;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPrecoFornecedor($precoFornecedor) {
        $this->precoFornecedor = $precoFornecedor;
    }

    function setPrecoVenda($precoVenda) {
        $this->precoVenda = $precoVenda;
    }

    function setQuantidadeEmEstoque($quantidadeEmEstoque) {
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }


    
    
    
}
