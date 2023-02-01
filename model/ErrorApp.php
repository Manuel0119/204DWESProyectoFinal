<?php

class ErrorApp {

    private $codError;
    private $descError;
    private $archivoError;
    private $lineaError;
    private $paginaSiguiente;

    
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }

    function getCodError() {
        return $this->codError;
    }

    function getDescError() {
        return $this->descError;
    }

    function getLineaError() {
        return $this->lineaError;
    }

    function getArchivoError() {
        return $this->archivoError;
    }

    function getPaginaSiguiente() {
        return $this->paginaSiguiente;
    }
}
?>