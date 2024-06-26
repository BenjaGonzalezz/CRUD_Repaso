<?php

require_once "../conexion/conexion.php";

class tareas{

    function obtenertarea(){
        $connection = conection();
        $sql = "SELECT * FROM tareas";
        $respuesta = $connection->query($sql);
        $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $tareas;
    }

    function agregartareaModelo($nombre, $fecha, $hora, $estado){
        $connection = conection();
        $sql = "INSERT INTO tareas(nombre, fecha, hora, estado) VALUES('$nombre','$fecha', '$hora', '$estado');";
        $connection->query($sql);
    }
    function eliminartarea($id){
        $connection = conection();
        $sql = "DELETE FROM tareas WHERE (id ='$id');";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
    
    public function modificartarea($nombre, $estado, $fecha, $hora){
        $sql = "UPDATE tareas SET nombre='$nombre', fecha='$fecha', hora='$hora', estado='$estado'";
        $connection = conection();
        $respuesta = $connection->query($sql);
        return $respuesta;

    }
}

?>