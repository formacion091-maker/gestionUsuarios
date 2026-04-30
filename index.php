<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
</head><!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
  <!DOCTYPE html>
<html>
<head>
    <title>Gestión de Usuarios</title>
    <style>
        body {
            /* Aquí defines la imagen de fondo */
            background-image: url("carro.jpg"); /* Cambia 'carro.jpg' por la imagen que quieras */
            background-size: cover;   /* La imagen cubre toda la pantalla */
            background-position: center; /* Centrada */
            background-attachment: fixed; /* Se mantiene fija al hacer scroll */
            font-family: Arial, sans-serif;
            color: #fff; /* Texto blanco para que contraste */
        }
        h2, h3 {
            background-color: rgba(0,0,0,0.6); /* Fondo semitransparente */
            padding: 10px;
            border-radius: 5px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: rgba(255,255,255,0.8); /* Fondo blanco semitransparente */
            color: #000;
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
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 12px;
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
    <h2>Gestión de Usuarios</h2>
    <!-- Aquí va tu contenido PHP -->
</body>
</html>
        
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