<?php
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
    $_SESSION['paginaEnCurso']='wip';
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
require_once $aVistas['layout'];

