create database crud;
use crud;

create table usuarios (
    id int primary key auto_increment,
    email varchar(20) not null unique,
    senha varchar(20) not null
);