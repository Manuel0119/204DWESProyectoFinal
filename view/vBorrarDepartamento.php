<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en borrar un departamento.
        Fecha-última-revisión: 23-02-2023.
    -->
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
                outline: none;
                overflow: hidden;
                padding: 0;
                padding-inline-end: .5rem;
                padding-inline-start: .5rem;
            }
            tbody{
                gap: 0;
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
                align-items: baseline;
                flex-wrap: nowrap;
            }
            span{
                color: #6CD7BD;
            }
            #parrafoIntruccion{
                color: white;
                font-size: large;
            }
            input{
                width: auto;
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
        </style>
    </head>
    <body>
        <div class="general">
            <div class="cuadroIzquierdo">
                <h2><span>Borrar</span> un departamento es simple y sencillo.</h2>
            </div>
            <div class="codigophp">
                <h1>Borrar Departamento</h1>
                <h3>¿Estás seguro de que quieres borrar el departamento?</h3>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table class="formulario">
                        <tr>
                            <td><label for="codigo">Código:</label></td>
                            <td><input type="text" name="codigo" value="<?php echo $aVBorrarDepartamento['codigo']; ?>" readonly="true" style="background-color: gray;" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="descripcion">Descripción:</label></td>
                            <td><input type="text" name="descripcion" value="<?php echo $aVBorrarDepartamento['descripcion']; ?>" readonly="true" style="background-color: gray;" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="volumen">Volumen de Negocio:</label></td>
                            <td><input type="text" name="volumen" value="<?php echo $aVBorrarDepartamento['volumen']; ?>" readonly="true" style="background-color: gray;" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="fechaAlta">Fecha Alta:</label></td>
                            <td><input type="text" name="fechaAlta" value="<?php echo $aVBorrarDepartamento['fechaAlta']; ?>" readonly="true" style="background-color: gray;" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td><label for="fechaBaja">Fecha Baja:</label></td>
                            <td><input type="text" name="fechaBaja" value="<?php echo $aVBorrarDepartamento['fechaBaja']; ?>" readonly="true" style="background-color: gray;" class="entradadatos"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" id="aceptar" name="aceptar" value="Borrar">
                            </td>
                            <td colspan="2">
                                <input type="submit" id="cancelar" name="cancelar" value="Cancelar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>