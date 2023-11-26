<?php
$servername = "localhost"; //Cambiar
$username = "root"; //Cambiar
$password = "196323nov"; //Cambiar
$dbname = "baseProyectoPrograWeb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM datos_personales ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre = $row["nombre"];
    $apellidos = $row["apellidos"];
    $sexo = $row["sexo"];
    $edad = $row["edad"];
    $telefono = $row["telefono"];
} else {
    $nombre = $apellidos = $sexo = $edad = $telefono = "No disponible";
}

// Verificar campos que faltan
$camposFaltantes = array();

if (empty($nombre)) {
    $camposFaltantes[] = "Nombre";
}

if (empty($apellidos)) {
    $camposFaltantes[] = "Apellidos";
}

if (empty($sexo)) {
    $camposFaltantes[] = "Sexo";
}

if (empty($edad)) {
    $camposFaltantes[] = "Edad";
}

if (empty($telefono)) {
    $camposFaltantes[] = "Teléfono";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Red+Hat+Display&family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
    <title>Información del Usuario</title>
</head>
<body>
    <h1>Información del Usuario</h1>

    <?php if (!empty($camposFaltantes)): ?>
        <p><strong>Faltan los siguientes campos:</strong></p>
        <ul>
            <?php foreach ($camposFaltantes as $campo): ?>
                <li><?php echo $campo; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <br>

    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Apellidos:</strong> <?php echo $apellidos; ?></p>
    <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
</body>
</html>