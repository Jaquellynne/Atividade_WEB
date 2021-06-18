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
        <title> Alteração de Vendas - Web I</title>
        <h1> Alterar Vendas</h1>
</head>
<style type="text/css">
body {
    background-color: lightgray;
}
h1 {
    text-align:center;
    padding-top: 20px;
}

</style>   
<body>
    <?php
        // Alterar venda
        $id_venda  = $_POST['id_venda'];
        $id_cliente = $_POST['id_cliente'];
        $valor_total = $_POST['valor_total'];


        if ( isset ($_POST['AlterarDados']));
        {
        $Venda = new Venda;
            $Venda->setIdVenda($id_venda);
            $Venda->setIdCliente($id_cliente);
            $Venda->update($id_venda);

        

        }
      
    ?>



<form method='post' action="">
<div style="width:100%; text-align:center; padding-top: 100px;  ">
    <label for='id_venda'> Id venda:</label>
        <input type="text" name="id_venda" value="<?php echo $id_venda?>"/>
    <label for='id_cliente'> Id cliente: </label>
        <input type="text" name="id_cliente" value="<?php echo $id_cliente?>"/>
        <input type="hidden" name="id_venda" value="<?php echo $id_venda?>"
         <input type="submit" name="AlterarDados"/>
    <label for='nome'> Valor Total: </label>
        <input type="text" name="valor_total" value="<?php echo $valor_total?>"/>
</div>
<div style="width:100%; text-align:center; padding: 20px;">
         <button name="alterar" type="submit">Enviar</button>
        <a href=listarVendas.php> Lista de Vendas</a>
</div>       
</form>
    <!-- Fim da tabela -->
