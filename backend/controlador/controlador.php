<?php

require_once "../modelo/modelo.php";

$request = $_GET['request'];

switch ($request){
    case "agregartarea":
        agregartarea();
        break;
    case "obtenertarea":
        obtenertarea();
        break;
    case "eliminartarea":
        eliminartarea();
        break;
    case "modificartarea":
        modificartarea();
        break;
}

function agregartarea(){
    $nombre = $_POST['nombre'];
    $estado = $_POST['estado'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $result = (new tareas())->agregartarea($nombre, $estado, $fecha, $hora);
    echo json_encode($result);
}

function obtenertarea(){
    $result = (new tareas())->obtenertarea();
    echo json_encode($result);
}
  
function eliminartarea(){
    $id = $_POST['id'];
    $resultado = (new tareas())->eliminartarea($id);
    echo json_encode($resultado);

}

function modificartarea(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $estado = $_POST['estado'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $resultado = (new tareas())->modificartarea($id, $nombre, $estado, $fecha, $hora);
    echo json_encode($resultado);
}


?>