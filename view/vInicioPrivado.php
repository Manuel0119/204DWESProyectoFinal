<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            body{
                margin: 0;
                padding: 0;
                height: 94.2vh;
                display: flex;
                justify-content: center;
                flex-flow: wrap;
                align-items: flex-start;
            }
            td{
                font-size: 2rem;
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
            .formulario{
                position: absolute;
                background: #bbbbbb;
                right: 5px;
                top: 8rem;
                border-radius: 1rem;
            }
            .imgUsuario{
                position: absolute;
                top: 4.5rem;
                right: 3rem;
                width: 3rem;
                height: 3rem;
                cursor: pointer;
            }
/*            .imgUsuario:checked ~form {
                right: 0;
            }*/
            form{
                transition: all 0.5s ease;
            }
        </style>
        <script>
            
        </script>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <?php
                    //Damos la bienvenida al usuario en diferentes idiomas dependiendo de la cookie idioma
                    echo "Bienvenido " . $_SESSION['User204DWESProyectoFinal']->getDescUsuario();
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                    if ($_SESSION['User204DWESProyectoFinal']->getNumConexiones() > 1) {
                        echo"Último inicio de sesión: " . $_SESSION['User204DWESProyectoFinal']->getFechaHoraUltimaConexionAnterior();
                        ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    //Mostramos el numero de conexiones
                    echo"Te has conectado " . $_SESSION['User204DWESProyectoFinal']->getNumConexiones() . " veces";
                    } else {
                    ?> 
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo 'Es la primera vez que te conectas';
                    }
                    ?>
                </td>
            </tr>
        </table>
        <img src="webroot/media/usuario-de-perfil.png" alt="usuario" class="imgUsuario">
        <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <table class="formulario">
                <tr>
                    <td colspan="2"><input type="submit" id="detalle" value="Detalle" name="detalle"></td>
                </tr> 
                <tr>
                    <td colspan="2"><input type="submit" id="WIP" value="WIP" name="WIP"></td>
                </tr> 
                <tr>
                    <td colspan="2"><input type="submit" id="salir" value="Salir" name="salir"></td>
                </tr>
            </table>
        </form>
    </body>
</html>



