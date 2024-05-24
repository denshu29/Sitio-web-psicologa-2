<?php
    session_start();

    include 'conexion_be.php';

    $email = $_SESSION['usuario'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $razon = $_POST['reason'];
    $usuario = mysqli_query($conexion, "SELECT id FROM usuarios WHERE email='$email' ");
    $usuario_id = (int)$usuario;
    
    $query = "INSERT INTO citas(id_usuario, date, phone, Razon_consulta)
    VALUES('$usuario_id', '$date', '$phone', '$razon')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        if($ejecutar){
            echo '
                <script>
                    alert("Cita Agendada");
                    window.location = "../index.php";
                </script>
            ';
        }else{
            echo '
                <script>
                    alert("No se pudo agendar cita");
                    window.location = "../index.php";
                </script>
            ';
        }

        mysqli_close($conexion);
    }
 ?>