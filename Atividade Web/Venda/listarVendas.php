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
        <title>Lista de vendas - WEB I</title>
        <h1> Lista das Vendas</h1>
</head>
<style type="text/css">

</style>
<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>id_venda</th>
                        <th>id_cliente</th>
                        <th>valor_total</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $Venda = New Venda;

                    //exclusao de venda
                    if (isset($_POST['excluir'])){
                                            
                        $id_venda = $_POST['id_venda'];
                        
                        $Venda->delete($id_venda);
                    }
                                                         
                    
                    

                    foreach ($Venda->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->id_venda;?> </td>

                        <td> <?php echo $value->id_cliente;?> </td>
                        <td> <?php echo $value->valor_total;?> </td>
                        

                        <td>

                        <form method="post" action="AlterarVendas.php">
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>                  
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>
                                <input name="valor_total" type="hidden" value="<?php echo $value->valor_total;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                                
                         </form>
<td>
                            <form method="post" >
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>
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
