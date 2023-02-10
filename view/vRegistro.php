<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de registro.
        Fecha-última-revisión: 05-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final - Registro</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            h2{
                font-size: 32px;
                letter-spacing: -.04rem;
            }
            .general{
                display: flex;
                width: 100vw;
                height: 84.8vh;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-image: url(webroot/media/fondo-registro.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
            tbody{
                display: block;
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
            }
            tr,td{
                padding: 0.5rem;
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
                background: #bbbbbb;
            }
            .form_registro{
                background: white;
                padding: 20px;
                border-radius: 20px;
                width: 30vw;
                height: 35vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                box-shadow: 0px 0px 30px darkcyan;
            }
            label{
                font-size: larger;
            }
        </style>
    </head>
    <body>
        <div class="general">
            <div class="form_registro">
                <h1>Registro</h1>
                <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table class="formulario">
                        <tr>
                            <td><label for="usuario">Usuario:</label></td>
                            <td><input style="background: lightyellow" type="text" name="usuario" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Contraseña:</label></td>
                            <td><input style="background: lightyellow" type="password" name="password" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Vuelva a introducir la contraseña:</label></td>
                            <td><input style="background: lightyellow" type="password" name="repeatPassword" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Descripción:</label></td>
                            <td><input style="background: lightyellow" type="text" name="descripcion" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" id="registro" value="Crear Cuenta" name="registro">
                            </td>
                            <td>
                                <input type="submit" id="volver" name="volver" value="Cancelar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>