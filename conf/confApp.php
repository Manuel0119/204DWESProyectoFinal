<?php

require_once 'core/221024ValidacionFormularios.php';
require_once 'model/DB.php';
require_once 'model/UsuarioDB.php';
require_once 'model/Usuario.php';
require_once 'model/UsuarioPDO.php';
require_once 'model/DBPDO.php';
//require_once 'model/AppError.php';
define("OBLIGATORIO", 1);

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
];

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
    "cambiarCassword"=>"view/vCambiarPassword.php",
    "borrarCuenta"=>"view/vBorrarCuenta.php",
];
?>