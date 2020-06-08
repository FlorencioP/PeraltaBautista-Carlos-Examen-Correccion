<?php

    include 'conexionBD.php';

    @$targ = $_GET['mail'];
    @$sql = "SELECT * FROM tarjetas WHERE tar_num= '$targ' "; 
    @$result = $conn->query($sql);

    if (@$result->num_rows > 0) { 

        
        echo "<p>Tajeta encontrada </p>"; 

        echo " <table class='tg' style='width:95%'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th class='tg-46ru'>Numero:</th>";
        echo "<th class='tg-46ru'>Pertenece a:</th>";
        echo "<th class='tg-46ru'>Fecha Caducidad:</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while($row = $result->fetch_assoc()) {
        
            echo "<tr>";
            echo "<td class='tg-y698'>" . $row["tar_num"] . "</td>";
            echo "<td class='tg-y698'>" .  $row["tar_nombre"] . "</td>";
            echo "<td class='tg-y698'>" . $row["tar_fecha_cad"] . "</td>";
            echo "</tr> ";
            }
        

        
        
        echo "</tbody>";
        echo "</table>";

             
    } else { 

        echo "<p>No hay Tarjeta</p>";

    } 
    $conn->close();

?>