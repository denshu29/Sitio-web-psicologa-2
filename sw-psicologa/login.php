<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }else{
        session_destroy();
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/header.css">
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/login.css">
</head>
<body>
    <header>
        <h3>Centro Psicologico Puebla</h3>
        <h2 class="logo"><img src="img/logo_psicologo.png" alt="" style="width: 70px;"></h2>
        <input type="checkbox" id="nav_check" hidden>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="php/login_be.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input name="password" type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Recuerdame</label>
                    <a href="#">Olvidaste tu contraseña???</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>No tienes cuenta???
                    <a href="#" class="register-link">Registrate</a>
                    </p>
                </div>
            </form>
        </div>  

        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box register">
            <h2>Registrarse</h2>
            <form action="php/registro_usuario_be.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                    <input name="nombre" type="text" required>
                    <label>Nombre</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input name="email" type="text" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input name="password" type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    De acuerdo con  los Terminos y condiciones</label>
                </div>
                <button type="submit" class="btn">Registrarse</button>
                <div class="login-register">
                    <p>Ya tienes cuenta???
                    <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>  
    </div>

    
    <script src="javascript/login_script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>