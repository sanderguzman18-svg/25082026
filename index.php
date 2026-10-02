<?php
    include('db.php');
    $consulta = "SELECT * FROM usuarios";
    $result = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="create.php">Agregar usuarios</a>
    <br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</a>
                        </td>
                    </tr>
            <?php 
                } 
            } else { ?>
                <tr>
                    <td colspan="5">No hay usuarios registrados.</td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>