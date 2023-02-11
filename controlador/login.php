<?php

if(empty($_SESSION)){
    session_start();
    if(!empty($_SESSION['nombre_apellido']) || !empty($_SESSION['perfil'])){
       header('location: ?url=home');
    }
 }

if(!is_file("modelo/".$url.".php")){
  header('location: ?url=login');
}

require_once("modelo/".$url.".php");

$objLogin = new Login();

if(is_file("vista/".$url.".php")){

 if(!empty($_POST)){
     
     $data = array(
    'usuario' => $_POST['usuario'],
    'clave' => $_POST['clave']
     );

     $objLogin->set_data($data);

     $conexionDB = $objLogin->conexion();
     $objLogin->set_conexionDB($conexionDB);

     $res = $objLogin->validarLogin();
     $msg = false;
     if(!$res){
      $msg = true;
     }else{
      session_start();
      $_SESSION['nombre_apellido'] = $res['nombre_apellido'];
      $_SESSION['perfil'] = $res['perfil'];
      header('location: ?url=home');
     }
 }

 require_once("vista/".$url.".php");
}else{
    echo 'Pagina en construccion';
}

?>