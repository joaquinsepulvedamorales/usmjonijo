<!doctype html>
<html lang="en">

<head>
  <title>Agregar productos- JONIJO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web:400,600');

body {
  background: #212121;
  padding: 25px 0;
}

.nav {
  font-family: 'Titillium Web';
  text-transform: uppercase;
  text-align: center;
  font-weight: 600;
}

.nav * {
  box-sizing: border-box;
  transition: all .35s ease;
}

.nav li {
  display: inline-block;
  list-style: outside none none;
  margin: .5em 1em;
  paddin: 0;
}

.nav a {
  padding: .5em .8em;
  color: rgba(255,255,255,.5);
  position: relative;
  text-decoration: none;
  font-size: 20px;
}

.nav a::before,
.nav a::after {
  content: '';
  height: 14px;
  width: 14px;
  position: absolute;
  transition: all .35s ease;
  opacity: 0;
}

.nav a::before {
  content: '';
  right: 0;
  top: 0;
  border-top: 3px solid #3E8914;
  border-right: 3px solid #2E640F;
  transform: translate(-100%, 50%);
}

.nav a:after {
  content: '';
  left: 0;
  bottom: 0;
  border-bottom: 3px solid #2E640F;
  border-left: 3px solid #3E8914;
  transform: translate(100%, -50%)
}

.nav a:hover:before,
.nav a:hover:after{
  transform: translate(0,0);
  opacity: 1;
}

.nav a:hover {
  color: #3DA35D;
}
</style>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo y título a la izquierda -->
            <a class="navbar-brand" href="admin.php">JONIJO ADMIN</a>

            <!-- Botón colapsable en dispositivos pequeños -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Elementos del Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <!-- Ítems a la izquierda -->
                    <!-- Puedes agregar enlaces o funcionalidad aquí -->
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Ítems a la derecha -->
                    <li class="nav">
                        <a class="nav-link" href="#">Pedidos</a>
                    </li>
                    <li class="nav">
                        <a class="nav-link" href="agregar_productos.php">Productos</a>
                    </li>
                    <li class="nav">
                        <a class="nav-link" href="index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
  <div class="card">
    <div class="card-header">
      INGRESE LOS DATOS DEL PRODUCTO
    </div>
    <div class="card-body">
      <form action="php/agregar_be.php" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="nombre" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" required>
            
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">imagen</label>
            <input type="file" class="form-control" name="imagen" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="admin.php" class="btn btn-secondary">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


    
</body>



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>