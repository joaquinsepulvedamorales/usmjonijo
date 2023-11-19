<!DOCTYPE html>
<html lang="es">

<?php
include 'php/conexion_be.php';
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de compra</title>
  <style>
    /* Estilos para las tarjetas de productos */
    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Ajuste de la cuadrícula */
        gap: 20px;
        justify-content: center;
    }

    .blog-post {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
        width: 180px; /* Ancho de la tarjeta */
        height: 270px; /* Altura de la tarjeta */
    }

    .blog-post img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }

    .blog-post .category {
        position: absolute;
        top: 10px;
        left: 10px;
        color: #ffffff;
        background-color: #0F6BB7;
        padding: 5px 10px;
        font-size: 18px;
    }

    .blog-post .text-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        text-align: center;
    }

    .blog-post .card-title {
        color: #ffffff;
        margin-bottom: 10px;
        text-align: center; /* Centrar el título */
    }

    .blog-post .btn-primary {
        background-color: #0F6BB7;
        border-color: #0F6BB7;
    }

    .blog-post:hover img {
        transform: scale(1.1);
    }

    .container {
        text-align: center; /* Centrar contenido */
        max-width: 1200px;
        margin: 0 auto;
    }

    .center-title {
        font-weight: bold;
        color: #0F6BB7;
        font-size: 22px;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        justify-content: center;
    }

    .card-title {
        margin-bottom: 20px;
    }
  </style>
  
</head>
<?php
        $busqueda = mysqli_query($conexion, "SELECT * FROM productos ");
        $numero = mysqli_num_rows($busqueda);
        ?>
<body>
<div class="container">
    <div class="center mt-5">
        <div class="card pt-3">
            <p class="center-title">Carrito de compra</p>
            <h5 class="card-title">Resultados (<?php echo $numero; ?>)</h5>
            <div class="card-container">

                <?php
                while ($resultado = mysqli_fetch_assoc($busqueda)) {
                ?>

                    <form id="formulario" name="formulario" method="post" action="cart.php">

                        <div class="blog-post">
                            <img src="imagenes/<?php echo $resultado["imagen"]; ?>" >
                            <a class="category"><?php echo $resultado["precio"]; ?>€</a>
                            <div class="text-content">
                                <input name="precio" type="hidden" id="precio" value="<?php echo $resultado["precio"]; ?>" />
                                <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $resultado["nombre"]; ?></h5>
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                                </div>
                            </div>
                        </div>

                    </form>

                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
