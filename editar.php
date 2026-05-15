<?php
include 'db.php';

// 1. Obtener los datos actuales del componente
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM componentes WHERE id = $id";
    $res = $conn->query($sql);
    $item = $res->fetch_assoc();
}

// 2. Procesar la actualización cuando se presiona "Guardar"
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $estado = $_POST['estado'];
    $stock = $_POST['stock'];

    $sql_update = "UPDATE componentes SET 
                   nombre='$nombre', 
                   categoria='$categoria', 
                   estado='$estado', 
                   stock=$stock 
                   WHERE id=$id";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error actualizando: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Componente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Componente</h1>
        <form action="editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
            
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $item['nombre']; ?>" required>
            
            <label>Categoría:</label>
            <select name="categoria">
                <?php 
                $opciones = ['CPU', 'GPU', 'RAM', 'Storage', 'Motherboard', 'Other'];
                foreach($opciones as $opc) {
                    $selected = ($item['categoria'] == $opc) ? 'selected' : '';
                    echo "<option value='$opc' $selected>$opc</option>";
                }
                ?>
            </select>

            <label>Estado:</label>
            <select name="estado">
                <option value="Nuevo" <?php if($item['estado'] == 'Nuevo') echo 'selected'; ?>>Nuevo</option>
                <option value="Usado" <?php if($item['estado'] == 'Usado') echo 'selected'; ?>>Usado</option>
                <option value="Dañado" <?php if($item['estado'] == 'Dañado') echo 'selected'; ?>>Dañado</option>
            </select>

            <label>Stock:</label>
            <input type="number" name="stock" value="<?php echo $item['stock']; ?>" min="0">

            <button type="submit" class="botn">Guardar Cambios</button>
            <a href="index.php" style="color: var(--text-secondary); margin-left: 10px;">Cancelar</a>
        </form>
    </div>
</body>
</html>