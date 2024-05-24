<?php
session_start();
$usuarioLogueado = isset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio web Psicologa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/sw-psicologa/assets/css/index.css">
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
            <a id="iniciar-sesion" style="display=none;" href="login.php">Login</a>
            <a id="cerrar-sesion" style="display=none;" href="php/cerrar_sesion_be.php">Cerrar sesión</a>
        </nav>
        <label for="nav_check" class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </label>

    </header>

    <div class="mision_vision">
        <div class="img_mis_vis">
            <img src="img/mision-vision_en.png" alt="">
        </div>
        <div class="mision">
            <h1>Mision</h1>
                <p>Nuestra misión es proporcionar un espacio en línea donde las personas puedan 
                encontrar apoyo emocional, recursos informativos y servicios terapéuticos de 
                calidad. Nos comprometemos a ofrecer un ambiente acogedor y seguro donde nuestros 
                visitantes puedan explorar su bienestar emocional y encontrar las herramientas 
                necesarias para vivir una vida más plena y satisfactoria.</p>
    
        </div>
        <div class="vision">
            <h1>Vision</h1>
                <p>Nuestra visión es ser una plataforma líder en el campo de la psicología clínica 
                en línea, reconocida por su profesionalismo, empatía y compromiso con el bienestar 
                de nuestros usuarios. Nos esforzamos por ser un referente en la promoción de la 
                salud mental y el desarrollo personal, brindando acceso a recursos accesibles y 
                de calidad que ayuden a transformar vidas y promover un mundo más saludable y equilibrado.</p>
    
        </div>    
    </div>
    
    <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/Mi-querida-psicóloga-blanca.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h1 class="card-title">Dr. Miriam Cruz</h1>
              <p class="card-text">Dirección: C. 7 Sur 3712-local 2, Gabriel Pastor 2da Secc, 72420 Heroica Puebla de Zaragoza, Pue.</p>
              <p class="card-text">Celular: +522228971223 o </p>
              <a class="button" href="cita.php">Genera una cita</a>
            </div>
          </div>
        </div>
      </div>

    <div class="blog" id="blog">
        <h1>Blogs</h1>
    </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 ">
            <div class="col ">
              <div class="card">
                <img src="img/consulta-psicologa-2716149.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">AMA BIEN</h5>
                  <p class="card-text">A menudo escucho en mi consulta: «yo sé que me quiere mucho pero me siento mal en mi relación de pareja». Y al revés: «yo lo/la quiero mucho pero no puedo más, no puedo vivir así». Y un largo etcétera de frases del mismo...</p>
                  <a class="btn btn-primary" href="ama-bien.php">Ver mas...</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/psicologa-terceira-idade-sentada-no-sofa-curso-de-psicologia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">DECIDETE A  BRILLAR</h5>
                  <p class="card-text">Nelson Mandela, después de 27 años en la cárcel y de ser elegido en 1994 presidente de Sudáfrica, compartió con el mundo uno de sus poemas favoritos, escrito por Marianne Williamson...</p>
                  <a class="btn btn-primary" href="decidete-a-brillar.php">Ver mas...</a>
                </div>
              </div>
            </div>
          </div>

    <div id="comentarios" class="all-comentarios">
      <h1>Comentarios</h1>
    </div>
    <div class="d-flex justify-content-center">
      
      <p></p>
        <main>
            <form id="commentForm" action="php/comentario_be.php" method="POST">
                <textarea id="comment" name="comentario" placeholder="Escribe tu comentario aquí..." required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </main>
    </div>

    <div id="comentarios" class="all-comentarios">
        <?php
          include 'php/conexion_be.php';
          $result = $conexion->query("SELECT nombre_usuario, fecha_comentario, comentario FROM comentario ORDER BY id_comentario DESC");
            if ($result) {
              while ($row = $result->fetch_assoc()):
        ?>
            <div class="comentario">
                <strong><?php echo htmlspecialchars($row['nombre_usuario']); ?>:<p><?php echo htmlspecialchars($row['fecha_comentario']); ?></p></strong>
                <p><?php echo htmlspecialchars($row['comentario']); ?></p>
            </div>
        <?php
            endwhile;
          $result->free();
          } else {
            echo "<p>Error al cargar comentarios: " . $conexion->error . "</p>";
          }
            $conexion->close();
        ?>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(function () {
      var usuarioLogueado = <?php echo json_encode($usuarioLogueado); ?>;
      if(!usuarioLogueado){
        $('#cerrar-sesion').hide();
        $('#iniciar-sesion').show();
      } else {
        $('#cerrar-sesion').show();
        $('#iniciar-sesion').hide();
      }
  });
</script>
</html>