<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ... resto de tu código
$host = "localhost";
$user = "admin"; // Tu usuario de MariaDB
$pass = "12345";     // Tu contraseña
$db   = "hardware_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>