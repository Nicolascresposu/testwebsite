<title>Rally Virtual Distrital</title>
  <link rel="stylesheet" href="index.css">
<?php
  require "header.php";
?>
      <main>
        <div class="introduccion">

        </div>

        <h>Rally </h>
        <h1>Intercultural</h1>
        <?php
            if (isset($_SESSION['userId'])) {
              //for when logged in
              echo '<p class="login-status">Eres el equipo '.$_SESSION['userUid'].' Van por el reto '.$_SESSION['chgencomp'];

?>

<p class="1"> Para comenzar, coloca el código de acceso. El primero es 3725.</p>
<script src="path/to/my/script.js"></script>
<br> <br>
<div id="botones ">

<div class="Clasificación"><a href='leaderboard.php'>Clasificación y lista de equipos</a></div>
<div class="reglas"><a href='rules.html'>Reglas completas</a></div>

<div class="ir"><a href='ccchecker.php'>Ir al desafio actual</a></li></div>

<br>
<img src="img/footer.png" alt="Texto">
<br>
</div>



<?php      }    else {
              echo '< class="login-status">Necesitas iniciar sesion para acceder al contenido del resto del sitio.<';
          ?>

          <div class="formulario">

        <style type="text/css">


        </style>

            </style>

            <form action="includes/login.inc.php" method="post">

              <label for="text">Nombre</label>
              <input type="text" name="mailuid" placeholder=" Escribe tu Nombre de Equipo" >

              <label for="password">Contraseña</label>
              <input type="password" name="pwd" placeholder="Escribe tu Contraseña ">

               <label for="submit"> </label>
              <input type="submit" name="login-submit">Ingresar</input>
          </form>

          </div>
          <div class="midgeneral">
<br><br><br>
<?php } ?>

<?php
  require "footer.php";
?>
    </div>
</main>
