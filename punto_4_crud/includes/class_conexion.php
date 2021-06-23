<?php


class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "la_perla_panaderia";
    private $connect_db;

    function __construct()
    {
        $oso_conectate = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->connect_db = new PDO($oso_conectate, $this->user, $this->pass);
            // echo "la conexion se realizo correctamente :D";
        }catch(Exception $s){
            $this->connect_db = "Error al conectar con la BD :(  ";
            echo $this->connect_db.$s->getMessage();
        }
    }

    function conexion_base_dato(){
        return $this->connect_db;
    }
}

//CONECTA TU BASE DATOS



