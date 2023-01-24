<!DOCTYPE html>
<html lang="en">
    <!--
            Autor: Manuel Martín Alonso.
            Utilidad: Este programa consiste en construir una pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos
                      utilizando una consulta preparada.
            Fecha-última-revisión: 27-11-2022.
    -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ManuelMartínAlonso</title>
        <link rel="stylesheet" href="../webroot/css/estilos.css">
        <link rel="icon" type="image/ico" sizes="32x32" href="../webroot/favicon.ico">
    </head>

    <body>
        <div class="encabezado">
            <h2>
                Script de creacion en 1&1.
            </h2>
        </div>
        <div class="codigophp" style="margin: 3em;left: 0; position: initial">
            <?php
            require_once '../conf/confDB.php';
            try {
                //Establecimiento de la conexión 
                $miDB = new PDO(DSN, USER, PASSWORD);
                $insercion = $miDB->prepare(<<<SQL
                    insert into T01_Usuario(T01_CodUsuario,T01_Password,T01_DescUsuario,T01_FechaHoraUltimaConexion) values
                    ('heraclio',sha2(concat('heraclio','paso'),256),'Heraclio profesor',now()),
                    ('alberto',sha2(concat('alberto','paso'),256),'Alberto profesor',now()),
                    ('amor',sha2(concat('amor','paso'),256),'Amor profesor',now()),
                    ('antonio',sha2(concat('antonio','paso'),256),'Antonio profesor',now()),
                    ('carmen',sha2(concat('carmen','paso'),256),'Carmen profesor',now()),
                    ('ricardo',sha2(concat('ricardo','paso'),256),'Ricardo alumno',now()),
                    ('david',sha2(concat('david','paso'),256),'David alumno',now()),
                    ('luis',sha2(concat('luis','paso'),256),'Luis alumno',now()),
                    ('otalvaro',sha2(concat('otalvaro','paso'),256),'Alejandro alumno',now()),
                    ('josue',sha2(concat('josue','paso'),256),'Josue alumno',now()),
                    ('manuel',sha2(concat('manuel','paso'),256),'Manuel alumno',now()),
                    ('admin',sha2(concat('admin','paso'),256),'Administrador admin',now());
                SQL);
                $insercion->execute(); //Ejecuto la consulta
                if ($insercion) {
                    echo "<h3>Insercion ejecutada con exito</<h3>";
                    $resultadoDepartamentos = $miDB->query("select * from T02_Departamento");
                }
            } catch (PDOException $excepcion) { //Código que se ejecutará si se produce alguna excepción
                //Almacenamos el código del error de la excepción en la variable $errorExcepcion
                $errorExcep = $excepcion->getCode();
                //Almacenamos el mensaje de la excepción en la variable $mensajeExcep
                $mensajeExcep = $excepcion->getMessage();

                echo "<span style='color: red;'>Error: </span>" . $mensajeExcep . "<br>"; //Mostramos el mensaje de la excepción
                echo "<span style='color: red;'>Código del error: </span>" . $errorExcep; //Mostramos el código de la excepción
            } finally {
                // Cierre de la conexión.
                unset($mydb);
            }
            ?>
        </div>
        <a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img src="../webroot/volver.png" alt="volver" class="volver2" /></a>
        <footer>
            <div><a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img style="padding: 0em 1em;" src="../webroot/logo_propio.png" alt="logo" id="logo"></a></div>
            2022-23 Manuel Martín Alonso. ©Todos los derechos reservados.
            <a href="https://github.com/Manuel0119/204DWESLoginLogoffTema5" target="_blank"><img src="../webroot/github-logo.png" alt="github" id="g"></a>
            <a href="doc/CV - Manuel Martín Alonso.pdf" target="_blank"><img src="../webroot/curriculum-logo.png" alt="curriculum" id="curricu"></a>
            <a href="../204DWESProyectoDWES/indexProyectoDWES.php"><img src="../webroot/volver.png" alt="volver" class="volver"/></a>
        </footer>
    </body>

</html>