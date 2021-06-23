<?php
require_once "includes/class_panaderia.php";

$producto_form = new producto();
$producto = $producto_form->consulta_productos();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios existentes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <body>
        
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo postre</th>
                    <th scope="col">Tipo bizcocho</th>
                
                </tr>
            </thead>
            <tbody>

                <?php


                for ($miel = 0; $miel < sizeof($producto); $miel++) {
                ?>
                    <tr>
                        <td><?php echo $producto[$miel]['nombre'] ?></td>
                        <td><?php echo $producto[$miel]['tipo_postre'] ?></td>
                        <td><?php echo $producto[$miel]['tipo_bizcocho'] ?></td>
                        <td>
                            <a href="editar_producto.php?gato_user=<?php echo $producto[$miel]['id_producto'] ?>">
                                <button class="btn btn-danger">Editar</button>
                            </a>
                        </td>
                        <td>
                        <td>
                            <a href="eliminar_producto.php?michi_user=<?php echo $producto[$miel]['id_producto'] ?>">
                                <button class="btn btn-danger">Eliminar</button>
                            </a>
                        </td>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
    </body>
</body>

</html>