

<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudVendas extends DB { //faz herança do arquivo DB
    protected $venda;
    private  $id_venda ;
    private  $id_cliente ;
    private  $valor_total ;
    
    

    public  function  getIdVenda ()
    {
        return  $this -> id_venda ;
    }

    public  function  setIdVenda ( $id_venda )
    {
        $this -> id_venda = $id_venda ;
    }

    public  function  getIdCliente ()
    {
        return  $this -> id_cliente ;
    }

    public  function  setIdCliente ( $id_cliente )
    {
        $this -> id_cliente = $id_cliente ;
    }

    public  function  getValorTotal ()
    {
        return  $this -> valor_total ;
    }

    public  function  setValorTotal ( $valor_total )
    {
        $this -> valor_total = $valor_total ;
    }

}
##################################fim do arquivo 3
