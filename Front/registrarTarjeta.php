<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurante</title> 
    <link rel="stylesheet" type="text/css" href="regsTar.css"/>

</head>
    <body>

        <h1>Registre su tarjeta en el sistema</h1>

        <form id="formulario01" method="POST" action="../Back/crear_tarjeta.php">
       
               
                    <label id="text">Numero: </label>
                    <br>
                    <input type="text" id="numero" size="30" name="numero" >
                    <br>
               
                
                
                    <label id="text">Nombre: </label><br>
                    <input type="text" id="nombre" size="30" name="nombre" >
                    <br>
                   
                
            
                
                    <label id="text">Fehca de caducidad: </label><br>
                    <input type="date" id="fechaCad" size="30" name="fechaCad" >
                    <br>
                    
                
                
                
                    <label id="text">CVV: </label><br>
                    <input type="text" id="cvv" name="cvv" size="30" >
                    <br>
                    
               
                
                    <input class="btnLog" type="submit" value="Añadir" name="crear">
                
            
            <br>
            <!--<input type="submit" id="crear" name="crear" value="Aceptar"/>-->
            </form> 
    </body>
</html>