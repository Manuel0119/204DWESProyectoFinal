<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de Error.
        Fecha-última-revisión: 30-01-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final - Error</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            tbody {
                display: flex;
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }
            th, td {
                text-align: center;
                font-size: larger;
            }
            .general{
                display: flex;
                width: 100vw;
                height: 80vh;
                justify-content: center;
                align-items: center;
                flex-direction: column;
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

        </style>
    </head>
    <body>
        <p>Error</p>
        <div class="general">
            <table class="datos">
                <tr>
                    <th>Código Error:</th>
                    <td><?php echo $aError["codigoError"]; ?></td>
                </tr>
                <tr>
                    <th>Mensaje Error:</th>
                    <td><?php echo $aError["mensajeError"]; ?></td>
                </tr>
                <tr>
                    <th>Línea Error:</th>
                    <td><?php echo $aError["lineaError"]; ?></td>
                </tr>
                <tr>
                    <th>Archivo Error:</th>
                    <td><?php echo $aError["archivoError"]; ?></td>
                </tr>
                <tr>
                    <th>Error Página Siguiente:</th>
                    <td><?php echo $aError["pagSiguienteError"]; ?></td>
                </tr>
            </table>
            <form name="error" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volver" name="volver" value="Volver">
            </form>
        </div>
    </body>
</html>

