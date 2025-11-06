CREATE DATABASE sistemas;
USE sistemas;

CREATE TABLE cliente (
	cpf VARCHAR (11) PRIMARY KEY,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
select * from sistemas.cliente;