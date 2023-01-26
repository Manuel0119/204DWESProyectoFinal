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
if(isset($_REQUEST['WIP'])){
    $_SESSION['paginaEnCurso']='wip';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
    exit();
}
require_once $aVistas['layout'];

