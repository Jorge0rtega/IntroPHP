<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 100,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>precio: <?php echo $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ?  'disponible' : 'No disponible'; ?></p>
    </li>
<?php
}

include 'includes/footer.php';
