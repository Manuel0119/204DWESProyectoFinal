<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de editar Departamentos.
 * @author Manuel Martín Alonso
 * @since: 16-02-2023
 * Última modificación: 16-02-2023
 */

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>