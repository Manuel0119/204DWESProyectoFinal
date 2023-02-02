<?php

/**
 * @author Manuel Martín Alonso
 * @version 1.0
 * 
 * Clase para el uso de API Rest propia y ajena.
 */
class REST{
    
    public static function buscarUniversidad($pais) {
        $aUniversidad = [];
        $archivoJSON = @file_get_contents("http://universities.hipolabs.com/search?country=$pais");
        $aUniversidades = json_decode($archivoJSON, true);
        if ($aUniversidades) {
            foreach ($aUniversidades as $valor){
                array_push($aUniversidad, new Universidad($valor['nombre'], $valor['pais'], $valor['pagina'], $valor['codigo'], $valor['provincia_estado']));
            }
        }
        return $aUniversidad;
    }
}
?>
