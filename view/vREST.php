<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de REST.
        Fecha-última-revisión: 27-01-2023.
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
                margin-top: 0;
                position: initial;
            }
            .entradadatos{
                -webkit-padding-start: .5rem;
                -webkit-padding-end: .5rem;
                background: none;
                border: 1px solid black;
                border-radius: 4px;
                color: #111;
                color: rgb(var(--colour-text-and-icon-1,17,17,17));
                flex-grow: 1;
                font-size: 1rem;
                height: 2rem;
                order: 3;
                outline: none;
                overflow: hidden;
                padding: 0;
                padding-inline-end: .5rem;
                padding-inline-start: .5rem;
                margin: 15px;
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
                cursor: pointer;
                font-size: large;
                border: 1px solid black;
            }
            input[type="submit"]:hover{
                background: white;
            }
            form{
                margin: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: row-reverse;
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
            .universidad{
                display: flex;
                flex-direction: column;
                align-items: center;
                border-collapse: collapse;
            }
            #tablaUniversidades{
                border-collapse: collapse;
                width: 80vw;
                font-size: larger;
            }
        </style>
    </head>
    <body>
        <p>REST</p>
        <div class="codigophp">
            <form name="volverREST" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volverREST" name="volverREST" value="Volver">
            </form>
            <div class="universidad">
                <form name="buscarUniversidad" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input id="universidad" type="text" placeholder="Buscar una universidad:" class="entradadatos" name="pais" value="<?php echo isset($_REQUEST['pais']) ? $_REQUEST['pais'] : null; ?>"/>
                    <input id="buscar" type="submit" name="buscar" value="Buscar"/>
                </form>
                <?php
                if (isset($aUniversidades)) {
                    if ($aRespuestas != null) {
                        ?>
                        <h4>Universidades en  <?php echo $_REQUEST['pais']; ?> :</h4>
                        <table id="tablaUniversidades">
                            <tr>
                                <th>Nombre</th>
                                <th>País</th>
                                <th>Página Web</th>
                                <th>Código</th> 
                                <th>Provincia del Estado</th> 
                            </tr>

                            <?php
                            foreach ($aRespuestas as $valor) {
                                ?>
                                <tr>
                                    <td><?php echo $valor['nombre']; ?></td>
                                    <td><?php echo $valor['pais'] ?></td>
                                    <td> <a href="<?php echo $valor['pagina'] ?>" target="_blank"><?php echo $valor['pagina'] ?></a></td>
                                    <td><?php echo $valor['codigo'] ?></td>
                                    <td><?php echo $valor['provincia_estado'] ?></td>
                                    <?php
                                }
                            } else {
                                echo ' <hr><h3>No hay resultados sobre el pais buscado</h3>';
                            }
                        }
                        ?>
                </table>
            </div>
        </div>
    </body>
</html>