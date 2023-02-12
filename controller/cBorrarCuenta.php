<?php

/*
 * Fichero que contiene el controlador de la gestión del borrado de los usuarios de la aplicación.
 * @author Manuel Martín Alonso
 * @since: 11-02-2023
 * Última modificación: 11-02-2023
 */

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['borrarCuenta'])) {
    $usuarioCorrecto = true;
    if (hash('sha256', $_SESSION['User204DWESProyectoFinal']->getCodUsuario() . $_REQUEST['password']) != $_SESSION['User204DWESProyectoFinal']->getPassword() || $_REQUEST['password'] != $_REQUEST['Rpassword']) {
        $usuarioCorrecto = false;
    }
    if ($usuarioCorrecto) {
        UsuarioPDO::borrarUsuario($_SESSION['User204DWESProyectoFinal']->getCodUsuario());
        $_SESSION['User204DWESProyectoFinal'] = null;
        session_destroy();
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: index.php');
        exit();
    }
}
require_once $aVistas['layout'];
?>