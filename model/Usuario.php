<?php

/**
 * Class Usuario
 *
 * Fichero con la clase Usuario
 *
 * PHP version 8.1
 */

/**
 * Clase Usuario
 * 
 * Clase Usuario para para usar las funciones necesarias para obtener valores de los atruibutos o para establecerlos
 * 
 * @author Manuel Martín Alonso
 * @since: 21-02-2023 Se han mejorado los comentarios de la clase Usuario
 * @since: 05-02-2023 Cambiar Formato
 * @since: 30-01-2023 Cambiar parametros del constructor
 * @since: 24-01-2023
 * @copyright 2022-2023 Manuel Martín Alonso
 * @version 1.0
 * 
 */
class Usuario {

    /**
     * @access private
     * @var string $codUsuario Código del usuario
     */
    private $codUsuario;
    
    /**
     * @access private
     * @var string $password Contraseña del usuario
     */
    private $password;
    
    /**
     * @access private
     * @var string $descUsuario Descripción del usuario
     */
    private $descUsuario;
    
    /**
     * @access private
     * @var int $numConexiones Número de conexiones del usuario
     */
    private $numConexiones;
    
    /**
     * @access private
     * @var datetime $fechaHoraUltimaConexion Fecha de la ultima conexión del usuario
     */
    private $fechaHoraUltimaConexion;
    
    /**
     * @access private
     * @var datetime $fechaHoraUltimaConexionAnterior Fecha de la última conexión anterior del usuario
     */
    private $fechaHoraUltimaConexionAnterior;
    
    /**
     * @access private
     * @var string $perfil Tipo de perfil del usuario
     */
    private $perfil;
    
    /**
     * @access private
     * @var mixed $imagenUsuario Imagen del usuario
     */
    private $imagenUsuario;

    /**
     * Funcion __construct
     * 
     * Funcion que inicializa los atributos declarados
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @param string $codUsuario Código del usuario
     * @param string $password Contraseña del usuario
     * @param string $descUsuario Descripción del usuario
     * @param int $numConexiones Número de conexiones del usuario
     * @param DateTime $fechaHoraUltimaConexionAnterior Fecha de la última conexión anterior del usuario
     * @param string $perfil Tipo de perfil del usuario
     * @param mixed $imagenUsuario Imagen del usuario
     */
    function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexionAnterior, $perfil='usuario', $imagenUsuario=null) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->perfil = $perfil;
        $this->imagenUsuario = $this->imagenUsuario;
    }

    /**
     * Funcion getCodUsuario
     * 
     * Funcion que devuelve el código del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return string Devuelve el código del usuario
     */
    function getCodUsuario() {
        return $this->codUsuario;
    }

    /**
     * Funcion getPassword
     * 
     * Funcion que devuelve la contraseña del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return string Devuelve la contraseña del usuario
     */
    function getPassword() {
        return $this->password;
    }

    /**
     * Funcion getDescUsuario
     * 
     * Funcion que devuelve la descripción del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return string Devuelve la descripción del usuario
     */
    function getDescUsuario() {
        return $this->descUsuario;
    }

    /**
     * Funcion getNumConexiones
     * 
     * Funcion que devuelve el número de conexiones del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return int Devuelve el número de conexiones del usuario
     */
    function getNumConexiones() {
        return $this->numConexiones;
    }

    /**
     * Funcion getFechaHoraUltimaConexion
     * 
     * Funcion que devuelve la fecha de la ultima conexión del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return DateTime Devuelve la fecha de la ultima conexión del usuario
     */
    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    /**
     * Funcion getFechaHoraUltimaConexionAnterior
     * 
     * Funcion que devuelve la fecha de la última conexión anterior del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return DateTime Devuelve la fecha de la última conexión anterior del usuario
     */
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    /**
     * Funcion getPerfil
     * 
     * Funcion que devuelve el tipo de perfil del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 24-01-2023
     * @return string Devuelve el tipo de perfil del usuario
     */
    function getPerfil() {
        return $this->perfil;
    }

    /**
     * Funcion setCodUsuario
     * 
     * Funcion que establece el código del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $codUsuario Nuevo código del usuario
     */
    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    /**
     * Funcion setPassword
     * 
     * Funcion que establece la contraseña del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $password Nueva contraseña del usuario
     */
    function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Funcion setDescUsuario
     * 
     * Funcion que establece la descripción del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $descUsuario Nueva descripción del usuario
     */
    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    /**
     * Funcion setNumConexiones
     * 
     * Funcion que establece el número de conexiones del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param int $numConexiones Número de conexiones del usuario
     */
    function setNumConexiones($numConexiones) {
        $this->numConexiones = $numConexiones;
    }

    /**
     * Funcion setFechaHoraUltimaConexion
     * 
     * Funcion que establece la fecha de la ultima conexión del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param DateTime $fechaHoraUltimaConexion Nueva fecha de la ultima conexión del usuario
     */
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    /**
     * Funcion setFechaHoraUltimaConexionAnterior
     * 
     * Funcion que establece la fecha de la última conexión anterior del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param DateTime $fechaHoraUltimaConexionAnterior Nueva fecha de la última conexión anterior del usuario
     */
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }

    /**
     * Funcion setPerfil
     * 
     * Funcion que establece el tipo de perfil del usuario
     * 
     * @author Manuel Martín Alonso
     * @version 1.0
     * @since: 02-02-2023
     * @param string $perfil Nueva tipo de perfil del usuario
     */
    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
    
}
?>