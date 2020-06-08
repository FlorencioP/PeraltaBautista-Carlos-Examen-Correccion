var total = 0;
var pedidos = "";


function addT(){

    location.replace("../Front/registrarTarjeta.php");

}

function addP(){

    location.replace("../Front/doPedido.php");
    total = 0;
    pedidos = "";
}



function buscarT() { 

    var mail = document.getElementById("TargBusc").value; 
    console.log(mail)
    if (mail == "") { 
        document.getElementById("Targeta").innerHTML = "<p>No hay Tarjeta</p>"; 


    } else { 
        if (window.XMLHttpRequest) { 
            // code for IE7+, Firefox, Chrome, Opera, Safari 
            xmlhttp = new XMLHttpRequest(); 
        } else { // code for IE6, IE5 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 

        xmlhttp.onreadystatechange = function() { 
            if (this.readyState == 4 && this.status == 200) { 
                //alert("llegue"); 
                document.getElementById("Targeta").innerHTML = this.responseText; 
            } 
        }; 
        document.getElementById("tarTemp").innerHTML=mail;
        xmlhttp.open("GET","../Back/TargEncont.php?mail="+mail,true); 
        xmlhttp.send(); 
    } 
    return false;
}





function hamburguesa(add){

    document.getElementById("pedidos").value += "Hamburguesa \n " ;

    total += add;
    document.getElementById("precio").innerHTML= total ;
    pedidos += "1,"
    document.getElementById("pedidoslist").innerHTML= pedidos ;

}

function ArrozPollo(add){
    document.getElementById("pedidos").value += "Arroz con Pollo \n " ;
    total += add;
    document.getElementById("precio").innerHTML= total ;
    pedidos += "2,"
    document.getElementById("pedidoslist").innerHTML= pedidos ;
}

function SecCarne(add){
    document.getElementById("pedidos").value += "Seco de Carne \n " ;
    total += add;
    document.getElementById("precio").innerHTML= total ;
    pedidos += "3,"
    document.getElementById("pedidoslist").innerHTML= pedidos ;
}

function CocaCola(add){
    document.getElementById("pedidos").value += "Coca-cola\n " ;
    total += add;
    document.getElementById("precio").innerHTML= total ;
    pedidos += "4,"
    document.getElementById("pedidoslist").innerHTML= pedidos ;
}


function guardarPedido(){
    console.log("Total :"+ total);
    console.log("StrPdes: "+ pedidos);
    console.log("verificacion: "+ document.getElementById("Targeta").innerHTML );
    console.log("Num. Tarjeta: "+ document.getElementById("tarTemp").innerHTML );
    console.log("Recomendacion: "+ document.getElementById("obs").value );



    if( document.getElementById("Targeta").innerHTML == "<p>No hay Tarjeta</p>") { 
        document.getElementById("mensajePedido").innerHTML = " <b>Ingrese bien sus datos</b>"; 


    } else {
        document.getElementById("mensajePedido").innerHTML = " <b>Exito en el pedido</b>"; 

        location.replace("../Back/crearPedido.php?tot="+total+"&ped="+pedidos+"&tar="+document.getElementById("tarTemp").innerHTML+"&rec="+document.getElementById("obs").value);
    }

    
}


function buscar(){
    location.replace("../Front/menuBusqueda.php");
}


function buscarPortarjeta(){

    var mail = document.getElementById("tarjeta").value; 
    console.log(mail)
    if (mail == "") { 
        document.getElementById("informacion").innerHTML = "<p>No hay Tarjeta</p>"; 


    } else { 
        if (window.XMLHttpRequest) { 
            // code for IE7+, Firefox, Chrome, Opera, Safari 
            xmlhttp = new XMLHttpRequest(); 
        } else { // code for IE6, IE5 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 

        xmlhttp.onreadystatechange = function() { 
            if (this.readyState == 4 && this.status == 200) { 
                //alert("llegue"); 
                document.getElementById("informacion").innerHTML = this.responseText; 
            } 
        }; 
        xmlhttp.open("GET","../Back/mostarFacs.php?tarjeta="+mail,true); 
        xmlhttp.send(); 
    } 
    return false;

}


function buscarPorid(mail){
    
    if (mail == "") { 
        document.getElementById("informacion").innerHTML = "<p>No hay Pedidos</p>"; 


    } else { 
        if (window.XMLHttpRequest) { 
            // code for IE7+, Firefox, Chrome, Opera, Safari 
            xmlhttp = new XMLHttpRequest(); 
        } else { // code for IE6, IE5 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 

        xmlhttp.onreadystatechange = function() { 
            if (this.readyState == 4 && this.status == 200) { 
                //alert("llegue"); 
                document.getElementById("comidas").innerHTML = this.responseText; 
            } 
        }; 
        xmlhttp.open("GET","../Back/mostarComidas.php?id="+mail,true); 
        xmlhttp.send(); 
    } 
    return false;


}


function buscarPorcomida(){

    var mail = document.getElementById("comida").value; 
    console.log(mail)
    if (mail == "") { 
        document.getElementById("informacion").innerHTML = "<p>No hay Texto -Lenin</p>"; 


    } else { 
        if (window.XMLHttpRequest) { 
            // code for IE7+, Firefox, Chrome, Opera, Safari 
            xmlhttp = new XMLHttpRequest(); 
        } else { // code for IE6, IE5 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        } 

        xmlhttp.onreadystatechange = function() { 
            if (this.readyState == 4 && this.status == 200) { 
                //alert("llegue"); 
                document.getElementById("informacion").innerHTML = this.responseText; 
            } 
        }; 
        xmlhttp.open("GET","../Back/mostarFacsComds.php?tarjeta="+mail,true); 
        xmlhttp.send(); 
    } 
    return false;

}
