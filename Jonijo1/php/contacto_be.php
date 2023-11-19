<?php
    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $query = "INSERT INTO contacto(nombre, correo, telefono, mensaje) VALUES('$nombre', '$correo', '$telefono', '$mensaje')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Información de contacto registrada exitosamente");
            window.location= "../inicio.php";
        </script>    
        ';
    } else {
        echo '
            <script>
                alert("Error al registrar la información de contacto");
                window.location= "../inicio.php";
            </script>    
        ';
    }

    mysqli_close($conexion);
?>