<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Formulario Quiz 2</title>
</head>

<body>
<h1>FORMULARIO QUIZ</h1>
<div class="container">
        <div class="row">
            <div class="col-6">
                <form action="vista_post.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name_form_user">Nombre</label>
                            <input type="text" name="name_form_user" class="form-control" id="name_form_user">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apell_form_user">Apellido</label>
                            <input type="text" name="apell_form_user" class="form-control" id="apell_form_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_form_user">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="date_form_user" name="date_form_user">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tipo_form_user">Tipo documento</label>
                            <select id="tipo_form_user" name="tipo_form_user" class="form-control">
                                <option disable selected value="">Seleccione uno...</option>
                                <option value="1">CC</option>
                                <option value="2">TI</option>
                                <option value="3">CE</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="docu_form_user">Numero Documento</label>
                        <input type="number" class="form-control" name="docu_form_user" id="docu_form_user">
                    </div>
                    <div class="form-group">
                        <label for="asunt_form_user">ASUNTO</label>
                        <input type="text" class="form-control" name="asunt_form_user" id="asunt_form_user"><br>
                    </div>
                    <div class="form-group">
                        <label for="menj_form_user">MENSAJE</label>
                        <input type="text" class="form-control" name="menj_form_user" id="menj_form_user"><br>
                    </div><br>
                    <div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
    </div>
</body>

</html>










