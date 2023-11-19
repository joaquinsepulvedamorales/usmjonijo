
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Inicio - Jonijo</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .custom-marquee {
        position: relative;
        top: 50px; 
      }
  
      .custom-marquee p {
        white-space: nowrap; 
      }
      header {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

      .navbar {
            background-color: #343a40;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: black; /* Texto negro */
            margin-right: 15px;
            position: relative;
            text-decoration: none;
            font-size: 20px;
        }

        .nav-link:hover {
            color: #3DA35D; /* Color verde */
        }

        .nav-link::before,
        .nav-link::after {
            content: '';
            height: 14px;
            width: 14px;
            position: absolute;
            transition: all .35s ease;
            opacity: 0;
        }

        .nav-link::before {
            right: 0;
            top: 0;
            border-top: 3px solid #3E8914;
            border-right: 3px solid #2E640F;
            transform: translate(-100%, 50%);
        }

        .nav-link::after {
            left: 0;
            bottom: 0;
            border-bottom: 3px solid #2E640F;
            border-left: 3px solid #3E8914;
            transform: translate(100%, -50%);
        }

        .nav-link:hover:before,
        .nav-link:hover:after{
            transform: translate(0,0);
            opacity: 1;
        }


      .footer {
        background-color: #343a40;
        color: white;
        padding: 20px 0;
        width: 100%;
        margin-top: 50px;
      }

      .newsletter-form {
        max-width: 400px;
        margin: 0 auto;
      }

      .form-control,
      .btn {
        margin-top: 10px;
      }

      .footer h3 {
        margin-bottom: 0; 
      }

      .offer-card {
        margin-top: 20px;
      }

      /* Nuevos estilos para la sección de productos */
      .product-section {
        margin-top: 50px;
      }

      .product-card {
        margin-bottom: 20px;
      }

      .product-card img {
        max-width: 100%;
        height: auto;
      }

      .product-card h5 {
        margin-top: 10px;
      }
      

      /* Estilos para la sección "Próximamente" */
      .coming-soon {
        background-color: #f8f9fa;
        padding: 50px 0;
      }

      .coming-soon h2 {
        text-align: center;
        margin-bottom: 30px;
      }

      .coming-soon ul {
        list-style: none;
        padding: 0;
      }

      .coming-soon ul li {
        font-size: 18px;
        margin-bottom: 10px;
      }

      .newsletter-section {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
      }

      .newsletter-section input {
        width: 70%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
      }

      .newsletter-section button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #ffffff;
      }

      /* Estilos para la nueva sección de información */
      .about-section {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: justify;
      }

      .objectives-section {
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
      }

      .objectives-section h2 {
        margin-bottom: 30px;
      }

      .objectives-list {
        list-style: none;
        padding: 0;
      }

      .objectives-list li {
        font-size: 18px;
        margin-bottom: 10px;
      }
    </style>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio.html">
                    <img src="img/icono.png" alt="Icono" height="50">
                    Jonijo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#categoriasDropdown"
                                aria-expanded="false" aria-controls="categoriasDropdown">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carro.php">Carrito</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
  <main>
    
   <marquee class="custom-marquee" behavior="scroll" direction="left" scrollamount="10">
    <h2 style="font-size: 42px; color: #333; margin-bottom: 60px;">Bienvenido a Jonijo, tu botillería de confianza en Concepción. Descubre las mejores ofertas en bebidas alcohólicas.</h2>
</marquee>

<!-- Nueva sección de información con imagen -->
<div class="container about-section text-center">
    <div class="row">
        <div class="col-md-12">
            <p>Gracias a la preferencia de todos sus clientes, ya con el nombre JONIJO instaurado, se hizo inminente la apertura de otra sucursal, consolidando a la empresa como líder del rubro en la región. Luego de otros tantos años, con el crecimiento orgánico de la ciudad, también se vio en la necesidad de crecer, esta vez descentralizándose y abriendo dos nuevas sucursales con más espacio y estacionamientos; una en dirección norte de Concepción, salida hacia la comuna de Penco y la otra en la comuna de San Pedro de la Paz.</p>
            <div class="col-md-12">
            <!-- Agregar la imagen centrada -->
            <img src="img/foto1.jpg" alt="Descripción de la imagen" style="max-width: 100%; height: auto; margin-top: 20px; display: block; margin-left: auto; margin-right: auto;">
        </div>
            <p>Y es tan sólo hasta el año 2012, a raíz de la gran cantidad de ex-clientes que se encontraban viviendo en Santiago y manifestaban su nostalgia, que se decidió abrir una quinta sucursal en la capital, motivo que dio origen al actual KAMADI existente en la comuna de Vitacura. Donde hasta el día de hoy ha tenido una excelente recepción tanto por antiguos clientes penquistas, como por nuevos ganados día a día a través de precios competentes y una gran gama de productos, desde los más populares hasta los más exclusivos disponibles en el mercado nacional.</p>
        </div>
        <div class="col-md-12">
            <!-- Agregar la imagen centrada -->
            <img src="img/foto2.jpg" alt="Descripción de la imagen" style="max-width: 100%; height: auto; margin-top: 20px; display: block; margin-left: auto; margin-right: auto;">
        </div>
    </div>
