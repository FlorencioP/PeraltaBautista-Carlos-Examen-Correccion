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
                @$tarjeta=$_GET['tarjeta'];

                $sql = "SELECT tar_id FROM tarjetas where tar_num=$tarjeta "; 
                $result = $conn->query($sql); 
                if (@$result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
                    $tarj = $row["tar_id"];
                    
                    $sqlc = "SELECT * FROM pedidos where tar_ped_tarjeta=$tarj "; 
                    $resultc = $conn->query($sqlc); 

                    while($row = $resultc->fetch_assoc()) {
            ?> 
                        <tr>
                            <td class="tg-y698"><?php echo $tarj ?></td>
                            <td class="tg-y698"><?php echo $row["ped_cliente"] ?></td>
                            <td class="tg-y698"><?php echo $row["ped_observaciones"] ?></td>
                            <td class="tg-y698"><?php echo $row["ped_total"] ?></td>
                            <td class="tg-y698"><?php echo $row["ped_fecha"] ?></td>
                            <td class="tg-y698"> <button onclick=buscarPorid(<?php echo $row["ped_num_id"] ?>)> Pedidos  </button> </td>
                        </tr> 


                        <?php 
                    }
                        
                } else { 

                    echo "<tr>"; 
                    echo " <td class='tg-y698' colspan='10'> No existen Tarjetas con ese numero </td>"; 
                    echo "</tr>"; 
                } 


            $conn->close(); 
            ?> 
            </tbody>
        </table>