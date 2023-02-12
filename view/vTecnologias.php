<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de tecnologías utilizadas a lo largo del curso.
        Fecha-última-revisión: 11-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            td {
                text-align: center;
            }
            .encabezado {
                justify-content: center;
                position: initial;
            }
            .codigophp {
                margin-bottom: 4rem;
                margin-top: 0;
                position: initial;
            }
            .volver{
                height: 35px;
                width: 35px;
            }
            input[type="submit"]{
                align-items: center;
                border-radius: 64px;
                display: inline-flex;
                justify-content: center;
                min-height: 2.5rem;
                padding: 0 2rem;
                width: 100%;
                cursor: pointer;
                font-size: large;
                border: 1px solid black;
            }
            input[type="submit"]:hover{
                background: white;
            }
            form{
                margin-top: 1rem;
            }
            .tablaMostrar {
                width: 65%;
                text-align: center;
                margin: 0 auto;
                margin-bottom: 20px;
                border: 1px black solid;
                border-collapse: collapse;
            }
            tr, td, th{
                border: 1px black solid;
            }
            tbody{
                display: contents;
            }
            .estudio a {
                color: #6CD7BD;
                text-decoration: none;
                font-size: 1.22em;
                font-weight: bold;
            }
            li{
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>
        <p>Tecnologías</p>
        <div class="codigophp">
            <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volverTecnologias" name="volverTecnologias" value="Volver">
            </form>
        </div>
        <div class="estudio">
            <ul>
                <li>
                    <a href="doc/221007_EjerciciosTema1.pdf" target="_blank">Ejercicios Tema 1</a>
                </li>
                <li>
                    <a href="doc/Wordpress-ManuelMartínAlonso-Presentación.pdf" target="_blank">Trabajo Personal Presentación</a>
                </li>
                <li>
                    <a href="doc/WordPress-ManuelMartínAlonso-Word.pdf" target="_blank">Trabajo Personal Word</a>
                </li>
            </ul>
        </div>
    </body>
</html>