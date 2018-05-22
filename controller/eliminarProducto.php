<?php

  include("../model/Productos.php");

  $method = $_SERVER['REQUEST_METHOD'];
  if($method=="POST"){
    $producto = new Productos();
    $producto->setId($_POST["id"]);
    $resp = $producto->deleteByID($id);
    if($resp[0]){
      http_response_code(200);
    }else{
      http_response_code(400);
    }
    echo $resp[1];
  }
  
  ?>
