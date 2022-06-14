create database db_revisao;
use db_revisao;

create table pessoa(
	id int auto_increment not null,
    nome varchar(100) not null,
    cpf char(11) not null,
    data_nascimento date not null,
    primary key(id)
);
