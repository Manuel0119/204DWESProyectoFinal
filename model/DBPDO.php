<?php

require_once 'conf/confDBPDO.php';

class DBPDO implements DB {

    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute($parametros);
            return $consulta;
        } catch (PDOException $exception) {
            $_SESSION['error']=new ErrorApp($exception->getCode(), $exception->getMessage(), $exception->getFile(), $exception->getLine(),$_SESSION['paginaAnterior']);
            $_SESSION['paginaEnCurso'] = 'error';
            header('Location: index.php');
            exit;
        } finally {
            unset($oPDO);
        }
    }

}

?>