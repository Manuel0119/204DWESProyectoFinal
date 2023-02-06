<?php

/*
 * Fichero que contiene el controlador de la gestión del inicio público.
 * @author Manuel Martín Alonso
 * @since: 05-02-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaAnterior'] = "inicioPrivado";
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['cambiarPassword'])) {
    $_SESSION['paginaAnterior'] = 'miCuenta';
    $_SESSION['paginaEnCurso'] = 'cambiarPassword';
    header("Location: index.php");
    exit();
}
if (isset($_REQUEST['aceptar'])) {
    $aErrores = [
        'descripcion' => null
    ];
    $entradaOk = true;
    //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos estén correctos
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 4, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        //Comprobación de Descripción Correcta
        UsuarioPDO::modificarUsuario($_SESSION['User204DWESProyectoFinal'], $_REQUEST['descripcion']);
        $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
        header('Location: index.php');
        exit();
    }
}
if (isset($_REQUEST['borrarUsuario'])) {
    $_SESSION['paginaEnCurso'] = 'wip';
    $_SESSION['paginaAnterior'] = 'miCuenta';
    header("Location: index.php");
    exit();
}
require_once $aVistas['layout'];
?>