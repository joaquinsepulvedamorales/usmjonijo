<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
    $validar_admin = mysqli_query($conexion, "SELECT * FROM admin WHERE correo='$correo' and contrasena='$contrasena'");
    $es_admin = mysqli_num_rows($validar_admin);

    if ($es_admin > 0) {
        header("Location: ../admin.php");
        exit;
    } else {

        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0 ){
        header("location: ../inicio.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verefoque los datos");
                window.location = "../index.php";
            </script>             
        ';
        exit;
    }
    }


?>