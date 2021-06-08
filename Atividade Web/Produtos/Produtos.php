
<?php

/**
* herda da classe crudProdutos
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/

require_once 'CrudProdutos.php';

class Produto extends CrudProdutos {
protected $tabela = 'produto'; //define a tabela do banco
//busca 1 item
public function findUnit($id_produto) {
$sql = "SELECT * FROM $this->tabela WHERE id_produto = :id_produto";
$stm = DB::prepare($sql);
$stm->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
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
$sql = "INSERT INTO $this->tabela ( nome, tipo) VALUES (:nome, :tipo)";
$stm = DB::prepare($sql);
$stm->bindParam(':nome', $this->nome);
$stm->bindParam(':tipo', $this->tipo);
return $stm->execute();
}
//update de itens
public function update($id_produto) {
$sql = "UPDATE $this->tabela SET nome = :nome, tipo = :tipo WHERE id_produto = :id_produto";
$stm = DB::prepare($sql);
$stm->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
$stm->bindParam(':nome', $this->nome);
$stm->bindParam(':tipo', $this->tipo);
return $stm->execute();
}
//deleta 1 item
public function delete($id_produto) {
$sql = "DELETE FROM $this->tabela WHERE id_produto = :id_produto";
$stm = DB::prepare($sql);
$stm->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
return $stm->execute();
}
}