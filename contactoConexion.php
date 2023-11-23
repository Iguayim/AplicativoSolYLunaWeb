<?php
//Conexion a base de datos del formulario contactanos de la pagina web


// Verifica si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuración de la conexión a la base de datos
    $servername = "Localhost:3306";
    $username = "root";
    $password = "Rzo22ca+-#.";
    $dbname = "hotel_sol_y_luna";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recuperar datos del formulario
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO contactanos (name, phone, email, mensaje) VALUES ('$name', '$phone', '$email', '$message')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
