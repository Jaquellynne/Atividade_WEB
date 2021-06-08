
<?php

/**
* herda da classe crudClientes
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/

require_once 'CrudClientes.php';

class Cliente extends CrudClientes {
protected $tabela = 'cliente'; //define a tabela do banco
//busca 1 item
public function findUnit($id_cliente) {
$sql = "SELECT * FROM $this->tabela WHERE id_cliente = :id_cliente";
$stm = DB::prepare($sql);
$stm->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
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
$sql = "INSERT INTO $this->tabela ( nome, endereco) VALUES (:nome, :endereco)";
$stm = DB::prepare($sql);
$stm->bindParam(':nome', $this->nome);
$stm->bindParam(':endereco', $this->endereco);
return $stm->execute();
}
//update de itens
public function update($id_cliente) {
$sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id_cliente = :id_cliente";
$stm = DB::prepare($sql);
$stm->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
$stm->bindParam(':nome', $this->nome);
$stm->bindParam(':endereco', $this->endereco);
return $stm->execute();
}
//deleta 1 item
public function delete($id_cliente) {
$sql = "DELETE FROM $this->tabela WHERE id_cliente = :id_cliente";
$stm = DB::prepare($sql);
$stm->bindParam(':id_cliente', $id_cliente, PDO::PARAM_INT);
return $stm->execute();
}
}