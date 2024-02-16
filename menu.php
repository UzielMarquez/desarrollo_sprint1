<?php


    session_start();

    $sesion = $_SESSION["validada"];

    if ($sesion != 1) {

        header("Location:index.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
</head>
<body>

    <h1>Holaaaa</h1> <?= $_SESSION["Nombre"]; ?> <br>

    <br>Materias

    <br>Cursos

    <br>Kardex

    <br>Calificaciones

    <b></b>Idiomas

    <br>Adeudos <br>

    <a href="logout.php">Salir</a>
    
</body>
</html>