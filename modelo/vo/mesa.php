<?php
class Mesa{
    private $id;
    private $numero;
    private $status;

    function getId(){
        return $this->id;
    }

    function getNumero(){
        return $this->numero;
    }
    function getStatus(){
        return $this->status;
    }
    function setId($id){
            $this->id = $id;
    }
    function setNumero($Numero){
      $this-> numero = $numero;
    }
    function setStatus($Status){
       $this->Status = $Status;
    }
}