<?php
    class Cliente {
        public $id;
        public $idnome;
        public $idtelefone;

        function getId() {
            return $this->id;
        }
        function getIdnome() {
            return $this->idnome;
        }
        function getIdtelefone() {
            return $this->idtelefone;
        }
    }
?>