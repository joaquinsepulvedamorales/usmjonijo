<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <style>
        /* Estilos para las tarjetas */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Listado de Productos</h2>
    
    <div class="container">
        <?php
        include 'php/conexion_be.php';
        
        $query = "SELECT nombre, precio, imagen, stock FROM productos";
        $result = mysqli_query($conexion, $query);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Mostrar cada producto en una tarjeta
                echo "<div class='card'>";
                echo "<img src='imagenes/" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
                echo "<h3>" . $row['nombre'] . "</h3>";
                echo "<p>Stock: " . $row['stock'] . "</p>";
                echo "<p>Precio: $" . $row['precio'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles.";
        }
        
        mysqli_close($conexion);
        ?>
    </div>
</body>
</html>