<?php
session_start();

include 'conexion_be.php';

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor inicia sesión primero.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$email = $_SESSION['usuario'];
$comentario = $_POST['comentario'];

// Obtener ID del usuario
$stmt = $conexion->prepare("SELECT id, nombre FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($usuario_id, $usuario_name);
$stmt->fetch();
$stmt->close();

if ($usuario_id === null) {
    echo '
        <script>
            alert("Usuario no encontrado.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Insertar comentario
$query = "INSERT INTO comentario(id_usuario, comentario, nombre_usuario) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($query);
$stmt->bind_param("iss", $usuario_id, $comentario, $usuario_name);
$ejecutar = $stmt->execute();
$stmt->close();
$conexion->close();

if ($ejecutar) {
    echo '
        <script>
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("No se pudo comentar");
            window.location = "../index.php";
        </script>
    ';
}
?>
