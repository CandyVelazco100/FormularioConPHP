<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];

    $servername = "localhost"; // Cambiar 
    $username = "root"; // Cambiar
    $password = "196323nov"; // Cambiar
    $dbname = "baseProyectoPrograWeb"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "INSERT INTO datos_personales (nombre, apellidos, sexo, edad, telefono)
            VALUES ('$nombre', '$apellidos', '$sexo', '$edad', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        header("Location: show_data.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?><?php
$servername = "localhost"; //Cambiar
$username = "root"; //Cambiar
$password = "196323nov"; //Cambiar
$dbname = "baseProyectoPrograWeb"; //Cambiar

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

$conn->close();
?>