<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Iniciar Sesión</title>
</head>
<body>

   <h1>Login | Iniciar Sesión</h1>

    <?php 
    if(isset($msg) && $msg == true){
      ?>
      <div class="msg__error msg__error-activo">
     <span class="msg__error-span">Usuario o contraseña incorrecta.</span>
     <span class="span-cerrar">X</span>
    </div>
      <?php
    }
    ?>

    <section class="content-form">
    <form action="" method="post" id="formLogin">
       
       <div id="grupo__usuario" class="grupo__input">
       <label for="usuario">Usuario</label>
         <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
         <p>El usuario debe de ser de 8 a 20 Caracteres. Solo se acepta guion medio y guion bajo.</p>
       </div>
 
       <div id="grupo__clave" class="grupo__input">
         <label for="clave">Clave</label>
         <input type="password" id="clave" name="clave" placeholder="Contraseña" required>
         <p>La contraseña debe de ser de 8 a 20 Caracteres. Solo se acepta punto.</p>
       </div>
 
       <div class="btn__submit">
         <button type="submit" name="iniciarSesion">Enviar</button>
       </div>
 
      </form>
 
    </section>

  <footer>
    <h3>Copyright &copy; Franklin-dev - 2023.</h3>
  </footer>
    
 <script src="./assets/validarLogin.js"></script>

</body>
</html>