<!DOCTYPE html> 
<head> 
    <meta charset="UTF-8"> 
    <title>Restaurante</title> 
    <link rel="stylesheet" type="text/css" href="busqueda.css"/>
    <script src='../Back/menu.js' ></script>


</head> 

<body> 
    


    <p>Menu de Busqueda</p>



    <form id="formularioT">

        <label for="tarjeta">Tarjeta de credito</label> <br>

        <input type="text" id="tarjeta" name="tarjeta" value="" placeholder="Ingrese el numero de la tarjeta de credito"/> <br>

        <input type="button" id="celBusc" name="celBusc" value="Buscar por tarjeta" onclick="buscarPortarjeta()" /><br>   

    </form>


    
    <br>

    <form id="formularioC">

        <label for="comida">Nombre de comida</label><br>

        <input type="text" id="comida" name="comida" value="" placeholder="Ingrese el nombre de la comida"/> <br>

        <input type="button" id="maiBusc" name="maiBusc" value="Buscar por comida" onclick="buscarPorcomida()"/><br>   

    </form>


    


    
    <div id="informacion">

    </div>

    <div id="comidas">

    </div>




</body>


</html>