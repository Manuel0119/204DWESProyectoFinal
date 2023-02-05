<?php

/*
 * Fichero que contiene el controlador de la gestión de los registros de los nuevos usuarios de la aplicación.
 * @author Manuel Martín Alonso
 * @since: 30-01-2023
 * Última modificación: 05-02-2023
 */

require_once 'core/221024ValidacionFormularios.php';

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['registro'])) {
    $entradaOk = true;
    $aErrores = [
        'usuario' => null,
        'password' => null,
        'repeatPassword' => null,
        'descripcion' => null
    ];
    $miDB = new PDO(DSN, USER, PASSWORD);
    //Comprobamos que el usuario no haya introducido inyeccion de codigo y los datos están correctos
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, OBLIGATORIO);
    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, OBLIGATORIO);
    $aErrores['repeatPassword'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, OBLIGATORIO);
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 2, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if (!UsuarioPDO::validarCodNoExiste($_REQUEST['usuario'])) {
        $entradaOk = false;
    }
    if ($_REQUEST['password'] == $_REQUEST['repeatPassword'] && $entradaOk) {
        $oUsuario = UsuarioPDO::altaUsuario($_REQUEST['usuario'], $_REQUEST['password'], $_REQUEST['descripcion']);
        $_SESSION['User204DWESProyectoFinal'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';
        header("Location: index.php");
        exit();
    }
}
require_once $aVistas['layout'];
?>