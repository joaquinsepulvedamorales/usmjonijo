<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contacto - Jonijo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        main {
            padding: 50px 0;
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

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white; /* Fondo blanco */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            color: black; /* Texto negro */
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #007bff;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .contact-number,
        .contact-email,
        .contact-location,
        .info-box {
            background-color: #007bff; /* Fondo azul */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            color: white;
        }

        .contact-number img,
        .contact-email img,
        .contact-location img,
        .info-box img {
            width: 50px;
            border-radius: 10px;
            background-color: #007bff; /* Fondo azul */
            margin-top: 10px;
        }

        .social-icons {
            margin-top: 20px;
            text-align: center;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }

        .newsletter-section {
            text-align: center;
            margin-top: 50px;
        }

        .newsletter-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white; /* Fondo blanco */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .newsletter-form input {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .newsletter-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .newsletter-form button:hover {
            background-color: #0056b3;
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
        <h1>Contacto - Jonijo</h1>
    </header>

    <main>
        <div class="container contact-form">
            <form action="php/contacto_be.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre (*)</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Email (*)</label>
                    <input type="email" id="email" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono (*)</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="4"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="container">
            <!-- Cuadro de contacto - Ubicación -->
            <div class="row">
                <div class="col-md-3">
                    <div class="info-box contact-location text-center">
                        <img src="img/ubacion.jpg" alt="Ubicación" class="img-fluid rounded-circle">
                        <p class="mt-3">Ubicación:</p>
                        <p>Dirección de Jonijo</p>
                    </div>
                </div>
                <!-- Cuadro de contacto - Teléfono -->
                <div class="col-md-3">
                    <div class="info-box contact-number text-center">
                        <img src="img/telefono.jpg" alt="Teléfono" class="img-fluid rounded-circle">
                        <p class="mt-3">Teléfono:</p>
                        <p>+123 456 789</p>
                    </div>
                </div>
                <!-- Cuadro de contacto - Email -->
                <div class="col-md-3">
                    <div class="info-box contact-email text-center">
                        <img src="img/email.jpg" alt="Email" class="img-fluid rounded-circle">
                        <p class="mt-3">Email:</p>
                        <p>info@jonijo.com</p>
                    </div>
                </div>
                <!-- Cuadro de contacto - Redes Sociales -->
                <div class="col-md-3">
                    <div class="info-box text-center">
                        <p class="mt-3">Síguenos en redes sociales:</p>
                        <img src="img/facebook.jpg" alt="Facebook" class="img-fluid rounded-circle">
                        <img src="img/twitter.jpg" alt="Twitter" class="img-fluid rounded-circle">
                        <img src="img/instagram.jpg" alt="Instagram" class="img-fluid rounded-circle">
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de suscripción al newsletter -->
        <div class="container newsletter-section">
            <div class="newsletter-form">
                <p>¿Quieres recibir ofertas y novedades en tu email?</p>
                <div class="d-flex">
                    <input type="email" placeholder="Ingresa tu e-mail">
                    <button type="submit">Inscribir</button>
                </div>
                <p>Sé el primero en conocer nuestras ofertas, nuestros productos y horarios especiales.</p>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-GLhlTQ8iKt6v56c7n7W3Gq8bFgt9SMErC1dHwBOep5Z7E4E5t6ZZewlY6REHMO9H"
        crossorigin="anonymous"></script>
</body>

</html>
