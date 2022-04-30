<?php



include "conexion.php";



if(function_exists("get") === FALSE){

    function get(){
        return "5000";
    }

}



if($conectando){
    echo "<h4> Se ha realizado la conexion de manera correcta  </h4>"  ;
}





$consultainicial = 'select nombre from menu  where id=1   ;';
$respuestainicial = mysqli_query($conectando,$consultainicial);
while($row = $respuestainicial ->fetch_array()){
    $nombreinicio = $row['nombre']; 

}



$consulta = 'select  *from menu;';

$respuesta = mysqli_query($conectando,$consulta);


/*while($row = $respuesta->fetch_array()){

    $nombre = $row['nombre'];
      
    echo  "<ul> <li><a href='#'> $nombre   </a></li> </ul>";  
}*/

/* Funciones de menu */


if(function_exists("menux") === FALSE){

    function menux($x){
        $menu=[];
        

        while($row = $x->fetch_array()){

            $nombre = $row['nombre'];
            array_push($menu, "$nombre"); 
            
            
            echo  " <li><a href=''> $nombre   </a></li> ";
            
               
        }
        

        
    }

    
     
}







/*Header*/

$conheader = "select *from header";

$sqlheader = mysqli_query($conectando,$conheader);

$hea=[]; 

while($recorre = $sqlheader ->fetch_array()){

    $palabra =$recorre['palabra'];
    array_push($hea, "$palabra"); 
     
}

/*Categoriasr*/
$concat = "select *from categorias";

$sqlcat = mysqli_query($conectando,$concat);

$categoria=[]; 

while($recorre = $sqlcat ->fetch_array()){

    $x=$recorre['titulo'];
    array_push($categoria, "$x"); 
     
}


/*---------------------------------Registrando usuarios--------------------------*/











?>