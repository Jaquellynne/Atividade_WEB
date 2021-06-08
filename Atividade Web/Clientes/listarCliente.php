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
        <title>Lista de Clientes - WEB I</title>
        <h1> Lista dos Clientes </h1>
</head>
<style type="text/css">

</style>

<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $cliente=New Cliente;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id_cliente = $_POST['id_cliente'];
                        
                        $cliente->delete($id_cliente);
                    }
                                                         
                    
                    

                    foreach ($cliente->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->endereco;?> </td>

                        <td>

                        <form method="post" action="AlterarClientes.php">
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                                
                         </form>
<td>
                            <form method="post" >
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>
