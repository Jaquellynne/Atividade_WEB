create schema web;

use web;

drop schema web;

CREATE TABLE cliente(
	id_cliente integer primary key AUTO_INCREMENT,
	nome varchar(40),
	endereco varchar (40) 
);


CREATE TABLE produto (
 	id_produto integer  PRIMARY KEY AUTO_INCREMENT,
	nome varchar(20),
 	tipo varchar(20),
    quantidade integer
);
use web;
CREATE TABLE venda( 	
	id_venda integer primary key auto_increment, 	
    id_cliente int,
	valor_total decimal(10,2) , 	
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)

);

insert into VENDA (id_venda, valor_total)
values(2,  100),
      ( 3, 100);
      
CREATE TABLE itens_venda( 	
	id_itens_venda integer primary key AUTO_INCREMENT, 
	id_venda int,
    id_produto int,
	quantidade decimal,
	preco_unitario decimal(10,2) ,
	FOREIGN KEY (id_venda) REFERENCES venda (id_venda),
	FOREIGN KEY (id_produto) REFERENCES produto (id_produto)
);



        
 DELIMITER $$       
CREATE TRIGGER set_Item_Venda
AFTER INSERT ON itens_Venda
FOR EACH ROW
BEGIN

	UPDATE venda SET valor_total = valor_total + (NEW.quantidade * NEW.preco_unitario) WHERE id_venda = NEW.id_venda;
	UPDATE produto SET quantidade = quantidade - NEW.quantidade WHERE id_produto = NEW.id_produto;
	
END $$


DELIMITER $$
CREATE TRIGGER alterar_Item_Venda
AFTER UPDATE ON itens_venda
FOR EACH ROW
BEGIN

	UPDATE venda SET valor_total = valor_total - ((OLD.quantidade * OLD.preco_unitario) * (NEW.quantidade * NEW.preco_unitario)) WHERE id_venda = NEW.id_venda;
	UPDATE produto SET quantidade = quantidade + (OLD.quantidade - NEW.quantidade) WHERE id_produto = NEW.id_produto;
	
END $$

DELIMITER $$
CREATE TRIGGER deletar_Item_Venda
AFTER DELETE ON itens_venda
FOR EACH ROW
BEGIN

	UPDATE venda SET valor_total = valor_total - (OLD.quantidade * OLD.preco_unitario) WHERE id_venda = OLD.id_venda;
	UPDATE produto SET quantidade = quantidade + OLD.quantidade WHERE id_produto = OLD.id_produto;
	
END $$

DELIMITER $$

CREATE TRIGGER deletar_Venda
AFTER DELETE ON venda
FOR EACH ROW
BEGIN

	DELETE FROM itens_venda WHERE id_venda = OLD.id_venda;
	
END $$