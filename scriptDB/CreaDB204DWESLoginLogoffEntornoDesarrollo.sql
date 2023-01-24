/*
    Autor: Manuel Martín Alonso.
    Utilidad: Este programa consiste en crear una base de datos llamada DB204DWESLoginLogoff.
    Fecha-última-revisión: 11-01-2023.
*/
-- Creación de la base de datos.
create database DB204DWESLoginLogoff;
use DB204DWESLoginLogoff;
-- Creación de la tabla Departamento.
create table if not exists T02_Departamento(
    T02_CodDepartamento varchar(3) primary key not null,
    T02_DescDepartamento varchar(255) not null,
    T02_FechaCreacionDepartamento datetime not null,
    T02_VolumenDeNegocio float not null,
    T02_FechaBajaDepartamento int null
)engine=Innodb;
-- Creación de la tabla Usuario.
create table if not exists T01_Usuario(
    T01_CodUsuario varchar(8) primary key not null,
    T01_Password varchar(255) not null,
    T01_DescUsuario varchar(255) not null,
    T01_NumConexiones int not null default 0,
    T01_FechaHoraUltimaConexion datetime not null,
    T01_Perfil enum('administrador','usuario') default 'usuario',
    T01_ImagenUsuario MEDIUMBLOB null
)engine=Innodb;
-- Creación del usuario 'User204DWESLoginLogoff'.
create user 'User204DWESLoginLogoff'@'%' identified by 'paso';
-- Dar permisos al usuario 'User204DWESLoginLogoff'.
grant all on DB204DWESLoginLogoff.* to 'User204DWESLoginLogoff'@'%';
    