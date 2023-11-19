<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - Jonijo Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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

        
        .hidden {
            opacity: 0;
        }
        
        .console-container {
            font-family: Khula;
            font-size: 4em;
            text-align: center;
            height: 200px;
            width: 600px;
            display: block;
            position: absolute;
            color: white;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
        
        .console-underscore {
            display: inline-block;
            position: relative;
            top: -0.14em;
            left: 10px;
        }
    
    </style>
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Logo y título a la izquierda -->
            <a class="navbar-brand" href="#">JONIJO ADMIN</a>

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
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav">
                        <a class="nav-link" href="agregar_productos.php"> Agregar Productos</a>
                    </li>
                    <li class="nav">
                        <a class="nav-link" href="index.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class='console-container'>
        <span id='text'></span>
        <div class='console-underscore' id='console'>&#95;</div>
    </div>

    <!-- Bootstrap JS, asegúrate de incluirlo al final del body para mejor rendimiento -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript
        function consoleText(words, id, colors) {
            if (colors === undefined) colors = ['#fff'];
            var visible = true;
            var con = document.getElementById('console');
            var letterCount = 1;
            var x = 1;
            var waiting = false;
            var target = document.getElementById(id)
            target.setAttribute('style', 'color:' + colors[0])
            window.setInterval(function() {
                if (letterCount === 0 && waiting === false) {
                    waiting = true;
                    target.innerHTML = words[0].substring(0, letterCount)
                    window.setTimeout(function() {
                        var usedColor = colors.shift();
                        colors.push(usedColor);
                        var usedWord = words.shift();
                        words.push(usedWord);
                        x = 1;
                        target.setAttribute('style', 'color:' + colors[0])
                        letterCount += x;
                        waiting = false;
                    }, 1000)
                } else if (letterCount === words[0].length + 1 && waiting === false) {
                    waiting = true;
                    window.setTimeout(function() {
                        x = -1;
                        letterCount += x;
                        waiting = false;
                    }, 1000)
                } else if (waiting === false) {
                    target.innerHTML = words[0].substring(0, letterCount)
                    letterCount += x;
                }
            }, 120)
            window.setInterval(function() {
                if (visible === true) {
                    con.className = 'console-underscore hidden'
                    visible = false;

                } else {
                    con.className = 'console-underscore'

                    visible = true;
                }
            }, 400)
        }

        // Llamada a la función consoleText con los parámetros
        consoleText(['JONIJO MENU ADMIN', '110001110', 'JONIJO MENU ADMIN'], 'text', ['tomato', 'rebeccapurple', 'lightblue']);
    </script>
</body>

</html>