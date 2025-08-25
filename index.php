<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo de nueva página para GOB.mx</title>


    <!-- CSS -->
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">

    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Contenido -->
    <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
                    <span class="sr-only">Interruptor de Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">CBTIS 191</a>
            </div>
            <div class="collapse navbar-collapse" id="subenlaces">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Institución <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Misión, visión y objetivos</a></li>
                            <li><a href="#">Historia</a></li>
                            <li><a href="#">Organigrama</a></li>
                            <li><a href="#">Instalaciones</a></li>
                            <li><a href="#">Directorio</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Noticias <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Avisos</a></li>
                            <li><a href="#">Convocatorias</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Aspirantes <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Oferta educativa</a></li>
                            <li><a href="#">Admisiones</a></li>
                            <li><a href="#">Info</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alumnos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Horarios</a></li>
                            <li><a href="#">Calendario escolar</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Docentes <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Portal de autoservicios</a></li>
                            <li><a href="#">SISEMS</a></li>
                            <li><a href="#">Normatividad</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li><a href="#">Acceso en línea</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <div class="carousel-item">
            <img src="cbtis191.jpg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>
        <div class="container">...</div>
        <?php

        echo "Hello World!";
        ?>
    </main>

    <!-- JS -->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>

</body>

</html>