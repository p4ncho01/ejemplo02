<?php
include "programacion.php";
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         
        <?php
        require resultado.php;
        $A=10;
        $a=10;
        $hello="hola mundo";
        
        echo "saludo $hello x $A y $a ";
        echo "<br>";
        echo ' saludo $hello x $A y $a';
        echo "<br>";
        echo ' Saludo'. $hello. ' x ' .$A. ' y ' .$a ;
        
        $dia["lunes"]="1 clase" ;
        $dia["martes"]="3 clase" ;
        $dia["miercoles"]="4 clase" ;
        $dia["jueves"]="2 clase" ;
        $dia["viernes "]="3 clase" ;
        
        foreach ($dia as $value) {
            echo $value ."<br>"; 
            }
            
            
        ?>
    </body>
</html>
