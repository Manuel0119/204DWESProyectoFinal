<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de editar Departamentos.
 * @author Manuel Martín Alonso
 * @since: 16-02-2023
 * Última modificación: 17-02-2023
 */
$aDepartamento = [
    'codigo' => $_SESSION['departamentoEnCurso']->getCodDepartamento(),
    'descripcion' => $_SESSION['departamentoEnCurso']->getDescDepartamento(),
    'volumen' => $_SESSION['departamentoEnCurso']->getVolumenNegocio()
];
$aErrores = [
    "descripcion" => null,
    "volumenNegocio" => null
];
$aRespuestas = [
    "codigo" => null,
    "descripcion" => null,
    "volumenNegocio" => null
];
if (isset($_REQUEST['aceptar'])) {
    $entradaOk = true;
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfabetico($_REQUEST['descripcion'], 255, 5, OBLIGATORIO);
    $aErrores['volumenNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['volumen'], obligatorio: OBLIGATORIO);
    //Recorrer el array de errores comprobando cada uno de los campos del formulario, asignándole false a la variable booleana si uno de los campos no es correcto.
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    //Si todo es correcto
    if ($entradaOk) {
        $aRespuestas['codigo']=$_REQUEST['codigo'];
        $aRespuestas['descripcion']=$_REQUEST['descripcion'];
        $aRespuestas['volumenNegocio']=$_REQUEST['volumen'];
        DepartamentoPDO::modificarDepartamento($aRespuestas['codigo'], $aRespuestas['descripcion'], $aRespuestas['volumenNegocio']);
        $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
        header('Location: index.php');
        exit();
    }
}
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>