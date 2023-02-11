<?php 

require_once('modelo/conexion.php');

class Login extends Conexion{
    
private $data;
private $conexionDB;

//set
public function set_data($valor){
    $this->data = $valor;
}

public function set_conexionDB($valor){
    $this->conexionDB = $valor;
}

//get

public function get_data(){
    return $this->data;
}

public function get_conexionDB(){
    return $this->conexionDB;
}

//metodo login

public function validarLogin(){

try{

$this->conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT nombre_apellido, perfil FROM usuarios WHERE usuario = :usuario AND clave = :clave";
$resultado = $this->conexionDB->prepare($sql);

$resultado->bindParam(':usuario',$this->data['usuario']);
$resultado->bindParam(':clave',$this->data['clave']);

$resultado->execute();

$fila = $resultado->fetch(PDO::FETCH_ASSOC);

if($fila){
    return $fila;
}else{
 return false;
}


}catch(PDOException $e){
    die('Error: '.$e->getMessage());
}

}

}

?>