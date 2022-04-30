<?php
/*include "conexion.php";
$nomb = $_REQUEST['nombre'];
$foto = $_FILES['foto']['name'];
$ruta = $_FILES['foto']['temp_name'];
$destino = "fotos/".$foto;
copy($ruta,$destino);
$insert = "INSERT INTO fotos (nombre,imagen) VALUES ('$nomb','$destino');";
mysqli_query($conectando,$insert);
header("Location: f.php");*/

require_once ('conect.php');
if(isset($_REQUEST['btn'])){

$descripcion = $_REQUEST['nombre'];
$nomb = $_FILES['foto']['name'];
$temporal = $_FILES['foto']['tmp_name'];
$carpeta = 'fotos';
$ruta = $carpeta.'/'.$nomb;
move_uploaded_file($temporal,$carpeta.'/'.$nomb);
$consul = "INSERT INTO fotos(nombre,imagen) VALUES('$descripcion','$ruta')";

$ejecutar = mysqli_query($conex,$consul) or die(mysqli_error($conex));

if($ejecutar){
    header("Location: ../f.php");
}
else{
    echo "Acontecio un error";
}




}




?>