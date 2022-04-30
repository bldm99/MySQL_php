
<?php

session_start();
$solution= 'Inicie secion';
$nombre= $_SESSION['username'];
/*<link rel="stylesheet" href="quemrd.css?v=<?php echo time(); ?>" />*/







?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galliry</title>

    <link rel="stylesheet" href="stylo.css?v=<?php echo time(); ?>" />
    <script src="js/java.js"></script>
    




</head>
<body id="body">

<?php

include("ejecucion.php");


/*$varprueva = 'Paisajesssss';

$conexion = mysqli_connect('localhost','root','','paginaweb');

$consulta = 'select titulo from   categorias where id = 1;';

$respuesta = mysqli_query($conexion,$consulta);

if($respuesta){
    while($row = $respuesta->fetch_array()){
        $nombre = $row['titulo']; /* nombre del campo de la base de datos 
    
    }
    
}*/



$con = "select *from fotos";

$sql = mysqli_query($conectando,$con);

$imagenes=[];          /* Imagenes de la base de datos */
$titulos=[];          /* titulos de la base de datos */

while($recorre = $sql ->fetch_array()){

    $letras =$recorre['nombre'];
    array_push($titulos, "$letras"); 
    

    /*$prue = '<img src="'.$recorre["imagen"].'"> ' ;*/

    $prue = $recorre["imagen"] ;

    array_push($imagenes, "$prue"); /* */

    /*echo "<h4>$letras</h4>";*/

    /*echo $prue;*/


    /*echo "<div class=$contenedor>
    <div class= $colum >  <div class= $img > $prue  </div>   
    </div>   </div>" ; */ 
    
}


