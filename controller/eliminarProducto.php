<?php

  include("../model/Productos.php");

  $method = $_SERVER['REQUEST_METHOD'];
  if($method=="POST"){
    $user = new User();
    $user->setUsername($_POST["id"]);
    $resp = $user->save();
    if($resp[0]){
      http_response_code(200);
    }else{
      http_response_code(400);
    }
    echo $resp[1];
  }
  
  ?>
