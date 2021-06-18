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
        <title> Alteração de Produtos - Web I</title>
        <h1> Alterar Produtos</h1>
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
        // Alterar itens venda
        $id_itens_venda  = $_POST['id_itens_venda'];
        $quantidade = $_POST['quantidade'];
        $preco_unitario = $_POST['preco_unitario'];


        if ( isset ($_POST['AlterarDados']));
        {
        $ItensVendas = new ItensVenda;
            $ItensVendas->setQuantidade($quantidade);
            $ItensVendas->setPrecoUnitario($preco_unitario);
            $ItensVendas->update($id_itens_venda);

        

        }
      
    ?>



<form method='post' action="">
<div style="width:100%; text-align:center; padding-top: 100px;  ">
    <label for='quantidade'> Quantidade:</label>
        <input type="text" name="quantidade" value="<?php echo $quantidade?>"/>
    <label for='preco_unitario'> Preco unitario: </label>
        <input type="text" name="preco_unitario" value="<?php echo $preco_unitario?>"/>
        <input type="hidden" name="id_itens_venda" value="<?php echo $id_itens_venda?>"
         <input type="submit" name="AlterarDados"/>
</div>
<div style="width:100%; text-align:center; padding: 20px;">
         <button name="alterar" type="submit">Enviar</button>
        <a href=listarItensVenda.php> Lista de itens venda</a>
</div>       
</form>
    <!-- Fim da tabela -->
