<?php

   include 'conexionBD.php';

   $total=$_GET['tot'];
   $pedido=$_GET['ped'];
   $tarjeta=$_GET['tar'];
   $observ=$_GET['rec'];

   echo ( "<p> $total </p>" );


   echo ( "<p> $pedido </p>" );


   echo ( "<p> $tarjeta </p>" );


   echo ( "<p> $observ  </p>" );

   $claves = preg_split("/[\s,]+/", $pedido);


   

   @$sqlt = "SELECT * FROM tarjetas WHERE tar_num= '$tarjeta' "; 
   @$resultt = $conn->query($sqlt);

   if (@$resultt->num_rows > 0) {
      while($row = $resultt->fetch_assoc()) {
        
         $tarid=$row["tar_id"] ;
         $nombre=$row["tar_nombre"]; 

      }
   }
   $sql = "INSERT INTO pedidos VALUES (0,null, '$nombre', '$total', '$observ', '$tarid')"; 
   

   if ($conn->query($sql) === TRUE) {

      $idprods = "SELECT MAX(ped_num_id) AS ped_num_id FROM pedidos";

      $result = $conn->query($idprods);

      while($row=$result->fetch_assoc()){

          $idprod=$row['ped_num_id'];
      
      }

      echo ( "<p> $idprod </p>" );

      for ( $i = 0; $i < count($claves); ++$i){


         if($claves[$i] == 1 ){
   
            echo ( "<p> Hamburguesa detectada </p>" );
   

            $sqlTel = "INSERT INTO comidas VALUES (0, 'Hamburguesa', '2.50', '$idprod')";
            if ($conn->query($sqlTel) != TRUE) {
                echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }



         }else if($claves[$i] == 2 ){
               echo ( "<p> Arroz con pollo detectado </p>" );

               $sqlTel = "INSERT INTO comidas VALUES (0, ' Arroz con pollo', '1.50', '$idprod')";
               if ($conn->query($sqlTel) != TRUE) {
                  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
               }
   
               }else if($claves[$i] == 3 ){
                     echo ( "<p> Seco de carne detectado </p>" );

                     $sqlTel = "INSERT INTO comidas VALUES (0, 'Seco de carne', '1.50', '$idprod')";
                  if ($conn->query($sqlTel) != TRUE) {
                     echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
                  }
   
                  }else if($claves[$i] == 4 ){
                        echo ( "<p> Coca-cola detectada </p>" );

                        $sqlTel = "INSERT INTO comidas VALUES (0, 'Coca-cola', '0.50', '$idprod')";
                        
                        if ($conn->query($sqlTel) != TRUE) {
                           echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
                        }
                  }        
      }
  } 



   $conn->close();
   
   header('Location: ../Front/index.html');
    
?>
