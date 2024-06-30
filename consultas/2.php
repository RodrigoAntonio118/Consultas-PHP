<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js for graph rendering -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clientes</title>
    <link rel="stylesheet" href="style.css">
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Lista de Consultas SQL
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="1.php">1 Numero de personas que viajaron por cada estado</a></li>
                            <li><a class="dropdown-item" href="2.php">2 Numero de personas que viajaron por cada estado, por cada ano</a></li>
                            <li><a class="dropdown-item" href="3.php">3 Numero de personas que viajaron de cada combinacion municipios, estados</a></li>
                            <li><a class="dropdown-item" href="4.php">4 Numero de vuelos por cada año</a></li>
                            <li><a class="dropdown-item" href="5.php">5 Numero de vuelos por cada mes / año</a></li>
                            <li><a class="dropdown-item" href="6.php">6 Numero de personas que viajaron de acuerdo a su categoria: Niños hasta 12 años, adolescentes de 13 a 17 años, jovenes de 18 a 30 años, adultos de 30 a 59 años y adultos mayores de 60 en adelante.</a></li>
                            <li><a class="dropdown-item" href="7.php">7 Numero de vuelos por cada aeropuerto de salida en cada año, del aeropuerto se desea saber la clave internacional del aeropuerto y la clave internacional del pais al que pertenece el aeropuerto</a></li>
                            <li><a class="dropdown-item" href="8.php">8 Numero de vuelos por aerolinea (detalle_vuelos)</a></li>
                            <li><a class="dropdown-item" href="9.php">9 Numero de vuelos realizados por aerolinea, por cada año.</a></li>
                            <li><a class="dropdown-item" href="10.php">10 Numero de personas que viajan por cada estado, muestre los 10 estados de los que mas personas viajan.</a></li>
                            <li><a class="dropdown-item" href="11.php">11 Numero de personas que viajan por cada año</a></li>
                            <li><a class="dropdown-item" href="12.php">12 Nombre, ciudad y pais de los 10 aeropuertos de los que mas personas parten hacia algun destino.</a></li>
                            <li><a class="dropdown-item" href="13.php">13 Numero de personas que viajan por cada mes.</a></li>
                            <li><a class="dropdown-item" href="14.php">14 Nombre de los 10 municipios de los que mas personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="15.php">15 Nombre de los 10 municipios de los que menos personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="16.php">16 Nombre del o los aeropuertos de los que menos personas parten. Muestro la ciudad y el pais al que pertenece.</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                            <li><a class="dropdown-item" href="1.php">1 Numero de personas que viajaron por cada estado</a></li>
                            <li><a class="dropdown-item" href="2.php">2 Numero de personas que viajaron por cada estado, por cada ano</a></li>
                            <li><a class="dropdown-item" href="3.php">3 Numero de personas que viajaron de cada combinacion municipios, estados</a></li>
                            <li><a class="dropdown-item" href="4.php">4 Numero de vuelos por cada año</a></li>
                            <li><a class="dropdown-item" href="5.php">5 Numero de vuelos por cada mes / año</a></li>
                            <li><a class="dropdown-item" href="6.php">6 Numero de personas que viajaron de acuerdo a su categoria: Niños hasta 12 años, adolescentes de 13 a 17 años, jovenes de 18 a 30 años, adultos de 30 a 59 años y adultos mayores de 60 en adelante.</a></li>
                            <li><a class="dropdown-item" href="7.php">7 Numero de vuelos por cada aeropuerto de salida en cada año, del aeropuerto se desea saber la clave internacional del aeropuerto y la clave internacional del pais al que pertenece el aeropuerto</a></li>
                            <li><a class="dropdown-item" href="8.php">8 Numero de vuelos por aerolinea (detalle_vuelos)</a></li>
                            <li><a class="dropdown-item" href="9.php">9 Numero de vuelos realizados por aerolinea, por cada año.</a></li>
                            <li><a class="dropdown-item" href="10.php">10 Numero de personas que viajan por cada estado, muestre los 10 estados de los que mas personas viajan.</a></li>
                            <li><a class="dropdown-item" href="11.php">11 Numero de personas que viajan por cada año</a></li>
                            <li><a class="dropdown-item" href="12.php">12 Nombre, ciudad y pais de los 10 aeropuertos de los que mas personas parten hacia algun destino.</a></li>
                            <li><a class="dropdown-item" href="13.php">13 Numero de personas que viajan por cada mes.</a></li>
                            <li><a class="dropdown-item" href="14.php">14 Nombre de los 10 municipios de los que mas personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="15.php">15 Nombre de los 10 municipios de los que menos personas viajan, agregue el nombre del estado.</a></li>
                            <li><a class="dropdown-item" href="16.php">16 Nombre del o los aeropuertos de los que menos personas parten. Muestro la ciudad y el pais al que pertenece.</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <h1>Consultas de SQL server</h1>

    <h5 class="text-center">Numero de personas que viajaron por cada estado, por cada año.</h5>

    <div class="text-center mb-3"> <!-- Centrar contenido horizontalmente y agregar margen inferior -->
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Graficar</button>
    </div>
    


    <?php
    include 'db.php';

    $sql = "SELECT
    e.nombre AS estado,
    YEAR(dv.fecha_hora_salida) AS año,
    COUNT(DISTINCT c.cve_clientes) AS numero_personas
