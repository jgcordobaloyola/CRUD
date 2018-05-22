<?php
include_once '../model/Productos.php';

  $method = $_SERVER['REQUEST_METHOD'];
  if($method=="GET"){
    $producto = new Productos();
    $producto->setNombre($_GET["nombre"]);
    $producto->setCodigo($_GET["codigo"]);
    $producto->setValor($_GET["valor"]);
    //guardamos
    $resp = $producto->save();
    if($resp[0]){
      http_response_code(200);
    }else{
      http_response_code(400);
    }
    echo $resp[1];
  }

?>