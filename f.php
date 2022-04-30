<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  action="carga_foto.php" method="post" enctype="multipart/form-data" >

        <h1>Suscribete</h1>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="file" name="foto" >
        
       
        <button type="submit" name="btn"  >Agregar </button>  
</form>

   <br> 
<?php

include("carga_foto.php");
$con = "select *from fotos";

$sql = mysqli_query($conex,$con);

while($recorre = $sql ->fetch_array()){

    echo $recorre['nombre'];
   
    echo '<img src="'.$recorre["imagen"].'" height="100" width="100"> ';
    

}


    





?>





</body>
</html>