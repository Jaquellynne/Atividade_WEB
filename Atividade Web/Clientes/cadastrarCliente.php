<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Clientes.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<head>
        <title> Cadastro de Clientes - WEB I</title>
        <h1> Cadastrar Clientes </h1>
<style type="text/css">
body {
    background-color: lightgray;
}
h1 {
    text-align:center;
    padding-top: 20px;
}

</style>          
</head>

<body>
   <?php
    
      $cliente = new Cliente;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

           
            $cliente->setNome($nome);
            $cliente->setEndereco($endereco);

            if($cliente->insert()){
                echo " Cliente "   .$nome . " inserido com sucesso ";
            }
      endif;
    ?> 

    <form method='post' action="">
    <div style="width:100%; text-align:center; padding-top: 100px;  ">
    <label for='nome'> Nome:</label>
    	<input type="text" name="nome"/>
    <label for='endereço'> Endereço: </label>    
    	<input type="text" name="endereco"/>
    </div>
    <div style="width:100%; text-align:center; padding: 20px;">
    	 <input type="submit" name="cadastrar"/>  
         <a href=listarCliente.php> Lista de Clientes</a>
    </div>
    </form>

</body>
</html>
