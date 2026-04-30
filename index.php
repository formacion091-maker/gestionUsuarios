<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
</head>
<body>
    <h2>Usuarios registrados</h2>
    <a href="create.php">➕ Crear nuevo usuario</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Nombre</th><th>Cédula</th><th>Teléfono</th><th>Acciones</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM usuarios");
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['cedula']}</td>
                    <td>{$row['telefono']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Editar</a> |
                        <a href='delete.php?id={$row['id']}'>Eliminar</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>