<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de editar Departamentos.
 * @author Manuel Martín Alonso
 * @since: 16-02-2023
 * Última modificación: 21-02-2023
 */
$oDepartamento= DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']);//Buscamos el departamento especificado por el codigo en la base de datos y lo devolvemos como un objeto de la clase departamento.
$aDepartamento = [//Recogemos los datos del objeto departamento y los introducimos en el array
    'codigo' => $oDepartamento->getCodDepartamento(),
    'descripcion' => $oDepartamento->getDescDepartamento(),
    'volumen' => $oDepartamento->getVolumenNegocio(),
    'fechaAlta' => $oDepartamento->getFechaCreacionDepartamento()->format('Y-m-d H:i:s'),
    'fechaBaja' => $oDepartamento->getFechaBajaDepartamento()
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
    $aErrores['volumenNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['volumen'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OBLIGATORIO);
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