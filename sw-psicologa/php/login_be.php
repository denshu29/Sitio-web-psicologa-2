<?php

    session_start();

    include 'conexion_be.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and password='$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: ../index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, verifique correo o contraseña");
                window.location = "../login.php";
            </script>
            ';
        exit;
    }

        

 ?>