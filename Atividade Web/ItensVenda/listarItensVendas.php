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
        <title>Lista de Itens vendas - WEB I</title>
        <h1> Lista dos Itens Vendas</h1>
</head>
<style type="text/css">

</style>
<body>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">
                        <th>Quantidade</th>
                        <th>Preco Unitario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $ItensVenda = New ItensVenda;

                    //exclusao de itens venda
                    if (isset($_POST['excluir'])){
                                            
                        $id_itens_venda = $_POST['id_itens_venda'];
                        
                        $ItensVenda->delete($id_itens_venda);
                    }
                                                         
                    
                    

                    foreach ($ItensVenda->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->quantidade;?> </td>

                        <td> <?php echo $value->preco_unitario;?> </td>

                        <td>

                        <form method="post" action="AlterarItensVendas.php">
                                <input name="id_itens_venda" type="hidden" value="<?php echo $value->id_itens_venda;?>"/>                  
                                <input name="quantidade" type="hidden" value="<?php echo $value->id_itens_venda;?>"/>
                                <input name="preco_unitario" type="hidden" value="<?php echo $value->preco_unitario;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                                
                         </form>
<td>
                            <form method="post" >
                                <input name="id_itens_venda" type="hidden" value="<?php echo $value->id_itens_venda;?>"/>
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
