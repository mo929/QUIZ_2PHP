
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
        <div class="row">
            <div class="col-6">
                <form action="crear_producto.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_form_user">Nombre</label>
                            <input type="text" name="name_form_user" class="form-control" id="name_form_user">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="poste">Tipo postre</label>
                            <input type="text" name="poste" class="form-control" id="poste">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bizoco">Tipo bizcocho</label>
                        <input type="text" class="form-control" name="bizco" id="bizco">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <a href="listar_productos.php?gato_user=4">Consultar info</a>
    </div>
</body>

</html>