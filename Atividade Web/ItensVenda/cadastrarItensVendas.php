<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'ItensVendas.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<head>
        <title> Cadastro de Itens Vendas - WEB I</title>
        <h1> Cadastrar Itens Vendas</h1>
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
    
      $itens_venda = new ItensVenda;
      if(isset($_POST['cadastrar'])):
            $quantidade = $_POST['quantidade'];
            $preco_unitario = $_POST['preco_unitario'];

           
            $itens_venda->setQuantidade($quantidade);
            $itens_venda->setPrecoUnitario($preco_unitario);

            if($itens_venda->insert()){
                echo " Itens venda  "   .$quantidade . " inserido com sucesso ";
            }
      endif;
    ?> 

    <form method='post' action="">
    <div style="width:100%; text-align:center; padding-top: 100px;  ">
        <label for='quantidade'type> Quantidade:</label>
        <input type="text" name="quantidade"/>
        <label for='preco_unitario'> Preco unitario: </label>    
     <input type="text" name="preco_unitario"/>
    </div>

    <div style="width:100%; text-align:center; padding: 20px;">
    <button name="cadastrar" type="submit">Enviar</button>  
    <a href=listarItensVendas.php> Lista de Produtos</a>
    </div>
    </form>

</body>
</html>
