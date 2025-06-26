<?php
class PermissaoUsuario {
    private $id;
    private $idPermissao;
    private $idUsuario;
    
    function getId() {
        return $this->id;
    }

    function getIdPermissao() {
        return $this->idPermissao;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdPermissao($idPermissao) {
        $this->idPermissao = $idPermissao;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }


    
}
