<?php
require_once "includes/class_panaderia.php";
$producto = new producto();

$id_producto = $_GET['michi_user'];

$respuesta = $producto-> eliminar_producto($id_producto);

echo $respuesta

?>
