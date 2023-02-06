<?php

/*
 * Fichero que contiene el controlador de la gestión del login.
 * @author Manuel Martín Alonso
 * @since: 24-01-2023
 * Última modificación: 05-02-2023
 */

require_once 'core/221024ValidacionFormularios.php';

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['registrar'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = "registro";
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['iniciarSesion'])) {
    $aErrores = [
        'usuario' => null,
        'password' => null
    ];
    $entradaOk = true;
    $oUsuario = null;
    //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos están correctos
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, OBLIGATORIO);
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        //Comprobación de Usuario Correcto
        $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
        if (is_null($oUsuario)) {
            $entradaOk = false;
        }
    }
    //Si todo es correcto aumentamos el número de conexiones y le rederigimos hacia el inicio privado.
    if ($entradaOk) {
        UsuarioPDO::registrarUltimaConexion($oUsuario);
        $_SESSION['User204DWESProyectoFinal'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header("Location: index.php");
        exit();
    }
}
require_once $aVistas['layout'];
?>