
<?php

/**
* herda da classe crudProdutos
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/

require_once 'CrudItensVendas.php';

class ItensVenda extends CrudItensVendas {
protected $tabela = 'itens_venda'; //define a tabela do banco
//busca 1 item
public function findUnit($id_itens_venda) {
$sql = "SELECT * FROM $this->tabela WHERE id_itens_venda = :id_itens_venda";
$stm = DB::prepare($sql);
$stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
$stm->execute();
return $stm->fetch();
}
//busca todos os itens
public function findAll() {
$sql = "SELECT * FROM $this->tabela";
$stm = DB::prepare($sql);
$stm->execute();
return $stm->fetchAll();
}
//faz insert   
public function insert() {
$sql = "INSERT INTO $this->tabela ( quantidade, preco_unitario) VALUES (:quantidade, :preco_unitario)";
$stm = DB::prepare($sql);
$stm->bindParam(':quantidade', $this->quantidade);
$stm->bindParam(':preco_unitario', $this->preco_unitario);
return $stm->execute();
}
//update de itens
public function update($id_itens_venda) {
$sql = "UPDATE $this->tabela SET quantidade = :quantidade, preco_unitario = :preco_unitario WHERE id_itens_venda = :id_itens_venda";
$stm = DB::prepare($sql);
$stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
$stm->bindParam(':quantidade', $this->quantidade);
$stm->bindParam(':preco_unitario', $this->preco_unitario);
return $stm->execute();
}
//deleta 1 item
public function delete($id_itens_venda) {
$sql = "DELETE FROM $this->tabela WHERE id_itens_venda = :id_itens_venda";
$stm = DB::prepare($sql);
$stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
return $stm->execute();
}
}