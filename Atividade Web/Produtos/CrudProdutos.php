

<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudProdutos extends DB { //faz herança do arquivo DB
protected $produto;
public $nome;
public $tipo;

public function setNome($nome) {
$this->nome = $nome;
}
public function getNome() {
return $this->nome;
}
public function setTipo($tipo) {
$this->tipo = $tipo;
}
public function getTipo() {
return $this->tipo;
}
}

##################################fim do arquivo 3
