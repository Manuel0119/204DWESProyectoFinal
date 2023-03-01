<?php

/*
 * Fichero que contiene el controlador de la gestión del inicio privado.
 * @author Manuel Martín Alonso
 * @since: 24-01-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['salir'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['User204DWESProyectoFinal']=null;
    session_destroy();
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaEnCurso']='detalle';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['error'])){
    DBPDO::ejecutarConsulta("select * from tablaNoExiste;");
}
if(isset($_REQUEST['editar_Perfil'])){
    $_SESSION['paginaEnCurso']='miCuenta';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['mant_departamentos'])){
    $_SESSION['paginaEnCurso']='mantenimiento';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['rest'])){
    $_SESSION['paginaEnCurso']='rest';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
if(isset($_REQUEST['mant_usuarios'])){
    $_SESSION['paginaEnCurso']='mantenimientoUsuarios';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
require_once $aVistas['layout'];
?>