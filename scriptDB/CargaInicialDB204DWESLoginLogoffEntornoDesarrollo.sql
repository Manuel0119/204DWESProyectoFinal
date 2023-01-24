/*
    Autor: Manuel Martín Alonso.
    Utilidad: Este programa consiste en cargar datos en la tabla Departamento y en la tabla Usuario.
    Fecha-última-revisión: 11-01-2023.
*/
use DB204DWESLoginLogoff;
-- Inserción de datos en la tabla Departamento.
insert into T02_Departamento values
("INF","Departamento de Informatica",now(),3500.5,null),
("FOL","Departamento de FOL",now(),1500.5,null),
("LEN","Departamento de Lengua",now(),500.12,null),
("MAT","Departamento de Matemáticas",now(),1600.6,null);
-- Inserción de datos en la tabla Usuario.
insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion) values
('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio profesor',now()),
('alberto',sha2(concat('alberto','paso'),256),'Alberto profesor',now()),
('amor',sha2(concat('amor','paso'),256),'Amor profesor',now()),
('antonio',sha2(concat('antonio','paso'),256),'Antonio profesor',now()),
('carmen',sha2(concat('carmen','paso'),256),'Carmen profesor',now()),
('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo alumno',now()),
('david',sha2(concat('david','paso'),256),'David alumno',now()),
('luis',sha2(concat('luis','paso'),256),'Luis alumno',now()),
('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro alumno',now()),
('josue',sha2(concat('josue','paso'),256),'Josue alumno',now()),
('manuel',sha2(concat('manuel','paso'),256),'Manuel alumno',now()),
('admin',sha2(concat('admin','paso'),256),'Administrador admin',now());
