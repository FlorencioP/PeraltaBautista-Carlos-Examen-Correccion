<table class="tg" style="width:95%">
            <thead>
            <tr>
                <th class="tg-46ru">Nombre</th>
                <th class="tg-46ru">Precio</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                include '../Back/conexionBD.php'; 
                $id_ped=$_GET['id'];
                
                $sqlc = "SELECT * FROM comidas where ped_com_id=$id_ped"; 
                    
                    $resultc = $conn->query($sqlc); 
                    if (@$resultc->num_rows > 0) { 
                        
                    while($row = $resultc->fetch_assoc()) {
            ?> 
                        <tr>
                            <td class="tg-y698"><?php echo $row["com_nombre"] ?></td>
                            <td class="tg-y698"><?php echo $row["com_precio"] ?></td>
                         </tr> 


                        <?php 
                    } 
                } else { 

                    echo "<tr>"; 
                    echo " <td class='tg-y698' colspan='10'> No existen registros de pedidos </td>"; 
                    echo "</tr>"; 
                } 


            $conn->close(); 
            ?> 
            </tbody>
        </table>