<?php
    include('db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Crear usuario</h1>
    <form action="create.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
        <br><br>
        
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required placeholder="Ingresa tu correo">
        <br><br>
        
        <label for="telefono">Teléfono</label><br>
        <input type="text" id="telefono" name="telefono" required placeholder="Ingresa tu teléfono" maxlength="15">
        <br><br>
        
        <button type="submit">Enviar registro</button>
    </form>
    <br>
    <a href="index.php">Volver a la lista</a>
</body>
</html>