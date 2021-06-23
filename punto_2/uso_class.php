<?php
require_once "class_nombre.php";
//EN ESTE ARCHIVO USAS TU CLASE

$datos_personaje = new personaje ('itachi','pita',5278593);

$base = $datos_personaje->dato_requi();
echo $base;
echo "<br><hr>";




