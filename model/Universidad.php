<?php

/**
 * Class Universidad
 *
 * Fichero con la clase Universidad
 *
 * PHP version 8.1
 */

/**
 * Clase Universidad
 * 
 * Clase Universidad para para usar las funciones en la clase REST
 * 
 * @author Manuel Martín Alonso
 * @since: 21-02-2023 Se han mejorado los comentarios de la clase Universidad
 * @since: 02-02-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
class Universidad{
    
    /**
     * @access private
     * @var string $nombre Nombre de la Universidad
     */
    private $nombre;
    
    /**
     * @access private
     * @var string $pais País donde se encuentra la Universidad
     */
    private $pais;
    
    /**
     * @access private
     * @var string $pagina Dirección URL de la pagina oficial de la Universidad
     */
    private $pagina;
    
     /**
     * @access private
     * @var string $codigo Código del país donde se encuentra la Universidad
     */
    private $codigo;
    
     /**
     * @access private
     * @var string $provincia_estado Provincia/Estado de la Universidad
     */
    private $provincia_estado;
    
    /**
     * Funcion __construct
     * 
     * Funcion que inicializa los atributos declarados
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $nombre Nombre de la Universidad
     * @param string $pais País donde se encuentra la Universidad
     * @param string $pagina Dirección URL de la pagina oficial de la Universidad
     * @param string $codigo Código del país donde se encuentra la Universidad
     * @param string $provincia_estado Provincia/Estado de la Universidad
     */
    public function __construct($nombre, $pais, $pagina, $codigo, $provincia_estado) {
        $this->nombre = $nombre;
        $this->pais = $pais;
        $this->pagina = $pagina;
        $this->codigo = $codigo;
        $this->provincia_estado = $provincia_estado;
    }

    /**
     * Funcion getNombre
     * 
     * Funcion que devuelve el nombre de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve el nombre de la Universidad
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Funcion getPais
     * 
     * Funcion que devuelve el país donde se encuentra la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve el país donde se encuentra la Universidad
     */
    public function getPais() {
        return $this->pais;
    }

    /**
     * Funcion getPagina
     * 
     * Funcion que devuelve la dirección URL de la pagina oficial de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve la dirección URL de la pagina oficial de la Universidad
     */
    public function getPagina() {
        return $this->pagina;
    }

    /**
     * Funcion getCodigo
     * 
     * Funcion que devuelve el código del país donde se encuentra la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve el código del país donde se encuentra la Universidad
     */
    public function getCodigo() {
        return $this->codigo;
    }

    /**
     * Funcion getProvincia_estado
     * 
     * Funcion que devuelve la Provincia/Estado de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @return string Devuelve la Provincia/Estado de la Universidad
     */
    public function getProvincia_estado() {
        return $this->provincia_estado;
    }

    /**
     * Funcion setNombre
     * 
     * Funcion que establece el nombre de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $nombre Nuevo nombre de la Universidad
     */
    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    /**
     * Funcion setPais
     * 
     * Funcion que establece el país donde se encuentra la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $pais Nuevo país donde se encuentra la Universidad
     */
    public function setPais($pais): void {
        $this->pais = $pais;
    }

    /**
     * Funcion setPagina
     * 
     * Funcion que establece la dirección URL de la pagina oficial de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $pagina Nueva dirección URL de la pagina oficial de la Universidad
     */
    public function setPagina($pagina): void {
        $this->pagina = $pagina;
    }

    /**
     * Funcion setCodigo
     * 
     * Funcion que establece el código del país donde se encuentra la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $codigo Nuevo código del país donde se encuentra la Universidad
     */
    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    /**
     * Funcion setProvincia_estado
     * 
     * Funcion que establece la Provincia/Estado de la Universidad
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $provincia_estado Nueva Provincia/Estado de la Universidad
     */
    public function setProvincia_estado($provincia_estado): void {
        $this->provincia_estado = $provincia_estado;
    }
}
?>