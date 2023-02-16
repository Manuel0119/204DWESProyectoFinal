<!DOCTYPE html>
<html lang="en">
    <!--
        Autor: Manuel Martín Alonso.
        Utilidad: Este programa consiste en crear una ventana de mantenimiento de departamentos.
        Fecha-última-revisión: 05-02-2023.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - Proyecto Final - Mto.Departamentos</title>
        <link rel="stylesheet" href="webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/media/favicon.ico">
        <style>
            body{
                width: 100%;
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
            .formVolver{
                margin: 1rem;
                display: flex;
                justify-content: center;
            }
            .tablaMostrar {
                width: 100%;
                text-align: center;
                margin: 0 auto;
                margin-bottom: 20px;
                border: 1px black solid;
                border-collapse: collapse;
            }
            label{
                font-size: x-large;
            }
            tr, td, th{
                border: 1px black solid;
                padding: 15px;
            }
            tbody{
                display: contents;
            }
            .formulario{
                width: 100%;
                margin-bottom: 15px;
                border-collapse: collapse;
            }
            .entradadatos{
                -webkit-padding-start: .5rem;
                -webkit-padding-end: .5rem;
                background: none;
                border: 1px solid black;
                border-radius: 4px;
                color: #111;
                color: rgb(var(--colour-text-and-icon-1,17,17,17));
                font-size: 1rem;
                height: 2rem;
                outline: none;
                overflow: hidden;
                padding: 0;
                padding-inline-end: .5rem;
                padding-inline-start: .5rem;
            }
        </style>
    </head>
    <body>
        <p>Mantenimiento Departamentos</p>
        <div class="codigophp">
            <form name="ejercicio21" class="formVolver" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" id="volver" name="volver" value="Volver">
            </form>
            <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table class="formulario">
                    <tr>
                        <td>
                            <label for="descripcion">Descripción:</label>
                            <input type="text" name="descripcion" id="descripcion" class="entradadatos" value = "<?php echo $_SESSION['criterioBusquedaDepartamento'] ?? '' ?>" placeholder="Descripción del departamento"/>
                            <input type="submit" id="buscar" value="Buscar" name="buscar">
                        </td>
                    </tr>
<!--                    <tr>
                        <td>
                            <label>Estado:</label>
                            <label for="alta">Todos</label>
                            <input type="radio" id="estado" name="estado" value="todos" checked>
                            <label for="alta">Alta</label>
                            <input type="radio" id="estado" name="estado" value="alta">
                            <label for="baja">Baja</label>
                            <input type="radio" id="estado" name="estado" value="baja">
                        </td>
                    </tr>-->
                </table>
            </form>
            <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table class="tablaMostrar">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Fecha Creación</th>
                            <th>Volumen de negocio</th>
                            <th>Fecha Baja</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($aVMtoDepartamentos) {
                            foreach ($aVMtoDepartamentos as $departamentoEnCurso) {
                                ?>
                                <tr>
                                    <td><?php echo $departamentoEnCurso['codDepartamento']; ?></td>
                                    <td><?php echo $departamentoEnCurso['descDepartamento']; ?></td>
                                    <td><?php echo $departamentoEnCurso['fechaCreacionDepartamento']; ?></td>
                                    <td><?php echo $departamentoEnCurso['volumenDeNegocio']; ?></td>
                                    <td><?php echo $departamentoEnCurso['fechaBajaDepartamento']; ?></td>
                                    <td><button type="submit" value="<?php echo $departamentoEnCurso['codDepartamento']; ?>" name="editar">Editar</button></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </body>
</html>