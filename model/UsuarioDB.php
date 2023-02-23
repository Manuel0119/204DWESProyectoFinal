<?php

/**
 * Interface UsuarioDB
 *
 * Fichero con la interfaz UsuarioDB
 *
 * PHP version 8.1
 */

/**
 * Interfaz UsuarioDB
 * 
 * Interfaz UsuarioDB que contiene la función validar usuario que nos permite validar si un usuario es correcto mediante su codigo y su contraseña
 * 
 * @author Manuel Martín Alonso
 * @since: 21-02-2023 Se han mejorado los comentarios de la interfaz UsuarioDB
 * @since: 05-02-2023 Cambiar Formato
 * @since: 24-01-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
interface UsuarioDB {

    /**
     * Funcion validarUsuario
     * 
     * Funcion que nos permite validar usuario que nos permite validar si un usuario es correcto mediante su codigo y su contraseña
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion validarUsuario
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param string $codUsuario Sentencia SQL a ejecutar
     * @param string $password Parámetros con los que completar la sentencia
     * @access public
     */
    public static function validarUsuario($codUsuario, $password);
}

?>