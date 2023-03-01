<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear un layout.
        Fecha-última-revisión: 21-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <link href="webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
        <style>
            .formulario{
                border: none;
            }
            header{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            h2{
                color: white;
            }
            tbody {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 15px;
            }
            .encabezado-layout {
                display: flex;
                justify-content: space-around;
                align-items: center;
                flex-wrap: nowrap;
                background: #2D3E52;
                width: 100vw;
            }
            .vista{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                align-content: center;
                flex-wrap: nowrap;
            }
            /*Estilos reloj*/
            .puntos {
                font-size: 30px;
                letter-spacing: -2px;
                color: #fff;
                text-shadow: 0 0 5px #fff, 0 0 10px rgb(133, 192, 215), 0 0 15px rgb(100, 160, 234), 0 0 20px #3464e6, 0 0 25px #2314eb;
                -webkit-text-fill-color: #F4ECFF;
                -webkit-text-stroke-color: #2314eb;
                -webkit-text-stroke-width: 0.2px;
            }
            a{
                color: white;
            }
            #numeros {
                display: flex;
                align-items: center;
                align-content: center;
            }
            img{
                width: 30px;
                height: 30px;
            }
            #tecnologias{
                background: #2D3E52;
                color: white;
                font-size: larger;
                border: none;
                cursor: pointer;

            }
        </style>
        <script defer src="webroot/js/Reloj.js"></script>
    </head>
    <body>
        <header>
            <div class="encabezado-layout">
                <h1>204DWESProyectoFinal</h1>
                <h2>Aplicacion multicapa y orientada a objetos</h2>
            </div>
        </header>
        <div class="vista">
            <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; ?>
        </div>
        <footer>
            <div><a target="_blank" href="../../../index.html"><img style="padding: 0em 1em;" src="webroot/media/logo_propio.png" alt="logo" id="logo"></a></div>
            2022-23 Manuel Martín Alonso. ©Todos los derechos reservados.
            <a href="https://github.com/Manuel0119/204DWESProyectoFinal" target="_blank"><img src="webroot/media/github-logo.png" alt="github" id="g"></a>
            <a href="doc/Curriculum Vitae - Manuel Martín Alonso.pdf" target="_blank"><img src="webroot/media/curriculum-logo.png" alt="curriculum" id="curricu"></a>
            <a href="https://www.ikea.com/es/es/" target="_blank" style="color: white;">Página a imitar: "Ikea"</a>
            <?php if ($_SESSION['paginaEnCurso'] != 'tecnologias' && $_SESSION['paginaEnCurso'] != 'wip') { ?>
                <form method="post">
                    <button type="submit" id="tecnologias" name="tecnologias" value="Tecnologías">Tecnologías</button>
                </form>
            <?php } ?>
            <div><a target="_blank" href="doc/phpdoc/index.html">DocumentacionPHP</a></div>
        </footer>
    </body>
</html>