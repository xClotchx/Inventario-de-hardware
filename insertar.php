<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $estado = $_POST['estado']; // Recogemos el nuevo dato
    $stock = $_POST['stock'];

    $sql = "INSERT INTO componentes (nombre, categoria, estado, stock) 
            VALUES ('$nombre', '$categoria', '$estado', '$stock')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>