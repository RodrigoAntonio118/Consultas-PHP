<?php

// Datos de conexión
$server = 'RodrigoAntonio';
$database = 'airbus380_acad';

// Función para conectar a la base de datos
function conectar() {
    global $server, $database;
    try {
        $conn = new PDO("sqlsrv:Server=$server;Database=$database;ConnectionPooling=0", "", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

// Función para ejecutar consultas SQL
function ejecutarConsulta($sql) {
    $conn = conectar();
    try {
        $stmt = $conn->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null; // Cerrar conexión
        return $rows;
    } catch (PDOException $e) {
        die("Error al ejecutar consulta: " . $e->getMessage());
    }
}

?>
