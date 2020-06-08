Esta es la estructura de base de datos que uso para guardar los datos de esta pag la cual es sobre un restaurante

![1](/READMEIMG/1.png?raw=true "Title")
Aqui estaria mas a detalle los datos de las tablas:

tarjetas:
![2](/READMEIMG/2.png?raw=true "Title")

pedidos:
![3](/READMEIMG/3.png?raw=true "Title")

comidas:
![4](/READMEIMG/4.png?raw=true "Title")

Lo primero que se iso para empesar la elaboracion de la pagina fue dividir las funciones pricipales en el menu principal, donde el usuario podia registrar su tarjeta y luego prodecer a realizar compras, o ir directamente a buscar los pedidos

![5](/READMEIMG/5.png?raw=true "Title")

Al hacer click sobre el boton registrar targeta no dirigimos a esta interfaz donde se podran añadir los datos 

![6](/READMEIMG/6.png?raw=true "Title")

Al hacer click en añadir la targeta se guarda en la base de datos y volvemos a la interfaz principal

![7](/READMEIMG/7.png?raw=true "Title")

luego al hacer click en realizar pedido se habre esta enterfaz

![8](/READMEIMG/8.png?raw=true "Title")

donde se necesita antes que nada poner una targeta de pago registrada, en caso de no haber una targeta registrada te lo dice el sistema (Se utilizo AJAX)

![9](/READMEIMG/9.png?raw=true "Title")

En Caso de que si exista: 

![10](/READMEIMG/10.png?raw=true "Title")

El resto de datos el cliente los puede poner tranquilamente
y puede escojer las opciones del menu que se iran mostrando deacuerdo a lo que seleccione (Se utilizo AJAX)

![11](/READMEIMG/11.png?raw=true "Title")

Una vez asegurada la existencia de la tarjeta el cliente puede hacer click en "Realizar Pedido" Esto hace que todos los productos que alla selecionado se guarden y se cree la factura en la base de datos:

Aqui se muestra guardado el pedido en la base de datos:

![12](/READMEIMG/12.png?raw=true "Title")

Y aqui se pueden mostrar los pedidos enlazados al pedido:

![13](/READMEIMG/13.png?raw=true "Title")

Con esto completariamos el proceso de guardado de datos.

Para buscar entre los pedidos existen 2 opciones: La de buscar por tarjeta de credito (Todos los pedidos realizados con esa tarjeta de credito) y el nombre de la comida (Todos los Pedidos que contengan esa comida)

![14](/READMEIMG/14.png?raw=true "Title")

Aqui mostramos como es cuando se busca por numero de tarjeta:

![15](/READMEIMG/15.png?raw=true "Title")

Y aqui como es cuando se busca por Nombre de la comida:

![16](/READMEIMG/16.png?raw=true "Title")

En ambos casos, al hacer click en "Pedidos" se enlistaran las comidas pedidas dentro de ese pedido

![17](/READMEIMG/17.png?raw=true "Title")

Eso seria todo.