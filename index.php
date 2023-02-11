<?php

$url = 'login';

if(!empty($_GET['url'])){
    $url = $_GET['url'];
}

if(is_file("controlador/".$url.".php")){
    require_once("controlador/".$url.".php");
}else{
    echo 'Pagina en construccion';
}


?>