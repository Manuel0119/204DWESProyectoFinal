<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de detalle.
        Fecha-última-revisión: 26-01-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            body{
                width: 99%;
            }
            td {
                text-align: center;
            }
            .encabezado {
                justify-content: center;
                position: initial;
            }
            .codigophp {
                margin-bottom: 4rem;
                margin-left: 30rem;
                margin-top: 0;
                position: initial;
            }
            .volver{
                height: 35px;
                width: 35px;
            }
            input[type="submit"]{
                position: absolute;
                left: 50%;
                transform: translate(-64%, -50%);
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
            tr, td, th{ border: 1px black solid;}
            tbody{
                display: contents;
            }
        </style>
    </head>
    <body>
        <p>WIP</p>
        <div class="codigophp">
            <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volverWIP" name="volverWIP" value="Volver">
            </form>
        </div>
    </body>
</html>

