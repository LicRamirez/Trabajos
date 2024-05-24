CREATE DATABASE Sistemas;
use Sistemas;

CREATE TABLE Usuario(
	IdUsuario int primary key auto_increment,
    Login varchar(100) not null,
    PassWord varchar(100) not null,
    Nombre varchar(100)
);