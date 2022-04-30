<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueva de Registro</title>
    <link rel="stylesheet" href="estliR.css">
</head>
<body>



    <form class="for"  method="post" >
        <div class="cuerpo">

            <h1>Te admos la bienvenida al Galliry</h1>
            <h1>Ingresa tus datos aqui</h1>

            <input class="en" type="text" name="name" placeholder="Nombre">
            <br>
            <br>
            <input class="en" type="text" name="email" placeholder="Email">
            <br>
            <br>
            <input class="en" type="text" name="paswoord" placeholder="Paswoord">
            <br>
            <br>
            <input class="en" type="text" name="edad" placeholder="Edad">
            <br>
            <br>
            
            <button class="bt" type="submit" name="registro"  >Registr </button>  

        </div>



        

    </form>



<?php


/*---------------------------------Registrando usuarios--------------------------*/
include "conexion.php";
if(isset($_REQUEST['registro'])){

    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 &&
    strlen($_POST['paswoord']) >= 1 &&
    strlen($_POST['edad']) >= 1 ){

        $consulta = "select email from usuarios;";

        $sql = mysqli_query($conectando,$consulta );

        $correos=[]; 

        while($recorre = $sql ->fetch_array()){
            $dato =$recorre['email'];
            array_push($correos, "$dato"); 
   
        }

        /*$correos=['juan', 'diego','cesar'];

        $igual='diego';

        if( in_array('juan',$correos)){
            echo 'son iguales';
        }*/


        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $paswoord = trim($_POST['paswoord']);
        $edad = trim($_POST['edad']);
        $fecha_re = date("d/m/y");

        if( in_array($email,$correos)){
            echo 'Correo existente';
        }else{
            $registrar ="INSERT INTO usuarios (nombre,email,paswoord,edad,fecha_re)
            VALUES ('$name','$email','$paswoord','$edad','$fecha_re')";
            $result = mysqli_query($conectando , $registrar);
        }
  
   
    }else{

        ?>
        <h3>Es necesario completar todos los campos</h3>
        <?php  

    }
   
}










    

    


?>
    

    



    
</body>
</html>