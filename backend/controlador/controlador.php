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
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $result = (new tareas())->agregartareaModelo($nombre, $fecha, $hora, $estado);
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
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];
    $resultado = (new tareas())->modificartarea($nombre,$fecha, $hora, $estado);
    echo json_encode($resultado);
}


?>