<?php

if (isset($_REQUEST['volverWIP'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit();
}
require_once $aVistas['layout'];
?>

