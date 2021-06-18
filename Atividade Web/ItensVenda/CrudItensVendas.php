

<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudItensVendas extends DB { //faz herança do arquivo DB
protected $itens_venda;
public $id_itens_venda;
public $quantidade;
public $preco_unitario;

public function setIdItensVenda($id_itens_venda) {
$this->id_itens_venda = $id_itens_venda;
}
public function getIdItensVenda() {
return $this->id_itens_venda;
}
public function setQuantidade($quantidade) {
$this->quantidade = $quantidade;
}
public function getQuantidade() {
return $this->quantidade;
}
public function setPrecoUnitario($preco_unitario) {
$this->preco_unitario = $preco_unitario;
}
public function getPrecoUnitario() {
return $this->preco_unitario;
}

}

##################################fim do arquivo 3
