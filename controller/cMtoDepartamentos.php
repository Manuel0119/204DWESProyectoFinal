<?php

/*
 * Fichero que contiene el controlador de la gestión del mantenimiento de departamentos.
 * @author Manuel Martín Alonso
 * @since: 03-02-2023
 * Última modificación: 05-02-2023
 */
if (!isset($_SESSION['criterioBusquedaDepartamento'])) {
    $_SESSION['criterioBusquedaDepartamento'] = '';
}
$aErrores = [
    'descripcion' => null
];
if (isset($_REQUEST['volver'])) {
    unset($_SESSION['criterioBusquedaDepartamento']);
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    header('Location: index.php');
    exit();
}
//Comprobar si se ha enviado el formulario.
if (isset($_REQUEST['buscar'])) {
    $entradaOk = true;
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 0, 0);
    //Recorrer el array de errores comprobando cada uno de los campos del formulario, asignándole false a la variable booleana si uno de los campos no es correcto.
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
} else {
    $entradaOk = false;
}
if ($entradaOk) {
    //Guardado en la sesión la descripción solicitada en el input.
    $_SESSION['criterioBusquedaDepartamento'] = $_REQUEST['descripcion'];
}
/* Guardado en la variable array de la ejecución de la función correspondiente 
 * del modelo con los datos proporcionados por el array de valores.
 */
$aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDescripcion($_SESSION['criterioBusquedaDepartamento']);
//Array para guardar los campos del objeto Departamento y mostrarlos en la vista
$aVMtoDepartamentos = [];
//Si DepartamentoPDO ha devuelto resultado válido(un array)
if ($aDepartamentos) {
    //Recorro el array y por cada objeto...
    foreach ($aDepartamentos as $oDepartamento) {
        /**
         * Utilizo el método array_push para introducir los valores devueltos
         * por los getters para cada objeto departamento.
         */
        array_push($aVMtoDepartamentos, [
            'codDepartamento' => $oDepartamento->getCodDepartamento(),
            'descDepartamento' => $oDepartamento->getDescDepartamento(),
            'fechaCreacionDepartamento' => $oDepartamento->getFechaCreacionDepartamento()->format('Y-m-d H:i:s'),
            'volumenDeNegocio' => $oDepartamento->getVolumenNegocio(),
            'fechaBajaDepartamento' => $oDepartamento->getFechaBajaDepartamento()
        ]);
    }
}
if (isset($_REQUEST['editar'])) {
    $_SESSION['departamentoEnCurso'] = DepartamentoPDO::buscarDepartamentoPorCodigo($_REQUEST['editar']);
    $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso'] = 'editarDepartamento';
    header("Location:index.php");
    exit;
}
require_once $aVistas['layout'];
?>