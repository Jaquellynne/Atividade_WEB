<?php

define('SERVER', 'localhost');
define('BANCO', 'web');
define('SENHA', 'postgress');
define('USER', 'root');
try{

$con = new pdo('mysql:host=' . SERVER . ';dbname=' . BANCO, USER, SENHA);
  echo "conexao ok";
}catch(PDOException $e){
echo "Erro gerado " . $e->getMessage(); 
}



?>