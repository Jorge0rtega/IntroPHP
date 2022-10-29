<?php include 'includes/header.php';

// in_array - busca los elementos de un arreglo
$carrito = ['tablet', 'computadora', 'television'];
var_dump(in_array('tablet', $carrito));
var_dump(in_array('audigfonos', $carrito));

//ordenar elementos de un arreglo
$numeros = array(1, 4, 6, 3, 6, 8);
sort($numeros);
rsort($numeros);

echo '<pre>';
var_dump($numeros);
echo '</pre>';

//ordenar arreglos asociativos
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'juan'
);

echo '<pre>';
var_dump($cliente);
echo '</pre>';

asort($cliente);
arsort($cliente);
ksort($cliente);
krsort($cliente);

echo '<pre>';
var_dump($cliente);
echo '</pre>';






include 'includes/footer.php';
