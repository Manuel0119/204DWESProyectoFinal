<?php
if(isset($_REQUEST['volver'])){
    $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
    header('Location: index.php');
}
require_once $aVistas['layout'];
?>

