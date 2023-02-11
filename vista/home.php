<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/estilos.css">
    <title>Home - <?php echo $_SESSION['perfil']; ?></title>
</head>
<body>

 <header>
 <h1>Beinvenido Al Home</h1>
 <ul>
    <li><a href="?url=salir">Salir</a></li>
 </ul>
 </header>

  <div class="content-title">
  <h2><?php echo $_SESSION['nombre_apellido']; ?></h2>
  <h3><?php echo $_SESSION['perfil']; ?></h3>
  </div>
    
  <div class="content-img">
    <img src="./assets/userDefault.jpg" alt="USER">
  </div>

  <footer>
  <h3>Copyright &copy; Franklin-dev - 2023.</h3>
  </footer>

</body>
</html>