</div>
<!-- Sección "Nuestros Objetivos" con imágenes y texto -->
<div class="container objectives-section">
    <h2>Nuestros Objetivos</h2>
    <div class="row">
        <!-- Objetivo 1 -->
        <div class="col-md-4">
            <img src="img/imagen3.jpg" alt="Imagen Objetivo 1" class="img-fluid">
            <p>Ser líderes en el mercado</p>
        </div>
        <!-- Objetivo 2 -->
        <div class="col-md-4">
            <img src="img/imagen4.jpg" alt="Imagen Objetivo 2" class="img-fluid">
            <p>Ofrecer la mejor atención</p>
        </div>
        <!-- Objetivo 3 -->
        <div class="col-md-4">
            <img src="img/imagen5.jpg" alt="Imagen Objetivo 3" class="img-fluid">
            <p>Tener a nuestros clientes contentos</p>
        </div>
    </div>
</div>

  <!-- Sección de productos -->
<div class="container product-section">
    <div class="row">
        <!-- Ofertas existentes -->
        <div class="col-md-3 product-card">
            <div class="card">
                <img src="../img/ofertainicio2.jpg" class="card-img-top" alt="Oferta 1">
                <div class="card-body">
                    <h5 class="card-title">PROMO 1 TEQUILA EL MERENDERO BLANCO 38G 1LT + 1 VODKA ERISTOFF 37.5º 1LT</h5>
                    <p class="card-text">$9.990</p>
                    <button class="btn btn-primary" onclick="agregarAlCarrito(this)">Añadir al carrito</button>

                </div>
            </div>
        </div>
     
        <!-- Productos adicionales -->
        <div class="col-md-3 product-card">
            <div class="card">
                <img src="../img/producto6.jpg" class="card-img-top" alt="Producto 5">
                <div class="card-body">
                    <h5 class="card-title">CERVEZA ARTESANAL IPA 500ML</h5>
                    <p class="card-text">$3.990</p>
                    <button class="btn btn-primary" onclick="agregarAlCarrito(this)">Añadir al carrito</button>

                </div>
            </div>
        </div>
        <div class="col-md-3 product-card">
            <div class="card">
                <img src="../img/producto7.jpg" class="card-img-top" alt="Producto 6">
                <div class="card-body">
                    <h5 class="card-title">WHISKY SINGLE MALT 12 AÑOS 750ML</h5>
                    <p class="card-text">$29.990</p>
                    <button class="btn btn-primary" onclick="agregarAlCarrito(this)">Añadir al carrito</button>

                </div>
            </div>
        </div>
        <div class="col-md-3 product-card">
            <div class="card">
                <img src="../img/producto8.jpg" class="card-img-top" alt="Producto 7">
                <div class="card-body">
                    <h5 class="card-title">RON AÑEJO 7 AÑOS 1L</h5>
                    <p class="card-text">$19.990</p>
                    <button class="btn btn-primary" onclick="agregarAlCarrito(this)">Añadir al carrito</button>
                </div>
            </div>     
        </div>
    <!-- Sección de pie de página -->
    <footer class="footer d-flex align-items-center">
    <div class="container text-center">
        <h3>Ingresa tu correo para recibir ofertas</h3>
        <form class="newsletter-form" action="php/correo_be.php" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="correo" placeholder="Correo electrónico"
                    aria-label="Correo electrónico" aria-describedby="button-addon2" required>
                <button class="btn btn-primary" type="submit" id="button-addon2">Suscribirse</button>
            </div>
        </form>
    </div>
</footer>

  <!-- Se añadió el script para guardar correo, añadir al carrito y mostrar categoría -->
<script>
    

</script>

  <!-- Scripts de Bootstrap y Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>