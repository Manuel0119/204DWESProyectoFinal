<?php

/*
 * Fichero de configuración que contiene la configuración de la aplicación.
 * @author Manuel Martín Alonso
 * @since:  24-01-2023
 * Última modificación: 05-02-2023
 */

require_once 'core/221024ValidacionFormularios.php';
require_once 'model/DB.php';
require_once 'model/UsuarioDB.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
require_once 'model/ErrorApp.php';
require_once "model/REST.php";
require_once "model/Universidad.php";
require_once "model/Departamento.php";
require_once "model/DepartamentoPDO.php";

//Definir constantes
define("OBLIGATORIO", 1);

//Array de los controladores
$aControladores=[
    "login"=>"controller/cLogin.php",
    "inicioPublico"=>"controller/cInicioPublico.php",
    "inicioPrivado"=>"controller/cInicioPrivado.php",
    "wip"=>"controller/cWIP.php",
    "error"=>"controller/cError.php",
    "detalle"=>"controller/cDetalle.php",
    "registro"=>"controller/cRegistro.php",
    "miCuenta"=>"controller/cMiCuenta.php",
    "cambiarPassword"=>"controller/cCambiarPassword.php",
    "borrarCuenta"=>"controller/cBorrarCuenta.php",
    "rest"=>"controller/cREST.php",
    "mantenimiento"=>"controller/cMtoDepartamentos.php"
];

//Array de las vistas
$aVistas=[
    "layout"=>"view/layout.php",
    "login"=>"view/vLogin.php",
    "inicioPublico"=>"view/vInicioPublico.php",
    "inicioPrivado"=>"view/vInicioPrivado.php",
    "wip"=>"view/vWIP.php",
    "error"=>"view/vError.php",
    "detalle"=>"view/vDetalle.php",
    "registro"=>"view/vRegistro.php",
    "miCuenta"=>"view/vMiCuenta.php",
    "cambiarPassword"=>"view/vCambiarPassword.php",
    "borrarCuenta"=>"view/vBorrarCuenta.php",
    "rest"=>"view/vREST.php",
    "mantenimiento"=>"view/vMtoDepartamentos.php"
];
?>