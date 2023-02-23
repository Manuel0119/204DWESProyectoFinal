<?php

/**
 * Class UsuarioPDO
 *
 * Fichero con la clase UsuarioPDO
 *
 * PHP version 8.1
 */

/**
 * Clase UsuarioPDO
 * 
 * Clase UsuarioPDO para crear objetos de tipo Usuario
 * 
 * @author Manuel Martín Alonso
 * @since: 21-02-2023 Se han mejorado los comentarios de la clase UsuarioPDO
 * @since: 05-02-2023 Cambiar Formato
 * @since: 24-01-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
class UsuarioPDO implements UsuarioDB {

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
     * @return null|object Si es correcto devuelve un objeto usuario si no devuelve false
     */
    public static function validarUsuario($codUsuario, $password) {
        try {
            $SQLBuscarPorCodigo = <<<QUERY
               select * from T01_Usuario where T01_CodUsuario="$codUsuario" AND T01_Password=sha2("{$codUsuario}{$password}",256);
               QUERY;
            $oResultado = DBPDO::ejecutarConsulta($SQLBuscarPorCodigo);
            $oDatos = $oResultado->fetchObject();
            if (is_object($oDatos)) {
                $oUsuario = new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password,
                        $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion, $oDatos->T01_Perfil, $oDatos->T01_ImagenUsuario);
                return $oUsuario;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    /**
     * Funcion registrarUltimaConexion
     * 
     * Funcion que nos permite registrar la fecha y la hora de la ultima conexion de un usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion registrarUltimaConexion
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param object $oUsuario Objeto usuario al que hay que actualizar la fecha y hora de la ultima conexion
     * @access public
     * @return boolean Devuelve true si se ha ejecutado correctamente y false si no se ha ejecutado correctamente
     */
    public static function registrarUltimaConexion($oUsuario) {
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones() + 1);
        $SQLActualizacionNumConexiones = <<<query
              UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now()
              WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
              query;
        DBPDO::ejecutarConsulta($SQLActualizacionNumConexiones);
        return $oUsuario;
    }

    /**
     * Funcion altaUsuario
     * 
     * Funcion que nos permite dar de alta un usuario en la base de datos como nuevo usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion altaUsuario
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param string $codUsuario Código del usuario a dar de alta
     * @param string $password Contraseña del usuario a dar de alta
     * @param string $descUsuario Descripcion del usuario a dar de alta
     * @access public
     * @return boolean Devuelve true si se ha ejecutado correctamente devuelve un usuario y si no devuelve false
     */
    public static function altaUsuario($codUsuario, $password, $descUsuario) {
        $SQLAltaUsuario = <<<sql
                INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_NumConexiones, T01_FechaHoraUltimaConexion) values('{$codUsuario}',sha2(concat('{$codUsuario}','{$password}'),256),'{$descUsuario}',1, now());
                sql;
        if (self::validarCodNoExiste($codUsuario)) {
            DBPDO::ejecutarConsulta($SQLAltaUsuario);
            return new Usuario($codUsuario, hash('sha256', ($codUsuario . $password)), $descUsuario, 1, new DateTime("now"));
        } else {
            return false;
        }
    }

    /**
     * Funcion modificarUsuario
     * 
     * Funcion que nos permite modificar la descripcion del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion modificarUsuario
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param object $oUsuario Objeto usuario
     * @param string $descUsuario Nueva descripcion del usuario
     * @access public
     */
    public static function modificarUsuario($oUsuario, $descUsuario) {
        $SQLmodificarUsuario = <<<sql
                UPDATE T01_Usuario set T01_DescUsuario="{$descUsuario}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
                sql;
        DBPDO::ejecutarConsulta($SQLmodificarUsuario);
        $oUsuario->setDescUsuario($descUsuario);
    }

    /**
     * Funcion cambiarPassword
     * 
     * Funcion que nos permite cambiar la contraseña del usuario con el que hayamos iniciado sesion
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion cambiarPassword
     * @since: 05-02-2023
     * @param object $oUsuario Objeto usuario al cual vamos a cambiar la contraseña
     * @param string $newPassword Nueva contraseña del usuario
     * @access public
     * @return boolean Devuelve true si se ha ejecutado y si no devuelve false
     */
    public static function cambiarPassword($oUsuario, $newPassword) {
        $SQLmodificarContraseña = <<< sql
            UPDATE T01_Usuario SET T01_Password="{$newPassword}" WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
        sql;
        $ejecucionOK = DBPDO::ejecutarConsulta($SQLmodificarContraseña);
        if ($ejecucionOK) {
            $oUsuario->setPassword($newPassword);
        }
        return $ejecucionOK;
    }

    /**
     * Funcion borrarUsuario
     * 
     * Funcion que nos permite borrar el usuario especificado por el codigo de la base de datos
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion borrarUsuario
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param string $codUsuario Codigo del usuario a borrar
     * @access public
     */
    public static function borrarUsuario($codUsuario) {
        $query = <<<query
                delete from T01_Usuario where T01_CodUsuario='$codUsuario';
                query;
        DBPDO::ejecutarConsulta($query);
    }

    /**
     * Funcion validarCodNoExiste
     * 
     * Funcion que nos permite comprobar que el codigo del usuario que queremos introducir no existe
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 21-02-2023 Se han mejorado los comentarios de la funcion validarCodNoExiste
     * @since: 05-02-2023 Cambiar Formato
     * @since: 24-01-2023
     * @param string $codUsuario Codigo del usuario
     * @access public
     * @return boolean Devuelve true si existe el codigo del usuario y si no devuelve false
     */
    public static function validarCodNoExiste($codUsuario) {
        $codNoExiste = true;
        $SQLValidarCodigo = <<< query
                select * from T01_Usuario where T01_CodUsuario="{$codUsuario}";
                query;
        $oResultado = DBPDO::ejecutarConsulta($SQLValidarCodigo);
        if (!$oResultado) {
            $codNoExiste = false;
        }
        return $codNoExiste;
    }

}
?>