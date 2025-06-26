<?php

class IsumoProduto{
  private $id;
  private $idProduto;
  private $idInsumo;

   public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getIdProduto() {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function getIdInsumo() {
        return $this->idInsumo;
    }

    public function setIdInsumo($idInsumo) {
        $this->idInsumo = $idInsumo;
    }
}
