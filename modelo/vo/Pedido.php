<?php 

class Pedido{
    private $id;
    private $idCliente;
    private $idMesa;
    
    function getId() {
        return $this->id;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdMesa() {
        return $this->idMesa;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdMesa($idMesa) {
        $this->idMesa = $idMesa;
    }


}