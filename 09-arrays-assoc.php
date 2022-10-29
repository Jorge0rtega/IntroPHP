<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Jorge',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo '<pre>';
echo var_dump($cliente['informacion']);
echo '</pre>';

$cliente['codigo'] = 12341431;

echo '<pre>';
echo var_dump($cliente);
echo '</pre>';




include 'includes/footer.php';
