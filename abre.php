<?php

$conexion = new mysqli("localhost", "id18494676_dante", "t_gk=|Z>=spCK>5d", "id18494676_php");
if($conexion){
    echo "La gestion fue exitosa !!";
    header("location: encuesta.php");
}else{
    echo "Fallo la gestion";
}