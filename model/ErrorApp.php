<?php

/**
 * Class ErrorApp
 *
 * Fichero con la clase ErrorApp
 *
 * PHP version 8.1
 */

/**
 * 
 * Clase ErrorApp
 * 
 * Clase ErrorApp para crear objetos de tipo ErrorApp
 * 
 * @author Manuel Martín Alonso
 * @since: 30-01-2023 Arreglando errores de ejecución y de formato
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 * 
 */
class ErrorApp {

    /**
     * @access private
     * @var string $codError Código del error
     */
    private $codError;
    
    /**
     * @access private
     * @var string $descError Descripción del error
     */
    private $descError;
    
    /**
     * @access private
     * @var string $archivoError Nombre del fichero donde ocurre el error
     */
    private $archivoError;
    
    /**
     * @access private
     * @var int $lineaError Línea donde ocurre el error
     */
    private $lineaError;
    
    /**
     * @access private
     * @var string $paginaSiguiente Página siguiente
     */
    private $paginaSiguiente;

    /**
     * 
     * Funcion __construct
     * 
     * Funcion que inicializa los atributos declarados
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @param string $codError Código del error
     * @param string $descError Descripción del error
     * @param string $archivoError Nombre del fichero donde ocurre el error
     * @param int $lineaError Línea donde ocurre el error
     * @param string $paginaSiguiente Página siguiente
     */
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }

    /**
     * 
     * Funcion getCodError
     * 
     * Funcion que devuelve el código del error
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @return string Devuelve el código del error
     */
    function getCodError() {
        return $this->codError;
    }

    /**
     * 
     * Funcion getDescError
     * 
     * Funcion que devuelve la descripción del error
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @return string Devuelve la descripción del error
     */
    function getDescError() {
        return $this->descError;
    }

    /**
     * 
     * Funcion getLineaError
     * 
     * Funcion que devuelve la línea donde ocurre el error
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @return int Devuelve la línea donde ocurre el error
     */
    function getLineaError() {
        return $this->lineaError;
    }

    /**
     * 
     * Funcion getArchivoError
     * 
     * Funcion que devuelve el nombre del fichero donde ocurre el error
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @return string Devuelve el nombre del fichero donde ocurre el error
     */
    function getArchivoError() {
        return $this->archivoError;
    }

    /**
     * 
     * Funcion getPaginaSiguiente
     * 
     * Funcion que devuelve la página siguiente
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 30-01-2023
     * @return string Devuelve la página siguiente
     */
    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }
}
?>