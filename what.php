<?php

require "conexion.php";
session_start();



if(isset($_POST['registro'])){

    






}


$usuario= trim($_POST['usuario']);
$clave= trim($_POST['clave']);



$db = "select   nombre ,email , paswoord from usuarios where email='$usuario' 
and paswoord='$clave' ;";



$consultainiciar = mysqli_query($conectando ,$db  );

/* Definicimos estas variables de manera principal paa que no nos vote undefined*/
$nombre ='';
$usu ='';
$pas='';


while($z= $consultainiciar ->fetch_array()){
    $nombre =$z['nombre'];
    $usu =$z['email'];
    $pas=$z['paswoord'];
}
echo '----------------------------';


if($usu == $usuario and $pas == $clave ){

    $_SESSION['username'] = $nombre;
    header("location: index.php");

}else{
    
    ?>
    <h3>Contrasena o correo erroneos</h3>
    <?php 
    

}






?>