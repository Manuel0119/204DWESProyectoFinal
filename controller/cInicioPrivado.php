<?php
if (isset($_REQUEST['salir'])){
    $_SESSION['paginaEnCurso']='inicioPublico';
    $_SESSION['User204DWESLoginLogoff']=null;
    session_destroy();
    header("Location: index.php"); 
}
if(isset($_REQUEST['detalle'])){
    $_SESSION['paginaEnCurso']='detalle';
    $_SESSION['paginaAnterior']='inicioPrivado';
    header("Location: index.php"); 
}
require_once $aVistas['layout'];

