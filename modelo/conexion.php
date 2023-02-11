<?php
require_once('config/config.php');

class Conexion{

public function conexion(){

try{

   $objPdo = new PDO("mysql:host=".HOST.";dbname=".DB.";charset=".CHARSET, USER, PASS);
   $objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   return $objPdo;

}catch(PDOException $e){
   die('Error al conectar: '.$e->getMessage()); 
}

}

}



?>