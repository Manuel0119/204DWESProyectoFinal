<?php

/**
 * Class DepartamentoPDO
 *
 * Fichero con la clase DepartamentoPDO
 * PHP version 8.1
 */

/**
 * Clase DepartamentoPDO
 * 
 * Clase DepartamentoPDO que contiene funciones para consultar o modificar los departamentos ya existentes
 * 
 * @author Manuel Martín Alonso
 * @since: 05-02-2023 Se han mejorado los comentarios de la clase DepartamentoPDO
 * @since: 03-02-2023 Se han arreglado errores de ejecución
 * @since: 02-02-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 * 
 */
class DepartamentoPDO {

    /**
     * Funcion buscarDepartamentoPorDescripcion
     * 
     * Funcion que busca un departamento mediante la descripción del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since 05-02-2023 Se han mejorado los comentarios de la clase DBPDO
     * @since 30-01-2023 Se han arreglado errores de ejecución
     * @since 24-01-2023
     * @param string $descDepartamento Descripción del departamento a buscar
     * @access public
     * @return array Array con los departamentos encontrados
     */
    public static function buscarDepartamentoPorDescripcion($descDepartamento) {
        $aDepartamento = [];
        $SQLbuscarDepartamentoPorDescripcion = "select * from T02_Departamento where T02_DescDepartamento like'%{$descDepartamento}%';";
        $resultadoConsulta = DBPDO::ejecutarConsulta($SQLbuscarDepartamentoPorDescripcion);
        $oResultado = $resultadoConsulta->fetchObject();
        while ($oResultado != null) {
            $oDepartamento = new Departamento(
                    $oResultado->T02_CodDepartamento,
                    $oResultado->T02_DescDepartamento,
                    $oResultado->T02_FechaCreacionDepartamento,
                    $oResultado->T02_VolumenDeNegocio,
                    $oResultado->T02_FechaBajaDepartamento
            );
            array_push($aDepartamento, $oDepartamento);
            $oResultado = $resultadoConsulta->fetchObject();
        }
        return $aDepartamento;
    }

    /**
     * Funcion buscarDepartamentoPorCodigo
     * 
     * Funcion que busca un departamento mediante el codigo del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since 16-02-2023
     * @param string $codDepartamento Codigo del departamento a buscar
     * @access public
     * @return object Objeto Departamento con el departamento encontrado
     */
    public static function buscarDepartamentoPorCodigo($codDepartamento) {
        $SQLbuscarDepartamentoPorCodigo = <<< sql
            SELECT * from T02_Departamento where T02_CodDepartamento = '{$codDepartamento}';
        sql;
        $resultado = DBPDO::ejecutarConsulta($SQLbuscarDepartamentoPorCodigo);
        $oDepartamento = $resultado->fetchObject();
        if (is_object($oDepartamento)) {
            $departamento = new Departamento(
                    $oDepartamento->T02_CodDepartamento,
                    $oDepartamento->T02_DescDepartamento,
                    $oDepartamento->T02_FechaCreacionDepartamento,
                    $oDepartamento->T02_VolumenDeNegocio,
                    $oDepartamento->T02_FechaBajaDepartamento
            );
            return $departamento;
        } else {
            return false;
        }
    }

    /**
     * Funcion modificarDepartamento
     * 
     * Funcion que modifica un departamento pasandole el codigo, la descripcion y el volumen de negocio del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since 17-02-2023
     * @param string $codDepartamento Codigo del departamento
     * @param string $descDepartamento Descripción del departamento
     * @param float $volumenNegocio Volumen de negocio del departamento
     * @access public
     * @return int Numero de consultas modificadas
     */
    public static function modificarDepartamento($codDepartamento, $descDepartamento, $volumenNegocio) {
        $SQLmodificarDepartamento = <<< sql
                    UPDATE T02_Departamento SET T02_DescDepartamento='$descDepartamento',T02_VolumenDeNegocio='$volumenNegocio' where T02_CodDepartamento='$codDepartamento';
                sql;
        $resultado = DBPDO::ejecutarConsulta($SQLmodificarDepartamento);
        return $resultado;
    }
    
    /**
     * Funcion borrarDepartamento
     * 
     * Funcion que elimina un departamento pasandole el codigo del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since 17-02-2023
     * @param string $codDepartamento Codigo del departamento
     * @access public
     */
    public static function borrarDepartamento($codDepartamento) {
        $SQLeliminarDepartamento = <<<query
                delete from T02_Departamento where T02_CodDepartamento='$codDepartamento';
                query;
        DBPDO::ejecutarConsulta($SQLeliminarDepartamento);
    }
}

?>