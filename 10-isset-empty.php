<?php include 'includes/header.php';
$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro', 'juan', 'jorge');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];
//empty- si el arreglo esta vacio

var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($cliente));

//isset revisa si un arreglo se ha creado
echo '<br/><br/>';
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));
var_dump(isset($clientes4));

// tambien revisa si una propiedad de un arreglo asociativo existe
echo '<br/><br/>';
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["codigo"]));




include 'includes/footer.php';
