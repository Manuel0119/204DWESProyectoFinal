<?php

/**
 * Class REST
 *
 * Fichero con la clase REST
 *
 * PHP version 8.1
 */

/**
 * Clase REST
 * 
 * Clase REST que contiene la función necesaria para buscar una universidad pasandole como parámetro el país
 * 
 * @author Manuel Martín Alonso
 * @since: 21-02-2023 Se han mejorado los comentarios de la clase REST
 * @since: 02-02-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
class REST {

    /**
     * Funcion buscarUniversidad
     * 
     * Funcion que busca una universidad a partir de un país pasado como parámetro
     * 
     * @author Manuel Martín Alonso
     * @since: 02-02-2023
     * @copyright 2022-2023 Manuel Martín Alonso
     * @version 1.0
     * @param string $pais Pais donde se realiza la busqueda de universidades
     * @access public
     * @return array Array con las universidades del país solicitado como parámetro
     */
    public static function buscarUniversidad($pais) {
        $aUniversidad = [];
        $archivoJSON = @file_get_contents("http://universities.hipolabs.com/search?country=$pais");
        $aUniversidades = json_decode($archivoJSON, true);
        if ($aUniversidades) {
            foreach ($aUniversidades as $valor) {
                array_push($aUniversidad, new Universidad($valor['name'], $valor['country'], $valor['web_pages'][0], $valor['alpha_two_code'], $valor['state-province']));
            }
        }
        return $aUniversidad;
    }
}

?>