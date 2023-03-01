<?php

/*
 * Fichero que contiene el controlador de la gestión de la ventana de borrar Departamentos.
 * @author Manuel Martín Alonso
 * @since: 23-02-2023
 * Última modificación: 23-02-2023
 */
$oDepartamento = DepartamentoPDO::buscarDepartamentoPorCodigo($_SESSION['codDepartamentoEnCurso']); //Buscamos el departamento especificado por el codigo en la base de datos y lo devolvemos como un objeto de la clase departamento.
$aVBorrarDepartamento = [//Recogemos los datos del objeto departamento y los introducimos en el array
    'codigo' => $oDepartamento->getCodDepartamento(),
    'descripcion' => $oDepartamento->getDescDepartamento(),
    'volumen' => $oDepartamento->getVolumenNegocio(),
    'fechaAlta' => $oDepartamento->getFechaCreacionDepartamento()->format('Y-m-d'),
    'fechaBaja' => $oDepartamento->getFechaBajaDepartamento()
];
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['aceptar'])) {
    DepartamentoPDO::borrarDepartamento($aVBorrarDepartamento['codigo']);
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>