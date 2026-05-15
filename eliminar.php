<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db.php';

// Verificamos si el ID existe en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparamos la consulta para borrar el registro
    // Usamos el ID único para no borrar nada más por error
    $sql = "DELETE FROM componentes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Si se elimina con éxito, regresamos al index.php
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    // Si alguien intenta entrar a eliminar.php sin un ID, lo mandamos al inicio
    header("Location: index.php");
    exit();
}
?>