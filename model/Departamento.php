<?php

/**
 * @author Manuel Martín Alonso
 * @version 1.0
 * 
 * Clase Departamentos
 */

class Departamento{
    
    private $codDepartamento;
    private $descDepartamento;
    private $fechaCreacionDepartamento;
    private $volumenNegocio;
    private $fechaBajaDepartamento;
    
    function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = new DateTime($fechaCreacionDepartamento);
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }
    
    function getCodDepartamento() {
        return $this->codDepartamento;
    }

    function getDescDepartamento() {
        return $this->descDepartamento;
    }

    function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    function getVolumenNegocio() {
        return $this->volumenNegocio;
    }

    function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    function setCodDepartamento($codDepartamento): void {
        $this->codDepartamento = $codDepartamento;
    }

    function setDescDepartamento($descDepartamento): void {
        $this->descDepartamento = $descDepartamento;
    }

    function setFechaCreacionDepartamento($fechaCreacionDepartamento): void {
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    function setVolumenNegocio($volumenNegocio): void {
        $this->volumenNegocio = $volumenNegocio;
    }

    function setFechaBajaDepartamento($fechaBajaDepartamento): void {
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

}
?>