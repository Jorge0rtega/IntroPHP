<?php include 'includes/header.php';

$carrito = ['tablet', 'televisión', 'computadora'];

//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//accerder al elemento del array

echo $carrito[1];

//añade un elemento en el indice 3 del arreglo de
$carrito[3] = 'Nuevo Producto';

//añadir un elemento nuevo al finale
array_push($carrito, "audifonos");

//añadir un elemento al inicio del arreglo
array_unshift($carrito, "smartwatch");
echo '<pre>';
echo var_dump($carrito);
echo '</pre>';

//otra forma de hacer un arrego (las dos formas son iguales)

$clientes1 = array('cliente1', 'cliente2', 'cliente3');
echo '<pre>';
echo var_dump($clientes1);
echo '</pre>';



include 'includes/footer.php';
