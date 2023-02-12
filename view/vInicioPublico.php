<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de inicio público.
        Fecha-última-revisión: 11-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link href="webroot/css/estilos-carrusel.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico"> 
        <script defer src="webroot/js/carrusel.js" type="text/javascript"></script>
    </head>
    <body>
        <form method="post">
            <button type="submit" class="button" id="login" name="login" value="login"><span>Iniciar Sesion</span></button>
        </form>
        <div class="container">
            <span class="siguiente">&#10095;</span>
            <span class="anterior">&#10094;</span>
            <section class="slides-row">
                <div class="slide" id="ultimaImagenDuplicada">
                    <a href="doc/230211DiagramaDeClasesAplicacionFinal.pdf" target="_blank"><img src="webroot/media/Imagen-DiagramaDeClases.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/media/Imagen-ModeloFisicoDatos.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/220111UsoDeLaSessionParaLaAplicación.pdf" target="_blank"><img src="webroot/media/Imagen-UsoSesion.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/220504SecuenciaDesarrolloCRUDcompleto.pdf" target="_blank"><img src="webroot/media/Imagen-SecuenciaDesarrolloCrudCompleto.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230129ArbolDeNavegación.pdf" target="_blank"><img src="webroot/media/Imagen-ArbolNavegacion.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/media/Imagen-CatalogoRequisitos.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230129DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/media/Imagen-DiagramaCasosDeUso.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230129EstandarDesarrolloDAWyEstructuraAlmacenamientoDWES.pdf" target="_blank"><img src="webroot/media/Imagen-EstandarDesarrolloDAW&EstructuraAlmacenamiento.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230129RelacionDeFicheros.pdf" target="_blank"><img src="webroot/media/Imagen-RelacionFicheros.PNG" alt=""></a>
                </div>
                <div class="slide">
                    <a href="doc/230211DiagramaDeClasesAplicacionFinal.pdf" target="_blank"><img src="webroot/media/Imagen-DiagramaDeClases.PNG" alt=""></a>
                </div>
                <div class="slide" id="primeraImagenDuplicada">
                    <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/media/Imagen-ModeloFisicoDatos.PNG" alt=""></a>
                </div>
            </section>
            <section class="puntos">
                <div class="punto activo"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
                <div class="punto"></div>
            </section>
        </div>
    </body>
</html>