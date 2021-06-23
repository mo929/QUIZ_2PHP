<?php
//EN ESTE ARCHIVO VA TU CLASE


class Personaje {
    public $nombre;
    public $apellido;
    public $identificacion;
    public $respuesta;

    function __construct($nombre_1, $apellido_1, $identificacion_1)
    {
        $this->nombre = $nombre_1;
        $this->apellido = $apellido_1;
        $this->identificacion = $identificacion_1;
    }

function dato_requi (){
$this-> respuesta = $this -> nombre .'_'.$this-> apellido .'_'.$this -> identificacion;
return $this->respuesta;
}

}







