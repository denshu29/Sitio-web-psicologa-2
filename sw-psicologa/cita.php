<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para poder agendar tu cita");
                window.location = "index.php";  
            </script>    
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/cita.css">
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/header.css">
</head>

<body>

    <header>
        <h3>Centro Psicologico Puebla</h3>
        <h2 class="logo"><img src="img/logo_psicologo.png" alt="" style="width: 70px;"></h2>
        <input type="checkbox" id="nav_check" hidden>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="#card">Blogs</a>
            <a id="iniciar-sesion" href="login.php">Login</a>
            <a id="cerrar-sesion" href="php/cerrar_sesion_be.php">Cerrar sesión</a>
        </nav>
        <label for="nav_check" class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </label>

    </header>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="video-container">
                <div class="video-placeholder">
                    <video src="https://youtu.be/qeqn1d9rplk?si=jDP3K3jqb-M5NvLL" controls=""></video>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="form-container">
                <h2>Agendar Cita</h2>
                <form action="php/agendar_cita_be.php" method="POST">
                    <div class="form-group">
                        <label for="phone">Teléfono:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Fecha y hora:</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="reason">Razón de la consulta:</label>
                        <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>