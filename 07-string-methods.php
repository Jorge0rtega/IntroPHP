<?php include 'includes/header.php';
$nombreCliente = '    Jorge Ortega   ';

//conocer la extencion de un String 
echo strlen($nombreCliente);
var_dump($nombreCliente);

//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($nombreCliente);

//convertir en mayusculas
echo strtoupper($nombreCliente);

//convertir en minusculas
echo strtolower($nombreCliente);

$email1 = "correo@gmail.com";
$email2 = "Correo@gmail.com";
var_dump(strtolower($email1) == strtolower($email2));

//revisar si un string existe
echo "posición";
echo strpos($nombreCliente, "Jorge");

$tipoCliente = "premium";
echo "<br/>";

echo "el cliente " . $nombreCliente . " es " . $tipoCliente;
echo "el cliente {$nombreCliente}  es  {$tipoCliente}";








include 'includes/footer.php';
