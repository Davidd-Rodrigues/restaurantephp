<?php
class PedidoProduto {
    private $id;
    private $idPedido;
    private $idProduto;
    private $Quantidade;
    private $PrecoUnitario;

    function getId() {
       return $this ->id;
}
    function getIdPedido() {
        return $this ->idPedido;
}
     function getProduto() {
         return $this ->idproduto;
}
    function getQuantidade() {
        return $this ->Quantidade;
}
    function getPrecoUnitario() {
        return $this->PrecoUnitario;
}
    function setId($id) {
        $this-> = $id;
        }
    function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
        }
    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
        }
    function setQuantidade($Quantidade) {
        $this->Quantidade = $Quantidade;
        }

        function setPrecoUnitario($precoUnitario) {
            $this->PrecoUnitario = $PrecoUnitario;

        
      
