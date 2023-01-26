<?php

require_once 'conf/confDBPDO.php';

class DBPDO implements DB {

    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        } catch (PDOException $exc) {
            header("Location: index.php");
            exit();
        } finally {
            unset($oPDO);
        }
    }

}

?>