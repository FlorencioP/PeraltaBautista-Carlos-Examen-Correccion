var total = 0;
var pedidos = 0;



function addT(){

    location.replace("../Front/registrarTarjeta.php");

}

function addP(){

    location.replace("../Front/doPedido.php");
    total = 0;
}


function buscarT() { 

    var mail = document.getElementById("TargBusc").value; 
    console.log(mail)
    if (mail == "") { 
        document.getElementById("Targeta").innerHTML = " <b> Llene el espacio </b>"; 


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
       
        xmlhttp.open("GET","../Back/TargEncont.php?mail="+mail+"|",true); 
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


