<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
</head><!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
    <style>
        body {
            background-color: #f0f8ff; /* Color de fondo */
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2, h3 {
            color: #2c3e50;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #ffffff;
        }
        table th {
            background-color: #3498db;
            color: white;
            padding: 10px;
        }
        table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            margin: 5px 0;
            padding: 8px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        a {
            color: red;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Aquí va tu contenido PHP y HTML -->
</body>
</html>
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