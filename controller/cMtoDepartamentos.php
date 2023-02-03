<?php

if (isset($_REQUEST['volver'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
//Comprobar si se ha enviado el formulario.
if (isset($_REQUEST['buscar'])) {
    $entradaOk = true;
    $aErrores = [
        'descripcion' => null
    ];
    $aRespuestas = [
        "buscarDepartamento" => null
    ];
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 255, 0, 0);
    //Recorrer el array de errores comprobando cada uno de los campos del formulario, asignándole false a la variable booleana si uno de los campos no es correcto.
    foreach ($aErrores as $claveError => $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    }
    if ($entradaOk) {
        $aRespuestas['buscarDepartamento'] = $_REQUEST['descripcion'];
        $aDepartamentos = DepartamentoPDO::buscarDepartamentoPorDescripcion($aRespuestas['buscarDepartamento']);
    }
}
require_once $aVistas['layout'];
?>

