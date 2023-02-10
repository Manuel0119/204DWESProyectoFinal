<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de detalle.
        Fecha-última-revisión: 05-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final - Detalle</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            body{
                width: 100%;
                overflow-x: hidden;
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
        </style>
    </head>
    <body>
        <p>Detalle</p>
        <div class="codigophp">
            <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volver" name="volver" value="Volver">
            </form>
        </div>
        <!--$_SESSION-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_SESSION) || empty($_SESSION)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_SESSION está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_SESSION';
                foreach ($_SESSION as $clave => $valor) {
                    echo "<tr>";
                    echo '<td style="text-align:center; font-size: 90%;">' . $clave . '</td>';
                    if (is_object($valor)) {
                        echo '<td><table style="width: 100%;font-size: 100%;">';
                        ?>
                        <td><?php
                            print_r($_SESSION);
                            ?>
                        </td>
                        <?php
                        echo"</table></td>";
                    } else {
                        echo "<td>" . $valor . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "</br>";
            }
            ?>
        </table>
        <!--$_COOKIE-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_COOKIE) || empty($_COOKIE)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_COOKIE está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_COOKIE';
                foreach ($_COOKIE as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_SERVER-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_SERVER) || empty($_SERVER)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_SERVER está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_SERVER';
                foreach ($_SERVER as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_FILES-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_FILES) || empty($_FILES)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_FILES está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_FILES';
                foreach ($_FILES as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_POST-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_POST) || empty($_POST)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_POST está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_POST';
                foreach ($_POST as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_GET-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_GET) || empty($_GET)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_GET está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_GET';
                foreach ($_GET as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_REQUEST-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_REQUEST) || empty($_REQUEST)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_REQUEST está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_REQUEST';
                foreach ($_REQUEST as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
        <!--$_ENV-->
        <table class="tablaMostrar">
            <?php
            //Comprobación de que la variable no sea null o vacia.
            if (is_null($_ENV) || empty($_ENV)) {
                print '<thead><th  style="border:none;color:red;text-align:center;">La variable superglobal $_ENV está vacía</th></thead>';
            } else {
                //Recorremos la variable imprimiendo la clave y el valor del array.
                echo '<th colspan="2" style="background: #CCC;">$_ENV';
                foreach ($_ENV as $clave => $valor) {
                    print("<tr>");
                    printf("<td>%s</td><td>%s</td>", $clave, $valor);
                    print("</tr>");
                }
            }
            echo '</th>';
            ?>
        </table>
    </body>
</html>