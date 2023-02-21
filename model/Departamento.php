<?php

/**
 * Class Departamento
 *
 * Fichero con la clase Departamento
 *
 * PHP version 8.1
 */

/**
 * Clase Departamento
 * 
 * Clase Departamento para crear objetos de tipo Departamento
 * 
 * @author Manuel Martín Alonso
 * @since: 05-02-2023 Se han mejorado los comentarios de la clase Departamento
 * @since: 03-02-2023 Se ha formateado la clase Departamento
 * @since: 02-02-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
class Departamento {

    /**
     * @access private
     * @var string $codDepartamento Código del Departamento
     */
    private $codDepartamento;
    
    /**
     * @access private
     * @var string $descDepartamento Descripción del Departamento
     */
    private $descDepartamento;
    
    /**
     * @access private
     * @var DateTime $fechaCreacionDepartamento Fecha de creación del Departamento
     */
    private $fechaCreacionDepartamento;
    
    /**
     * @access private
     * @var float $volumenNegocio Volumen de negocio del Departamento
     */
    private $volumenNegocio;
    
    /**
     * @access private
     * @var DateTime $fechaBajaDepartamento Fecha de baja del Departamento
     */
    private $fechaBajaDepartamento;

    /**
     * Funcion __construct
     * 
     * Funcion que inicializa los atributos declarados
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $codDepartamento Código del Departamento
     * @param string $descDepartamento Descripción del Departamento
     * @param DateTime $fechaCreacionDepartamento Fecha de creación del Departamento
     * @param float $volumenNegocio Volumen de negocio del Departamento
     * @param Datetime $fechaBajaDepartamento Fecha de baja del Departamento
     */
    function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenNegocio, $fechaBajaDepartamento) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = new DateTime($fechaCreacionDepartamento);
        $this->volumenNegocio = $volumenNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

    /**
     * Funcion getCodDepartamento
     * 
     * Funcion que devuelve el código del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve el código del departamento
     */
    function getCodDepartamento() {
        return $this->codDepartamento;
    }

    /**
     * Funcion getDescDepartamento
     * 
     * Funcion que devuelve la descripción del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve la descripción del departamento
     */
    function getDescDepartamento() {
        return $this->descDepartamento;
    }

    /**
     * Funcion getFechaCreacionDepartamento
     * 
     * Funcion que devuelve la fecha de creación del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return datetime Devuelve la fecha de creación del departamento
     */
    function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    /**
     * Funcion getVolumenNegocio
     * 
     * Funcion que devuelve el volumen de negocio del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return float Devuelve el volumen de negocio del departamento
     */
    function getVolumenNegocio() {
        return $this->volumenNegocio;
    }

    /**
     * Funcion getFechaBajaDepartamento
     * 
     * Funcion que devuelve la fecha de baja del departamento si dicho departamento ha sido dado de baja
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return datetime Devuelve la fecha de baja del departamento si dicho departamento ha sido dado de baja
     */
    function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    /**
     * Funcion setCodDepartamento
     * 
     * Funcion que establece el nuevo código del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $codDepartamento Nuevo código del departamento
     */
    function setCodDepartamento($codDepartamento): void {
        $this->codDepartamento = $codDepartamento;
    }

    /**
     * Funcion setDescDepartamento
     * 
     * Funcion que establece la nueva descripción del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $descDepartamento Nueva descripción del departamento
     */
    function setDescDepartamento($descDepartamento): void {
        $this->descDepartamento = $descDepartamento;
    }

    /**
     * Funcion setFechaCreacionDepartamento
     * 
     * Funcion que establece la fecha de alta o de rehabilitacion del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param datetime $fechaCreacionDepartamento Fecha de alta o de rehabilitacion del departamento
     */
    function setFechaCreacionDepartamento($fechaCreacionDepartamento): void {
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    /**
     * Funcion setVolumenNegocio
     * 
     * Funcion que establece el volumen de negocio del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param float $volumenNegocio Volumen de negocio del departamento
     */
    function setVolumenNegocio($volumenNegocio): void {
        $this->volumenNegocio = $volumenNegocio;
    }

    /**
     * Funcion setFechaBajaDepartamento
     * 
     * Funcion que establece la fecha de la ultima baja logica del departamento
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param float $volumenNegocio Fecha de la ultima baja logica del departamento
     */
    function setFechaBajaDepartamento($fechaBajaDepartamento): void {
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }
}
?>