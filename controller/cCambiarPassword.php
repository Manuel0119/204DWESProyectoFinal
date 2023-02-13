<?php

/*
 * Fichero que contiene el controlador de la gestión de las contraseñas de la aplicación.
 * @author Manuel Martín Alonso
 * @since: 05-02-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaAnterior'] = "miCuenta";
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
$aErrores = [
    'previewPassword' => null,
    'newPassword' => null,
    'RnewPassword' => null
];
if (isset($_REQUEST['aceptar'])) {
    $entradaOk = true;
    //Comprobamos que el usuario no haya introducido inyeccion de código y los datos estén correctos
    $aErrores['previewPassword'] = validacionFormularios::validarPassword($_REQUEST['previewPassword'], 8, 4, 1, OBLIGATORIO);
    $aErrores['newPassword'] = validacionFormularios::validarPassword($_REQUEST['newPassword'], 8, 4, 1, OBLIGATORIO);
    $aErrores['RnewPassword'] = validacionFormularios::validarPassword($_REQUEST['RnewPassword'], 8, 4, 1, OBLIGATORIO);
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if (hash('sha256', $_SESSION['User204DWESProyectoFinal']->getCodUsuario() . $_REQUEST['previewPassword']) != $_SESSION['User204DWESProyectoFinal']->getPassword() && !empty($_REQUEST['previewPassword']) || $_REQUEST['newPassword'] != $_REQUEST['RnewPassword']) {
        $entradaOk = false;
        $aErrores['previewPassword']="Contraseña Incorrecta";
    }
    if ($entradaOk) {
        $password = hash('sha256', ($_SESSION['User204DWESProyectoFinal']->getCodUsuario() . $_REQUEST['newPassword']));
        UsuarioPDO::cambiarPassword($_SESSION['User204DWESProyectoFinal'], $password);
        $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
        header('Location: index.php');
        exit();
    }
}
require_once $aVistas['layout'];
?>