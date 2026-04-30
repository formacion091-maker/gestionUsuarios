<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head><title>Crear Usuario</title></head>
<body>
    <h2>Nuevo Usuario</h2>
    <form method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Cédula: <input type="text" name="cedula" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, cedula, telefono) VALUES ('$nombre','$cedula','$telefono')";
    if($conn->query($sql)){
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>