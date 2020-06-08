<table class="tg" style="width:95%">
            <thead>
            <tr>
                <th class="tg-46ru">Numero Tarjeta</th>
                <th class="tg-46ru">Cliente</th>
                <th class="tg-46ru">Observaciones</th>
                <th class="tg-46ru">Total</th>
                <th class="tg-46ru">Fecha</th>
                <th class="tg-46ru"></th>
            </tr>
            </thead>
            <tbody>
            <?php 
                include '../Back/conexionBD.php'; 
                $comida=$_GET['tarjeta'];
                



                $sql = "SELECT *  FROM comidas where com_nombre='$comida' GROUP BY ped_com_id"; 
                $result = $conn->query($sql);

                if (@$result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $tempc =$row["ped_com_id"];

                        $sqlc = "SELECT * FROM pedidos where ped_num_id=$tempc"; 
                        $resultc = $conn->query($sqlc); 
    
                        while($row = $resultc->fetch_assoc()) {
                            $tempt =$row["tar_ped_tarjeta"];
                            $sqlt = "SELECT tar_num FROM tarjetas where tar_id=$tempt "; 
                            $resultt = $conn->query($sqlt); 
                            $rowt = $resultt->fetch_assoc();
                            $tarjt = $rowt["tar_num"];


                ?> 
                            <tr>
                                <td class="tg-y698"><?php echo $tarjt ?></td>
                                <td class="tg-y698"><?php echo $row["ped_cliente"] ?></td>
                                <td class="tg-y698"><?php echo $row["ped_observaciones"] ?></td>
                                <td class="tg-y698"><?php echo $row["ped_total"] ?></td>
                                <td class="tg-y698"><?php echo $row["ped_fecha"] ?></td>
                                <td class="tg-y698"> <button onclick=buscarPorid(<?php echo $row["ped_num_id"] ?>)> Pedidos  </button> </td>
                            </tr> 
    





            <?php 

               }
                } 
            }else { 

                    echo "<tr>"; 
                    echo " <td class='tg-y698' colspan='10'> No existen Pedidos registrados con ese plato </td>"; 
                    echo "</tr>"; 
                } 


            $conn->close(); 
            ?> 
            </tbody>
        </table>