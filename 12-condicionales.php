<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado || $admin) {
    echo 'usuario autenticado correctamente';
} else {
    echo 'usuario no autenticado, inicia sesión';
}

//if anidados
$cliente = [
    'nombre' => 'jorge',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo '<br>';

if (!empty($cliente)) {
    echo 'El arreglo del cliente no esta vacio';

    if ($cliente['saldo'] > 0) {
        echo 'el cliente tiene saldo disponible';
    } else {
        echo 'No hay saldo';
    }
}

//switch
echo '<br>';

$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo 'el lenguaje es PHP';
        break;
    case 'Java':
        echo 'el lenguaje es Java';
        break;
    case 'HTML':
        echo 'el lenguaje es HTML';
        break;
    default:
        echo 'algun mensaje no sé cual es';
        break;
}


include 'includes/footer.php';
