<?php
require_once 'conf/confApp.php';
require_once 'conf/confDBPDO.php';
session_start(); //Creamos o recuperamos sesion
if (!isset($_SESSION['paginaEnCurso'])) {//Si no hay ninguna pagina en curso
    $_SESSION['paginaEnCurso'] = 'inicioPublico'; //Establecemos la pagina de inicio en la pagina en curso 
}
require_once $aControladores[$_SESSION['paginaEnCurso']]; //pedimos el controlador del inicio publico
require_once $aVistas[$_SESSION['paginaEnCurso']];
?>