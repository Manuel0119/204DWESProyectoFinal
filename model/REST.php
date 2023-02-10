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
                array_push($aUniversidad, new Universidad($valor['name'], $valor['country'], $valor['web_pages'][0], $valor['alpha_two_code'], $valor['state-province']));
            }
        }
        return $aUniversidad;
    }
}
?>