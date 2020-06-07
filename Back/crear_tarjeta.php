<?php

    include 'conexionBD.php';


    $numero = isset($_POST["numero"]) ? trim($_POST["numero"]) : null;
    echo ( "<p> $numero </p>" );

    $nombre = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;
    echo ( "<p> $nombre </p>" );

    $fechaCad = isset($_POST["fechaCad"]) ? trim($_POST["fechaCad"]): null;
    echo ( "<p> $fechaCad </p>" );

    $CVV = isset($_POST["cvv"]) ? mb_strtoupper(trim($_POST["cvv"]), 'UTF-8') : null;
    echo ( "<p> $CVV  </p>" );


    $sql = "INSERT INTO tarjetas VALUES (0, '$numero', '$nombre', '$fechaCad', '$CVV')";
    
    if ($conn->query($sql) === TRUE) {
        header ( "Location: ../Front/index.html" );
    }

    $conn->close();
    
    echo "<p> Problema </p>"
    //echo "<a href='../vista/crear_usuario.html'>Regresar</a>";
    
   // 
?>
