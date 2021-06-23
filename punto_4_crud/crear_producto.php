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
    <?php
    require_once "includes/class_panaderia.php";

    $producto_form = new Producto();

    if(!isset($_GET['update'])){
        if (empty($_POST['name_form_user'])) {
            echo '
                <div class="alert alert-danger" role="alert">
                LLENE TODOS LOS CAMPOS
                </div>
                ';
            return;
        }
        $insert_user = $producto_form->crear_producto($_POST['name_form_user'],$_POST['poste'],$_POST['bizco']);
        echo $insert_user;
    }

    ?>
</body>

</html>