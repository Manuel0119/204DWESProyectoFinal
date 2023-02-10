<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de las tecnologías utilizadas a lo largo del curso.
 * @author Manuel Martín Alonso
 * @since: 06-02-2023
 * Última modificación: 06-02-2023
 */

if (isset($_REQUEST['volverTecnologias'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout'];
?>