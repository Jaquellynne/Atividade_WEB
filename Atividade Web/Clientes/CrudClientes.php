

<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudClientes extends DB { //faz herança do arquivo DB
protected $cliente;
public $nome;
public $endereco;

public function setNome($nome) {
$this->nome = $nome;
}
public function getNome() {
return $this->nome;
}
public function setEndereco($endereco) {
$this->endereco = $endereco;
}
public function getEndereco() {
return $this->endereco;
}
}

##################################fim do arquivo 3
