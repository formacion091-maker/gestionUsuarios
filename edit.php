<?php include("db.php"); ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><title>Editar Usuario</title></head>
<body>
    <h2>Editar Usuario</h2>
    <form method="POST">
        Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        Cédula: <input type="text" name="cedula" value="<?php echo $row['cedula']; ?>" required><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', cedula='$cedula', telefono='$telefono' WHERE id=$id";
    if($conn->query($sql)){
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>