<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de Work In Progress(WIP).
 * @author Manuel Martín Alonso
 * @since: 26-01-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['volverWIP'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>