CREATE DATABASE IF NOT EXISTS login;

USE login;

CREATE TABLE IF NOT EXISTS usuarios ( 
	id integer(11) not null AUTO_INCREMENT PRIMARY KEY, 
	nome varchar(100) not null, 
	email varchar(100) not null, 
	senha varchar(100) not null
);