<?php

/**
 * Interface DB
 *
 * Fichero con la interfaz DB
 *
 * PHP version 8.1
 */

/**
 * Interfaz DB
 * 
 * Interfaz DB que contiene la función ejecutar consulta con la sentencia SQL y los diferentes parámetros como parámetros de la función
 * 
 * @author Manuel Martín Alonso
 * @since: 05-02-2023 Se han mejorado los comentarios de la interfaz DB
 * @since: 24-01-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
interface DB {
    
    /**
     * Funcion ejecutarConsulta
     * 
     * Funcion que ejecuta las sentencias SQL y devuelve el resultado
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 05-02-2023 Se han mejorado los comentarios de la funcion ejecutarConsulta
     * @since: 30-01-2023 Se ha incorporado la gestión de errores en el método ejecutarConsulta()
     * @since: 24-01-2023
     * @param string $entradaSQL Sentencia SQL a ejecutar
     * @param array|null $parametros Parámetros con los que completar la sentencia
     * @access public
     */
    public static function ejecutarConsulta($entradaSQL, $parametros);
}
?>