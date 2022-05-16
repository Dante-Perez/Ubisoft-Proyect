<?php

    include("abre.php");
    $Conocer     = $_POST['Conocer'];
    $Gustar      = $_POST['Gustar'];
    $Fav         = $_POST['Fav'];
    $Fran        = $_POST['Fran'];
    $Primer      = $_POST['Primer'];
    $Actual      = $_POST['Actual'];
    $Peor        = $_POST['Peor'];
    $Opinar      = $_POST['Opinar'];

    $consulta = "INSERT INTO UBISOFT(Conocer, Gustar, Fav, Fran, Primer, Actual, Peor, Opinar) VALUES
    ('$Conocer', '$Gustar', '$Fav', '$Fran', '$Primer', '$Actual', '$Peor', '$Opinar')";

    if($conexion->query($consulta) === TRUE){
        header("Location: encuesta.php");
    }else{
        echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();
    ?>