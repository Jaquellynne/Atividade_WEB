<?php

require_once 'CrudVendas.php';

class Venda  extends CrudVendas{
protected $tabela = 'venda';


//busca 1 venda
public function findUnit($id_venda)
{
$sql = "SELECT * FROM $this->tabela WHERE id_venda = :id_venda";
$stm = DB::prepare($sql);
$stm->bindParam(':id_venda', $id_venda, PDO::PARAM_INT);
$stm->execute();
return $stm->fetch();
}
//buscar todas as vendas
public function findAll() {
$sql = "SELECT * FROM $this->tabela";
$stm = DB::prepare($sql);
$stm->execute();
return $stm->fetchAll();
}

// inserir uma venda
public function insert()
{
$sql = "INSERT INTO $this->tabela (id_venda, id_cliente, valor_total) VALUES (:id_venda, :id_cliente, :valor_total)";
$stm = DB::prepare($sql);
$stm->bindParam(':id_venda', $id_venda);
$stm->bindParam(':id_cliente', $id_cliente);
$stm->bindParam(':valor_total', $valor_total);
return $stm->execute();
}


//update de itens
public function update($id_venda) {
    $sql = "UPDATE $this->tabela SET id_venda = :id_venda, id_cliente = :id_cliente, valor_total = :valor_total WHERE id_venda = :id_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_venda', $id_venda, PDO::PARAM_INT);
    $stm->bindParam(':id_cliente', $this->id_cliente);
    $stm->bindParam(':valor_total', $this->valor_total);
    return $stm->execute();
}
//deleta uma venda
public function delete($id_venda)
{
$sql = "DELETE FROM $this->tabela WHERE id_venda = :id_venda";
$stm = DB::prepare($sql);
$stm->bindParam(':id_venda', $id_Venda, PDO::PARAM_INT);
return $stm->execute();
}

}


