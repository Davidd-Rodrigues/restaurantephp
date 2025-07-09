<?php
class Endereco {
    private $id;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $idCliente;


    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getLogradouro() {
        return $this->logradouro;
    }
    
    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
}
?>
