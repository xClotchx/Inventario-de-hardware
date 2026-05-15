<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario Hardware</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container">
        <h1>Inventario de Hardware</h1>

        <form action="insertar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre del componente" required>
            <select name="categoria">
                <option value="CPU">CPU</option>
                <option value="GPU">GPU</option>
                <option value="RAM">RAM</option>
                <option value="Storage">Almacenamiento</option>
                <option value="Motherboard">Placa Base</option>
                <option value="Other">Otros</option> </select>
            </select>
            <select name="estado">
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
                <option value="Dañado">Dañado</option>
            </select>
            <input type="number" name="stock" placeholder="Cant." min="0" value="0" style="width: 70px;">
            <button class="botn" type="submit">Agregar</button>
        </form>

        <hr>

        <section class="search-section">
            <form action="index.php" method="GET" class="search-form">
                <input type="text" name="buscar_nombre" placeholder="Buscar por nombre..." value="<?php echo $_GET['buscar_nombre'] ?? ''; ?>">
                <select name="filtrar_categoria">
            <option value="">Todas las Categorías</option>
            <option value="CPU" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'CPU') ? 'selected' : ''; ?>>CPU</option>
            <option value="GPU" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'GPU') ? 'selected' : ''; ?>>GPU</option>
            <option value="RAM" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'RAM') ? 'selected' : ''; ?>>RAM</option>
            <option value="Storage" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'Storage') ? 'selected' : ''; ?>>Almacenamiento</option>
            <option value="Motherboard" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'Motherboard') ? 'selected' : ''; ?>>Placa Base</option>
            <option value="Other" <?php echo (($_GET['filtrar_categoria'] ?? '') == 'Other') ? 'selected' : ''; ?>>Otros</option>
        </select>
                <select name="filtrar_estado">
                    <option value="">Todos los estados</option>
                    <option value="Nuevo" <?php echo (($_GET['filtrar_estado'] ?? '') == 'Nuevo') ? 'selected' : ''; ?>>Nuevo</option>
                    <option value="Usado" <?php echo (($_GET['filtrar_estado'] ?? '') == 'Usado') ? 'selected' : ''; ?>>Usado</option>
                    <option value="Dañado" <?php echo (($_GET['filtrar_estado'] ?? '') == 'Dañado') ? 'selected' : ''; ?>>Dañado</option>
                </select>
                
                <button type="submit" class="btn-search">Filtrar</button>
                <a href="index.php" class="btn-clear">Limpiar</a>
            </form>
        </section>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Componente</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Stock</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Capturar datos de búsqueda
                    $nombre = $_GET['buscar_nombre'] ?? '';
                    
                    $estado = $_GET['filtrar_estado'] ?? '';
                    $categoria = $_GET['filtrar_categoria'] ?? '';
                    // Construir la consulta base
                    $sql = "SELECT * FROM componentes WHERE 1=1";

                    if (!empty($nombre)) {
                        $sql .= " AND nombre LIKE '%$nombre%'";
                    }
                    if (!empty($categoria)) {
                        $sql .= " AND categoria = '$categoria'";
                    }
                    if (!empty($estado)) {
                        $sql .= " AND estado = '$estado'";
                    }

                    $sql .= " ORDER BY id ASC";
                    $res = $conn->query($sql);

                    while($row = $res->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                    <td>
                        <span class="status status-<?php echo strtolower($row['estado']); ?>">
                            <?php echo $row['estado']; ?>
                        </span>
                    </td>
                    <td>
                        <?php 
                        $cantidad = $row['stock'];
                        $color = "#f8fafc"; // Blanco (por defecto para > 5)

                        if ($cantidad == 0) {
                            $color = "#ef4444"; // Rojo (si es 0)
                        } elseif ($cantidad >= 1 && $cantidad <= 5) {
                            $color = "#facc15"; // Amarillo (entre 1 y 5)
                        }
                    ?>
                    <strong style="color: <?php echo $color; ?>;">
                        <?php echo $cantidad; ?>
                    </strong>
                    </td>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id']; ?>" style="color: var(--accent); text-decoration: none; margin-right: 10px;">Editar</a>
                        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('¿Seguro que deseas eliminarlo?')">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>