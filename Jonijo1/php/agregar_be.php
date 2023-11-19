<?php
// Conexión a la base de datos
include 'conexion_be.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];


$imagen_nombre = $_FILES['imagen']['name'];
$imagen_temporal = $_FILES['imagen']['tmp_name'];
$ruta_imagen = "../imagenes/$imagen_nombre"; 

// Mover la imagen a la carpeta destino
move_uploaded_file($imagen_temporal, $ruta_imagen);

$query = "INSERT INTO productos (nombre, precio, stock, imagen) VALUES ('$nombre', '$precio', '$stock', '$ruta_imagen')";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    // Éxito al agregar el producto
    echo '
            <script>
                alert("producto registrado correctamente ");
                window.location = "../admin.php";
            </script>             
        ';
        exit;
} else {
    // Error al agregar el producto
    echo "Error al agregar el producto: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>