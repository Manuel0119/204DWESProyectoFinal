<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            h2{
                font-size: 32px;
                letter-spacing: -.04rem;
            }
            .general{
                display: flex;
                width: 100vw;
                height: 87vh;
            }
            .codigophp{
                width: 60vw;
                background-color: white;
                display: flex;
                -webkit-box-flex: 1;
                flex: 1 1 auto;
                padding: 0px 2rem;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                -webkit-box-pack: justify;
                justify-content: center;
                align-items: center;
            }
            .cuadroIzquierdo{
                width: 40vw;
                background-color: rgb(0, 88, 163);
                color: white;
                display: flex;
                -webkit-box-flex: 0;
                flex: 0 1 auto;
                height: auto;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                -webkit-box-pack: end;
                justify-content: center;
                padding: 2rem 5rem;
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
            span{
                color: #6CD7BD;
            }
            #parrafoIntruccion{
                color: white;
                font-size: large;
            }
            p{
                color: black;
                font-size: large;
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
            label{
                font-size: larger;
            }
            hr {
                width: 20rem;
                height: 0.2em;
                border: none;
                background-color: #bbbbbb;
            }
        </style>
    </head>
    <body>
        <div class="general">
            <div class="cuadroIzquierdo">
                <h2><span>Accede</span> a tu cuenta LoginLogoff del proyecto final con tu usuario y contraseña.</h2>
                <p id="parrafoIntruccion">Iniciar sesión o tener una cuenta de LoginLogoff en el proyecto final te permite obtener ventajas que antes no habías visto.</p>
            </div>
            <div class="codigophp">
                <h1>Login</h1>
                <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table class="formulario">
                        <tr>
                            <td><label for="usuario">Usuario:</label></td>
                            <td><input type="text" name="usuario" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Contraseña:</label></td>
                            <td><input type="password" name="password" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" id="iniciarSesion" value="Iniciar Sesion" name="iniciarSesion">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" id="cancelar" name="cancelar" value="Cancelar">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <hr>
                                <p>¿No dispones de una cuenta?. Crearse una cuenta es <span>gratis</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" id="registrar" name="registrar" value="Registrarse">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>

