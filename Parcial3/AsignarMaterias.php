<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>ip
</head>
<body>
    <?php
    include 'menu.php';
    include 'conection.php';

        $sql_alumnos = "SELECT * FROM alumnos";
        $sql_alumnos = "SELECT * FROM materias";
        $datos_alumnos = $conexion->query($sql_alumno);
        $datos_materias = $conexion->query($sql_materias);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card pm-12">

            </div>
        </div>
    </div>
</body>
</html>