<?php
require_once "includes/class_panaderia.php";

$producto_form = new Producto();
$producto = $producto_form->consulta_producto_W_id($_GET['gato_user']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="crear_producto.php?update=1" method="POST">
        <div class="form-row">
        <div class="form-group col-md-6">
            <input type="hidden" name="id_form_user" value="<?php echo $producto['id_producto'] ?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name_form_user">Nombre Producto</label>
                    <input type="text" name="name_form_user" class="form-control" id="name_form_user" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="poste">Tipo postre</label>
                    <input type="text" name="poste" class="form-control" id="poste" value="<?php echo $producto['tipo_postre'] ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="bizco">Tipo bizcocho</label>
                <input type="text" class="form-control" id="bizco" name="bizco" value="<?php echo $producto['tipo_bizcocho'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar datos</button> <br>
            <br>
        </form>
    </div>
</body>

</html>