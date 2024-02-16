<?php
    
    include("./inc/config.php");

    $expediente = $_POST["user"];

    $contrasena = $_POST["pswd"];

    if(!empty($expediente) || !empty($contrasena)){

    $query = "SELECT apellido1, apellido2, nombres FROM alumnos  WHERE expediente = $expediente AND contrasena = "  . "MD5(" . "'" . $contrasena . "'" . ");";

    }else{

    header("Location: index.php");

    }

    $connection = mysqli_connect($HOST, $USER, $PASSWORD, $NAMEBD) or die("No me conecté");

    $resultado = mysqli_query($connection, $query) or die("No me conecté");

    $fila = mysqli_fetch_assoc($resultado);

    if ($resultado -> num_rows == 1) {

        session_start();

        $_SESSION["validada"] = 1;

        $_SESSION["Nombre"] = $fila ["nombres"] ." ". $fila ["apellido1"] . " " . $fila ["apellido2"];

        header("Location:menu.php");

    }else{

        header("Location: index.php?error=100");

    }


    mysqli_close($connection);

