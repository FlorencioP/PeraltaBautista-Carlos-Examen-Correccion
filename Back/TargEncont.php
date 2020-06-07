<?php

    include 'conexionBD.php';

    $targ = $_GET['mail'];
    $sql = "SELECT * FROM tarjetas WHERE tar_num= '$targ' "; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { 

        echo " <b> Tajeta encontrada </b> "; 

             
    } else { 
        echo " <b> No hay Tajeta </b>"; 
    } 

?>