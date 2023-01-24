<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMA - App Login-Logoff</title>
        <link rel="icon" type="image/ico" sizes="32x32" href="webroot/favicon.ico">
        <link href="webroot/css/estilos.css" rel="stylesheet" type="text/css"/>
        <style>
            .volver {
                width: 33px;
                height: 33px;
                margin-top: 15px;
            }
            .formulario{
                border: none;
            }
            header{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            tbody {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .encabezado-layout {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="encabezado-layout">
                <h1>204DWESLoginLogoff</h1>
                <h2>Aplicacion multicapa y orientada a objetos</h2>
            </div>
            <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; ?>
        </header>
        <footer>
            <div><a href="../../204DWESProyectoDWES/indexProyectoDWES.php"><img style="padding: 0em 1em;" src="webroot/logo_propio.png" alt="logo" id="logo"></a></div>
            2022-23 Manuel Martín Alonso. ©Todos los derechos reservados.
            <a href="https://github.com/Manuel0119/204DWESLoginLogoff" target="_blank"><img src="webroot/github-logo.png" alt="github" id="g"></a>
            <a href="doc/CV - Manuel Martín Alonso.pdf" target="_blank"><img src="webroot/curriculum-logo.png" alt="curriculum" id="curricu"></a>
            <a href="../../204DWESProyectoDWES/indexProyectoDWES.php"><img src="webroot/volver.png" alt="volver" class="volver"/></a>
        </footer>
    </body>
</html>

