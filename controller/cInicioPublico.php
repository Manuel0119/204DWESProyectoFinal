<?php

/*
 * Fichero que contiene el controlador de la gestión del inicio público.
 * @author Manuel Martín Alonso
 * @since: 24-01-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['login'])) {//
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='login';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout'];
?>