<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de editar usuarios.
 * @author Manuel Martín Alonso
 * @since: 28-02-2023
 */

if (isset($_REQUEST['volverUsuarios'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>