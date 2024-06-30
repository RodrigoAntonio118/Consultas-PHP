<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clientes</title>
    <link rel="stylesheet" href="style.css">

    <style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh; /* Ajusta esta altura según sea necesario */
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lista de Consultas SQL
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="consultas/1.php">1 Numero de personas que viajaron por cada estado</a></li>
                            <li><a class="dropdown-item" href="consultas/2.php">2 Numero de personas que viajaron por cada estado, por cada ano</a></li>
                            <li><a class="dropdown-item" href="consultas/3.php">3 Numero de personas que viajaron de cada combinacion municipios, estados</a></li>
                            <li><a class="dropdown-item" href="consultas/4.php">4 Numero de vuelos por cada año</a></li>
                            <li><a class="dropdown-item" href="consultas/5.php">5 Numero de vuelos por cada mes / año</a></li>
                            <li><a class="dropdown-item" href="consultas/6.php">6 Numero de personas que viajaron de acuerdo a su categoria: Niños hasta 12 años, adolescentes de 13 a 17 años, jovenes de 18 a 30 años, adultos de 30 a 59 años y adultos mayores de 60 en adelante.</a></li>
                            <li><a class="dropdown-item" href="consultas/7.php">7 Numero de vuelos por cada aeropuerto de salida en cada año, del aeropuerto se desea saber la clave internacional del aeropuerto y la clave internacional del pais al que pertenece el aeropuerto</a></li>
                            <li><a class="dropdown-item" href="consultas/8.php">8 Numero de vuelos por aerolinea (detalle_vuelos)</a></li>
                            <li><a class="dropdown-item" href="consultas/9.php">9 Numero de vuelos realizados por aerolinea, por cada año.</a></li>
                            <li><a class="dropdown-item" href="consultas/10.php">10 Numero de personas que viajan por cada estado, muestre los 10 estados de los que mas personas viajan.</a></li>
                            <li><a class="dropdown-item" href="consultas/11.php">11 Numero de personas que viajan por cada año</a></li>
                            <li><a class="dropdown-item" href="consultas/12.php">12 Nombre, ciudad y pais de los 10 aeropuertos de los que mas personas parten hacia algun destino.</a></li>
                            <li><a class="dropdown-item" href="consultas/13.php">13 Numero de personas que viajan por cada mes.</a></li>
                            <li><a class="dropdown-item" href="consultas/14.php">14 Nombre de los 10 municipios de los que mas personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="consultas/15.php">15 Nombre de los 10 municipios de los que menos personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="consultas/16.php">16 Nombre del o los aeropuertos de los que menos personas parten. Muestro la ciudad y el pais al que pertenece.</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>

    <h1>Gestor de consultas SQL Server</h1>
    <div class="center">
    <img src="img/sql1.png" alt="SQL Image">
    </div>


</body>
</html>
