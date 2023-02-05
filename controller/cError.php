<?php

/*
 * Fichero que contiene el controlador de la gestión de errores de la aplicación.
 * @author Manuel Martín Alonso
 * @since: 30-01-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aError = [
    'codigoError' => $_SESSION['error']->getCodError(),
    'mensajeError' => $_SESSION['error']->getDescError(),
    'lineaError' => $_SESSION['error']->getLineaError(),
    'archivoError' => $_SESSION['error']->getArchivoError(),
    'pagSiguienteError' => $_SESSION['error']->getPaginaSiguiente()
];
require_once $aVistas['layout'];
?>