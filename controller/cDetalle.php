<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de detalle.
 * @author Manuel Martín Alonso
 * @since: 24-01-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>