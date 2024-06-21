<?php

require_once "../conexion/conexion.php";

class tareas{

    function obtenertarea(){
        $connection = conection();
        $sql = "SELECT * FROM tareas";
        $respuesta = $connection->query($sql);
        $imagenes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $imagenes;
    }

    function agregartarea($nombre, $estado, $fecha, $hora){
        $connection = conection();
        $sql = "INSERT INTO tareas(nombre, estado, fecha, hora) VALUES('$nombre', '$estado','$fecha', '$hora');";
        $connection->query($sql);
    }
    function eliminartarea($id){
        $connection = conection();
        $sql = "DELETE FROM tareas WHERE (id ='$id');";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    
    public function modificartarea($id, $nombre, $estado, $fecha, $hora){
        $sql = "UPDATE tareas SET nombre='$nombre', estado='$estado', fecha='$fecha', hora='$hora', WHERE (id ='$id');";
        $connection = conection();
        $respuesta = $connection->query($sql);
        return $respuesta;

    }
}

?>