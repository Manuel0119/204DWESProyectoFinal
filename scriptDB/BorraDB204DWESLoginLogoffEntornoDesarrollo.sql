/*
    Autor: Manuel Martín Alonso.
    Utilidad: Este programa consiste en borrar la base de datos DB204DWESLoginLogoff y borrar el usuario 'User204DWESLoginLogoff'.
    Fecha-última-revisión: 11-01-2023.
*/
-- Borrar la base de datos DB204DWESLoginLogoff.
drop database if exists DB204DWESLoginLogoff;
-- Borrar el usuario user204DWESProyectoTema5.
drop user if exists 'User204DWESLoginLogoff'@'%';