<?php

/**
 * Class DBPDO
 *
 * Fichero con la clase DBPDO
 *
 * PHP version 8.1
 */

/**
 * Clase DBPDO
 * 
 * Clase DBPDO que contiene la función ejecutar consulta con la sentencia SQL y los diferentes parámetros como parámetros de la función. Además, implementa la interfaz DB
 * 
 * @author Manuel Martín Alonso
 * @since: 05-02-2023 Se han mejorado los comentarios de la clase DBPDO
 * @since: 30-01-2023 Se ha incorporado la gestión de errores en el método ejecutarConsulta()
 * @since: 24-01-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
require_once 'conf/confDBPDO.php';

class DBPDO implements DB {

    /**
     * Funcion ejecutarConsulta
     * 
     * Funcion que ejecuta las sentencias SQL y devuelve el resultado
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 05-02-2023 Se han mejorado los comentarios de la clase DBPDO
     * @since: 30-01-2023 Se ha incorporado la gestión de errores en el método ejecutarConsulta()
     * @since: 24-01-2023
     * @param string $entradaSQL Sentencia SQL a ejecutar
     * @param array|null $parametros Parámetros con los que completar la sentencia
     * @access public
     * @return PDOStatement Resultado de la sentencia ejecutada
     */
    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        } catch (PDOException $exception) {
            $_SESSION['error'] = new ErrorApp($exception->getCode(), $exception->getMessage(), $exception->getFile(), $exception->getLine(), $_SESSION['paginaAnterior']);
            $_SESSION['paginaEnCurso'] = 'error';
            header('Location: index.php');
            exit;
        } finally {
            unset($oPDO);
        }
    }
}
?>