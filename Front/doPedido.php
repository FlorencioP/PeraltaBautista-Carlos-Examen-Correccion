<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Restaurante</title>

    <link rel="stylesheet" type="text/css" href="pedido.css"/>

    <script src='../Back/menu.js' ></script>

</head>

<body>

    <p>Pedido a Restaurante (Nombre Pendiente)</p>


    <input type="text" id="TargBusc" size="30" name="TargBusc" >
    <button onclick="buscarT()">Agregar Tarjeta de Pago</button>



    <div id="Targeta" >


    </div>

    <form id="formulario01" method="POST" action="../Back/crearPedido.php?precio= " onsubmit="iralmenu()">


        <p>Nombres : </p> 
        <input type="text" id="nomCli" size="30" name="nomCli" > <br>

        <p>Observaciones: </p> 
        <input type="text" id="obs" size="30" name="obs" >  <br>



        <input class="btnLog" type="submit" value="Realizar Pedido" name="crearP">
        
    </form> 




    <div id= "menu">
        <button onclick="hamburguesa(2.50)">Haburgesa $2.50</button>
        <button onclick="ArrozPollo(1.50)">Arroz Con Pollo $1.50</button>
        <button onclick="SecCarne(1.50)">Seco de Carne $1.50</button>
        <button onclick="CocaCola(0.50)">Coca-Cola $0.50</button>
    </div>   


    <textarea id="pedidos" name="pedidos" rows="10" cols="50">Pedidos:  </textarea>


   

        <p>Total actual = $ <div id = "precio">0.00</div></p>
    
        <div id="pedidoslist"></div>

 </body>

 </html>