FROM
    detalle_vuelos dv
INNER JOIN
    vuelos v ON dv.cve_vuelos = v.cve_vuelos
INNER JOIN
    ocupaciones o ON dv.cve_detalles_vuelos = o.cve_detalles_vuelos
INNER JOIN
    clientes c ON o.cve_clientes = c.cve_clientes
INNER JOIN
    estados e ON c.cve_estados = e.cve_estado
GROUP BY
    e.nombre, YEAR(dv.fecha_hora_salida)
ORDER BY
    e.nombre, YEAR(dv.fecha_hora_salida);";

    $resultados = ejecutarConsulta($sql);

    // Mostrar cantidad de datos solo si hay resultados
    if (!empty($resultados)) {
        echo "<p class='text-center'>Cantidad de datos: " . count($resultados) . "</p>";
    } else {
        echo "<p class='mt-2'>Cantidad de datos: 0</p>";
    }

    ?>
    

    <!-- Canvas para dibujar el gráfico -->
    <div class="container">
        <canvas id="myChart"></canvas>
    </div>

    <?php

    if (!empty($resultados)) {
        echo "<table class='table table-primary'>"; // Tabla con clase 'table-primary'
        echo "<thead>";
        echo "<tr>";
        
        // Imprimir encabezados de la tabla
        foreach (array_keys($resultados[0]) as $columna) {
            echo "<th>{$columna}</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Imprimir filas de resultados
        foreach ($resultados as $row) {
            echo "<tr>";
            foreach ($row as $valor) {
                echo "<td>{$valor}</td>";
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }
    ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Selecciona el tipo de gráfico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Botones para seleccionar tipo de gráfico -->
                <button type="button" class="btn btn-outline-primary" id="barraVertical">Barras Verticales</button>
                <button type="button" class="btn btn-outline-primary" id="barraHorizontal">Barras Horizontales</button>
                <button type="button" class="btn btn-outline-primary" id="pastel">Pastel</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para manejar la lógica de los gráficos -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = null; 

        // Función para generar gráfico según el tipo seleccionado
        function generarGrafico(tipo) {
                var data = <?php echo json_encode($resultados); ?>;
                var etiquetas = data.map(function (elemento) {
                    return elemento.estado + ' (' + elemento.año + ')';
                });
                var valores = data.map(function (elemento) {
                    return elemento.numero_personas;
                });

            

            if (chart) {
                chart.destroy();
            }

            
            if (tipo === 'barraVertical') {
                chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: etiquetas,
                        datasets: [{
                            label: 'Número de personas',
                            data: valores,
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else if (tipo === 'barraHorizontal') {
                chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: etiquetas,
                        datasets: [{
                            label: 'Número de personas',
                            data: valores,
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y', 
                        scales: {
                            x: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else if (tipo === 'pastel') {
                chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: etiquetas,
                        datasets: [{
                            label: 'Número de personas',
                            data: valores,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(75, 192, 192, 0.5)',
                                'rgba(153, 102, 255, 0.5)',
                                'rgba(255, 159, 64, 0.5)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            }
        }

        document.getElementById('barraVertical').addEventListener('click', function () {
            generarGrafico('barraVertical');
            $('#exampleModal').modal('hide'); 
        });

        document.getElementById('barraHorizontal').addEventListener('click', function () {
            generarGrafico('barraHorizontal');
            $('#exampleModal').modal('hide'); 
        });

        document.getElementById('pastel').addEventListener('click', function () {
            generarGrafico('pastel');
            $('#exampleModal').modal('hide'); 
        });
    });
</script>

</body>
</html>
