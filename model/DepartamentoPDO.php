<?php

/**
 * @author Manuel Martín Alonso
 * @version 1.0
 * 
 * Clase Departamentos
 */
class DepartamentoPDO {

    public static function buscarDepartamentoPorDescripcion($descDepartamento) {
        $aDepartamento = [];
        $SQLbuscarDepartamentoPorDescripcion = "select * from T02_Departamento where T02_DescDepartamento like'%{$descDepartamento}%';";
        $resultadoConsulta = DBPDO::ejecutarConsulta($SQLbuscarDepartamentoPorDescripcion);
        $oResultado = $resultadoConsulta->fetchObject();
        while ($oResultado != null) {
            array_push($aDepartamento, new Departamento(
                            $oResultado->T02_CodDepartamento,
                            $oResultado->T02_DescDepartamento,
                            $oResultado->T02_FechaCreacionDepartamento,
                            $oResultado->T02_FechaCreacionDepartamento,
                            $oResultado->T02_VolumenDeNegocio,
                            $oResultado->T02_FechaBajaDepartamento
            ));
            $oResultado = $resultadoConsulta->fetchObject();
        }
    }

}
?>

