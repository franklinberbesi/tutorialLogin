<?php

if(empty($_SESSION)){
    session_start();
    if(empty($_SESSION['nombre_apellido']) || empty($_SESSION['perfil'])){
       header('location: ?url=salir');
    }
 }

if(is_file("vista/".$url.".php")){
    require_once("vista/".$url.".php");
}
else{
    echo 'Pagina en construccion';
}
?>