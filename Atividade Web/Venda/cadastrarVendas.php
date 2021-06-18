<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Vendas.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<head>
        <title> Cadastro de Vendas - WEB I</title>
        <h1> Cadastrar Vendas </h1>
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
    
      $venda = new Venda;
      if(isset($_POST['cadastrar'])):
            $id_venda = $_POST['id_venda'];
            //$id_cliente = $_POST['id_cliente'];
            $valor_total = $_POST['valor_total'];

           
            $venda->setIdVenda($id_venda);
           // $venda->setIdCliente($id_cliente);
            $venda->setValorTotal($valor_total);

            if($venda->insert()){
                echo " Venda"   .$id_venda . " inserida com sucesso ";
            }
      endif;
    ?> 

    <form method='post' action="">
    <div style="width:100%; text-align:center; padding-top: 100px;  ">
    <label for='id_venda'> Id Venda:</label>
    	<input type="text" name="id_venda"/>
    <label for='id_cliente'> Id Cliente: </label>    
    	<input type="text" name="id_venda"/>
    <label for='valor_total'> Valor Total: </label>    
    	<input type="text" name="valor_total"/>
    </div>
    <div style="width:100%; text-align:center; padding: 20px;">
    	 <input type="submit" name="cadastrar"/>  
         <a href=listarVendas.php> Lista de Vendas</a>
    </div>
    </form>

</body>
</html>
