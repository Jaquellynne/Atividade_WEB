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
        <title> Alteração de Clientes - Web I</title>
        <h1> Alterar Clientes </h1>
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
        // Alterar Cliente
        $id_cliente  = $_POST['id_cliente'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];


        if ( isset ($_POST['AlterarDados']));
        {
        $cliente = new Cliente;
            $cliente->setNome($nome);
            $cliente->setEndereco($endereco);
            $cliente->update($id_cliente);

        }
        
    ?>



<form method='post' action="">
<div style="width:100%; text-align:center; padding-top: 100px;  ">
    <label for='nome'> Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome?>"/>
    <label for='tipo'> Endereço: </label>
        <input type="text" name="endereco" value="<?php echo $endereco?>"/>
        <input type="hidden" name="id_cliente" value="<?php echo $id_cliente?>"
         <input type="submit" name="AlterarDados"/>
</div>
<div style="width:100%; text-align:center; padding: 20px;">
         <button name="alterar" type="submit">Enviar</button>
        <a href=listarCliente.php> Lista de Clientes</a>
</div>       
</form>
    <!-- Fim da tabela -->
