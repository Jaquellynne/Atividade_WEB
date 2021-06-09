
CREATE TABLE cliente(
	id_cliente int NOT NULL AUTO_INCREMENT primary key,
	nome varchar(40),
	endereco varchar (40) 
);


CREATE TABLE produto (
 	id_produto int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(20),
 	tipo varchar(20)
);

CREATE TABLE venda( 	
	id_venda int NOT NULL AUTO_INCREMENT primary key, 	
	valor_total numeric(10,2) , 	
	valor_troco numeric(10,2), 	 	
	data_venda date

);

insert into VENDA (id_venda, valor_total, valor_troco, data_venda)
values(1, 30.000, 10, "2020-05-21"),
      ( 2, 20.00 , 2.00, "2019-04-20");
      
CREATE TABLE itens_venda( 	
	id_itens_venda int NOT NULL AUTO_INCREMENT primary key, 	
	quantidade int,	
	preco_unitario NUMERIC(10,2) 
	
);
insert into itens_venda (id_itens_venda, quantidade, preco_unitario)
values(1, 2, 30.000),
      ( 2, 3, 20.00);

insert into produto(id_produto, nome, tipo)
values(1, 'D20', 'Carro'),
      ( 2, 'Shampoo', 'Cosmético');

      
insert into cliente(id_cliente, nome, endereco) 
values (1, 'Jaqueline', 'Barreiro'),
        (2, 'Maria', 'Guirapá') ;
        
