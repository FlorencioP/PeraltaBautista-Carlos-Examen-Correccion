<?php

   // include 'conexionBD.php';


    $nomcli = isset($_POST["nomCli"]) ? trim($_POST["nomCli"]) : null;
    echo ( "<p> $nomcli </p>" );

    $obs = isset($_POST["obs"]) ? mb_strtoupper(trim($_POST["obs"]), 'UTF-8') : null;
    echo ( "<p> $obs </p>" );

    $total = document.getElementById("precio").innerHTML;
    echo ( "<p> $total </p>" );

    $pedidoslist = document.getElementById("pedidoslist").innerHTML;
    echo ( "<p> $pedidoslist  </p>" );


    //$sql = "INSERT INTO tarjetas VALUES (0, '$numero', '$nombre', '$fechaCad', '$CVV')";
    
   // if ($conn->query($sql) === TRUE) {
        //header ( "Location: ../Front/index.html" );
   // }

    //$conn->close();
    
   // echo "<p> Problema </p>"
    //echo "<a href='../vista/crear_usuario.html'>Regresar</a>";
    
   // 
?>