?>

    

    <header class="menu">
        <div class="contenedor letras">


            <a href="" class="nombre"> 
                <img src="<?php echo $imagenes[70] ?>" alt=""> 

            </a>
           

            <form action="../../form-result.php" method="post" target="_blank" class="pru pru2"  >
                <p>
                  <input class="busqueda" type="search" name="busquedacodigo" pattern="[A-Za-z0-9]{8,20}">
                  <input class="buscar" type="button" value="Buscar">
                </p>    
            </form>      
              
            

            <nav class="lista">
                <ul>
                    
                    <?php

                    echo "<li><a href='#' class='phanton'> $nombreinicio </a></li>";

                    menux($respuesta);

                    ?>
                    
                </ul>
            </nav>


            <form action="../../form-result.php" method="post" target="_blank" class="pru3">
                <p>
                <input type="search" name="busquedacodigo" title="" >
            
                <input type="submit" value="Buscar">
                </p>
            </form>


        </div>
    </header>
    <main>
        <div>
            
            

            <div id="Paisajes" class="contenedor">
                <div id="titulo">
                    <h4><a href='sesion.php' > <?php echo $nombre ?> </a></h4>
                    <h5><a href="cerrar.php">Salir</a></h5>
                    <h1> <?php echo $categoria[0]     ?> </h1>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[0] ?>" alt="">
                        <p><?php echo $titulos[0] ?></p>
                    </div>   
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[4] ?>" alt="">
                        <p> <?php echo $titulos[4] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[7] ?>" alt="">
                        <p> <?php echo $titulos[7] ?> </p>
                    </div>
                    
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[1] ?>" alt="">
                        <p> <?php echo $titulos[1] ?> </p>
                    </div>
                    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[8] ?>" alt="">
                        <p> <?php echo $titulos[8] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[9] ?>" alt="">
                        <p> <?php echo $titulos[9] ?> </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[2] ?>" alt="">
                        <p> <?php echo $titulos[2] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[5] ?>" alt="">
                        <p> <?php echo $titulos[5] ?> </p>
                    </div>
                    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[10] ?>" alt="">
                        <p> <?php echo $titulos[10] ?> </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[3] ?>" alt="">
                        <p> <?php echo $titulos[3] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[6] ?>" alt="">
                        <p> <?php echo $titulos[6] ?> </p>
                    </div>
                    
                    
                </div>
            </div>

            <div id="animales" class="contenedor">  
                <div id="titulo">
                    <h1><?php echo $categoria[1]     ?> </h1>
                </div>         
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[11] ?>" alt="">
                        <p> <?php echo $titulos[11] ?>  </p>
                    </div>    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[12] ?>" alt="">
                        <p> <?php echo $titulos[12] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[13] ?>" alt="">
                        <p> <?php echo $titulos[13] ?> </p>
                    </div>
                    
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[14] ?>" alt="">
                        <p> <?php echo $titulos[14] ?> </p>
                    </div>
                    <div class="img"  >
                        <img id="imagen" src="<?php echo $imagenes[15] ?>" alt="">
                        <p> <?php echo $titulos[15] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[16] ?>" alt="">
                        <p> <?php echo $titulos[16] ?> </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[17] ?>" alt="">
                        <p> <?php echo $titulos[17] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[18] ?>" alt="">
                        <p> <?php echo $titulos[18] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[19] ?>" alt="">
                        <p> <?php echo $titulos[19] ?> </p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[20] ?>" alt="">
                        <p> <?php echo $titulos[20] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[21] ?>" alt="">
                        <p> <?php echo $titulos[21] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[22] ?>" alt="">
                        <p> <?php echo $titulos[22] ?> </p>
                    </div>
                </div>
            </div>

            <div id="cosmos" class="contenedor">
                <div id="titulo">
                    <h1><?php echo $categoria[2]     ?> </h1>
                </div> 
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[23] ?>" alt="">
                        <p><?php echo $titulos[23] ?></p>
                    </div>    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[24] ?>" alt="">
                        <p><?php echo $titulos[24] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[25] ?>" alt="">
                        <p><?php echo $titulos[25] ?></p>
                    </div>
                    
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[26] ?>" alt="">
                        <p><?php echo $titulos[26] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[27] ?>" alt="">
                        <p><?php echo $titulos[27] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[28] ?>" alt="">
                        <p><?php echo $titulos[28] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[29] ?>" alt="">
                        <p><?php echo $titulos[29] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[30] ?>" alt="">
                        <p><?php echo $titulos[30] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[31] ?>" alt="">
                        <p><?php echo $titulos[31] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[32] ?>" alt="">
                        <p><?php echo $titulos[32] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[33] ?>" alt="">
                        <p><?php echo $titulos[33] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[34] ?>" alt="">
                        <p><?php echo $titulos[34] ?></p>
                    </div>
                </div>
            </div>

            <div id="autos" class="contenedor">
                <div id="titulo">
                    <h1><?php echo $categoria[4]     ?> </h1>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[35] ?>" alt="">
                        <p><?php echo $titulos[35] ?></p>
                    </div>    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[36] ?>" alt="">
                        <p><?php echo $titulos[36] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[37] ?>" alt="">
                        <p><?php echo $titulos[37] ?></p>
                    </div>  
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[38] ?>" alt="">
                        <p><?php echo $titulos[38] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[39] ?>" alt="">
                        <p><?php echo $titulos[39] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[40] ?>" alt="">
                        <p><?php echo $titulos[40] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[41] ?>" alt="">
                        <p><?php echo $titulos[41] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[42] ?>" alt="">
                        <p><?php echo $titulos[42] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[43] ?>" alt="">
                        <p><?php echo $titulos[43] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[44] ?>" alt="">
                        <p> <?php echo $titulos[44] ?> </p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[45] ?>" alt="">
                        <p><?php echo $titulos[45] ?></p>
                    </div>
                    <div class="img">
                    </div>
                </div>
            </div>

            <div id="deportes" class="contenedor">
                <div id="titulo">
                    <h1><?php echo $categoria[5]     ?> </h1>
                </div>               
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[46] ?>" alt="">
                        <p><?php echo $titulos[46] ?></p>
                    </div>    
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[47] ?>" alt="">
                        <p><?php echo $titulos[47] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[48] ?>" alt="">
                        <p><?php echo $titulos[48] ?></p>
                    </div>
                    
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[49] ?>" alt="">
                        <p><?php echo $titulos[49] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[50] ?>" alt="">
                        <p><?php echo $titulos[50] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[51] ?>" alt="">
                        <p><?php echo $titulos[51] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[52] ?>" alt="">
                        <p><?php echo $titulos[52] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[53] ?>" alt="">
                        <p><?php echo $titulos[53] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[54] ?>" alt="">
                        <p><?php echo $titulos[54] ?></p>
                    </div>
                </div>
                <div class="colum">
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[55] ?>" alt="">
                        <p><?php echo $titulos[55] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[56] ?>" alt="">
                        <p><?php echo $titulos[56] ?></p>
                    </div>
                    <div class="img">
                        <img id="imagen" src="<?php echo $imagenes[57] ?>" alt="">
                        <p><?php echo $titulos[57] ?></p>
                    </div>
                </div>
            </div>   

            <div id="arte" class="contenedor">             
                <div id="titulo">
                    <h1><?php echo $categoria[6]     ?> </h1>
                </div>  
                <div style="height: 80%;">
                    <div class="colum">
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[58] ?>" alt="">
                            <p><?php echo $titulos[58] ?></p>
                        </div>    
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[59] ?>" alt="">
                            <p><?php echo $titulos[59] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[60] ?>" alt="">
                            <p><?php echo $titulos[60] ?></p>
                        </div>  
                    </div>
                    <div class="colum">
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[61] ?>" alt="">
                            <p><?php echo $titulos[61] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[62] ?>" alt="">
                            <p><?php echo $titulos[62] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[63] ?>" alt="">
                            <p><?php echo $titulos[63] ?></p>
                        </div>
                    </div>
                    <div class="colum">
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[64] ?>" alt="">
                            <p><?php echo $titulos[64] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[65] ?>" alt="">
                            <p><?php echo $titulos[65] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[66] ?>" alt="">
                            <p><?php echo $titulos[66] ?></p>
                        </div>
                    </div>
                    <div class="colum">
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[67] ?>" alt="">
                            <p><?php echo $titulos[67] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[68] ?>" alt="">
                            <p><?php echo $titulos[68] ?></p>
                        </div>
                        <div class="img">
                            <img id="imagen" src="<?php echo $imagenes[69] ?>" alt="">
                            <p><?php echo $titulos[69] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
               <h2><?php echo $hea[0] ?></h2>
               <a href="#"><?php echo $hea[1] ?></a>
               <a href="#"><?php echo $hea[2] ?></a>
               <a href="#"><?php echo $hea[3] ?></a>
               <a href="#"><?php echo $hea[4] ?></a>
            </div> 
            <div class="footer-heading footer-2">
              <h2><?php echo $hea[5] ?></h2>
              <a href="#"><?php echo $hea[6] ?></a>
              <a href="#"><?php echo $hea[7] ?></a>
              <a href="#"><?php echo $hea[8] ?></a>
                        
           </div> 
           <div class="footer-heading footer-3">
            <h2><?php echo $hea[9] ?></h2>
            <a href="#"><?php echo $hea[10] ?></a>
            <a href="#"><?php echo $hea[11] ?></a>
            <a href="#"><?php echo $hea[12] ?></a>
            <a href="#"><?php echo $hea[13] ?></a>
           </div> 
           
           <div class="footer-email-form">
               <h2><a href="Registro.php"><?php echo $hea[14] ?> </a> </h2>
               <form action="Envio de datos">
                    <input type="email" placeholder="Entra tu Correo Personal" required id="footer-email" >
                    <input type="submit"  value="Acceder"id="footer-email-btn">
               </form>
          </div>
        </div> 
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="java.js"></script>





</body>
</html>