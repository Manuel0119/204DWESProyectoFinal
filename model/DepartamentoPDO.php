<?php

/**
 * Class DepartamentoPDO
 *
 * Fichero con la clase DepartamentoPDO
 *
 * PHP version 8.1
 */

/**
 * 
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
     * 
     * Funcion buscarDepartamentoPorDescripcion
     * 
     * Funcion que busca un departamento mediante la descripción del departamento en la base de datos
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 05-02-2023 Se han mejorado los comentarios de la clase DBPDO
     * @since: 30-01-2023 Se han arreglado errores de ejecución
     * @since: 24-01-2023
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
}
?>