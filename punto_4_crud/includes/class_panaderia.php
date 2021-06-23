<?php

require_once "class_conexion.php";

class Producto extends Conexion
{
    private $nombre_user;
    private $tipo_postre_user;
    private $tipo_bizcocho_user;
    private $conexion_bd;


    //METODO CONSTRUCTOR PARA HACER LA CONEXION A LA BASE DE DATOS HEREDANDO LOS METODOS DE LA CLASE CONEXION
    function __construct()
    {
        $this->conexion_bd = new Conexion();
        $this->conexion_bd = $this->conexion_bd->conexion_base_dato();
    }

        //METODO QUE NOS PERMITE A NOSOTROS CREAR UN DATO PARA GUARDALO EN LA BD
        function crear_producto($nombre,$tipo_postre,$tipo_bizcocho)
        {
            $this->nombre_user = $nombre;
            $this->tipo_postre_user = $tipo_postre;
            $this->tipo_bizcocho_user = $tipo_bizcocho;

            $query = "INSERT INTO tb_productos (nombre, tipo_postre, tipo_bizcocho) VALUES (?,?,?)";
            $insert = $this->conexion_bd->prepare($query);
            $array_data_user = array(
                $this->nombre_user,
                $this->tipo_postre_user, 
                $this->tipo_bizcocho_user 
            );
            $insert->execute($array_data_user);
            $id_user_last = $this->conexion_bd->lastInsertId();
            return $id_user_last;
        }

//METODO QUE NOS PERMITE CONSULTAR TODA LA INFORMACION DE UNA TABLA
function consulta_productos()
{
    $query_consulta = "SELECT * FROM tb_productos";
    $consulta = $this->conexion_bd->query($query_consulta);
    $respuesta = $consulta->fetchall(PDO::FETCH_ASSOC);
    return $respuesta;
}

//METODO QUE NOS PERMITE CONSULTAR UN USUARIO EN ESPECIFICO
function consulta_producto_W_id($id )
{
    $query_x_id = "SELECT * FROM tb_productos WHERE id_producto = ?";
    $consulta = $this->conexion_bd->prepare($query_x_id);
    $array_where = array($id);
    $consulta->execute($array_where);
    $respuesta = $consulta->fetch(PDO::FETCH_ASSOC);
    return $respuesta;
}

  //METODO QUE NOS PERMITE A NOSOTROS ACTUALIZAR LOS DATOS DEL USUARIO
function actualiza_producto($id, $nombre, $tipo_postre, $tipo_bizcocho)
{
    $this->nombre_user = $nombre;
    $this->tipo_postre_user = $tipo_postre;
    $this->tipo_bizcocho_user = $tipo_bizcocho;

    $query_update = "UPDATE tb_productos SET nombre = ?, tipo_postre = ?, tipo_bizcocho = ? WHERE id_producto = $id";
    $update = $this->conexion_bd->prepare($query_update);
    $array_update = array(
        $this->nombre_user, 
        $this->tipo_postre_user,
        $this->tipo_bizcocho_user
    );
$respuesta = $update->execute($array_update);
    return $respuesta;
}


    function eliminar_producto($id )
    {
        $query_x_id = "DELETE  FROM tb_productos WHERE id_producto = ?";
        $consulta = $this->conexion_bd->prepare($query_x_id);
        $array_where = array($id);
        $consulta->execute($array_where);
        return "producto eliminado";
    }

}



