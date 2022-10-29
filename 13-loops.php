<?php include 'includes/header.php';

// while 

$i = 0; //inicializador

while ($i < 10) {
    echo $i . '<br/>';

    $i++;
}

echo '<br>';

//do while

$k = 0;

do {
    echo $j . '<br>';

    $j++;
} while ($j < 10);

/**
 * 3 imprimir fizz
 * 5 imprimir buzz
 * 3 y 5 imprimir fizz buzz
 */

//for loop
for ($i = 0; $i < 50; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . ' -fizzbuzz <br>';
    } elseif ($i % 3 === 0) {
        echo $i . ' -fizz <br>';
    } elseif ($i % 5 === 0) {
        echo $i . ' -buzz <br>';
    } else {
        echo $i . '<br>';
    }
}

//for each
$clientes = array('pedro', 'luis', 'miguel');

foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}
$cliente = [
    'nombre' => 'jorge',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach ($cliente as $key => $valor) {
    echo $key . ' - ' . $valor . '<br>';
}

include 'includes/footer.php';
