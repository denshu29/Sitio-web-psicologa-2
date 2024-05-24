<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios(nombre, email, password) 
    VALUES('$nombre', '$email', '$password')";

    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

    if(mysqli_num_rows($verificar_email) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado");
                window.location = "../login.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        if($ejecutar){
            echo '
                <script>
                    alert("Registro exitoso");
                    window.location = "../login.php";
                </script>
            ';
        }else{
            echo '
                <script>
                    alert("No se pudo registrar el usuario");
                    window.location = "../login.php";
                </script>
            ';
        }

        mysqli_close($conexion);
    }
 ?>