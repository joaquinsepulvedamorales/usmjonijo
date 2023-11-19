<?php
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    
    $query = "INSERT INTO correo(correo) VALUES('$correo')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Información de correo registrada exitosamente");
            window.location= "../inicio.php";
        </script>    
        ';
    } else {
        echo '
            <script>
                alert("Error al registrar la información de correo");
                window.location= "../inicio.php";
            </script>    
        ';
    }

    mysqli_close($conexion);
?>