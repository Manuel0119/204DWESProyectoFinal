<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana para editar la contraseña de una cuenta.
        Fecha-última-revisión: 05-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final - Perfil</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            .vista{
                display: flex;
                justify-content: flex-start;
                align-items: center;
                flex-direction: column;
                align-content: center;
                flex-wrap: nowrap;
                height: 92.3%;
                gap: 3.5rem;
            }
            body{
                margin: 0;
                padding: 0;
                height: 94.2vh;
                display: flex;
                justify-content: center;
                flex-flow: wrap;
                align-items: flex-start;
            }
            tbody{
                padding: 10px;
                gap: 10px;
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
                height: 80.2vh;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                -webkit-box-pack: end;
                justify-content: center;
                align-items: center;
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
                outline: none;
                overflow: hidden;
                padding: 0;
                padding-inline-end: .5rem;
                padding-inline-start: .5rem;
            }
            td{
                font-size: 1.5rem;
            }
            tr{
                padding: 10px;
            }
            tr,td{
                width: 100%;
                display: flex;
                align-items: center;
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
                margin: 10px;
            }
            input[type="submit"]:hover{
                background: #bbbbbb;
            }
            span{
                color: #6CD7BD;
            }
            #parrafoIntruccion{
                color: white;
                font-size: large;
            }
            #bienvenida{
                text-align: center;
            }
            form{
                transition: all 0.5s ease;
            }
        </style>
    </head>
    <body>
        <div class="general">
            <div class="cuadroIzquierdo">
                <h2 id="bienvenida">Bienvenido <span><?php echo $_SESSION['User204DWESProyectoFinal']->getDescUsuario(); ?></span> a tu cuenta LoginLogoff del proyecto final.</h2>
                <p id="parrafoIntruccion">Si desea eliminar su cuenta personal con nosotros debe introducir la contraseña de su cuenta</p>
            </div>
            <div class="codigophp">
                <h1>Borrar Cuenta</h1>
                <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                    <table class="formulario">
                        <tr>
                            <td>
                                <input type="submit" id="borrarCuenta" value="Borrar Cuenta" name="borrarCuenta">
                                <input type="submit" id="cancelar" value="Cancelar" name="cancelar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>