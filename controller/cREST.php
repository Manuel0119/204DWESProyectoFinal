<?php

/*
 * Fichero que contiene el controlador de la gestión del REST.
 * @author Manuel Martín Alonso
 * @since: 02-02-2023
 * Última modificación: 05-02-2023
 */

if (isset($_REQUEST['volverREST'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['buscar'])) {
    $entradaOk = true;
    $aErrores = [
        "pais" => null
    ];
    $aRespuestas = [];
    //Validar entrada
    $aErrores["pais"] = validacionFormularios::comprobarAlfabetico($_REQUEST['pais'], 1000, 2, OBLIGATORIO);
    //Recorrer el array de errores
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
} else {
    //El formulario no se ha rellenado nunca
    $entradaOk = false;
}
//Tratamiento de datos OK
if ($entradaOk) {
    if ($_REQUEST['pais'] != "") {
        $aUniversidades = REST::buscarUniversidad($_REQUEST['pais']); //Almacenamos la respuesta en un array
        if ($aUniversidades) {//Si hay datos, recorremos el array
            $i = 0;
            foreach ($aUniversidades as $valor) {
                $aRespuestas[$i]['nombre'] = $valor->getNombre();
                $aRespuestas[$i]['pais'] = $valor->getPais();
                $aRespuestas[$i]['pagina'] = $valor->getPagina();
                $aRespuestas[$i]['codigo'] = $valor->getCodigo();
                $aRespuestas[$i]['provincia_estado'] = $valor->getProvincia_estado();
                $i++;
            }
        }
    }
}
require_once $aVistas['layout'];
?>