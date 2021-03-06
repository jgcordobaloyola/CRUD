<?php

//include_once '../config/Connect.php';
include_once '../config/conexion.php';


class Productos {

    public $id = "";
    public $nombre = "";
    public $codigo = "";
    public $valor = "";

    function getId() {
        return $this->id;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getValor() {
        return $this->valor;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    public function save() {
        $db = new DataBase();
        $conn = $db->connect();

        if ($conn) {
            $query = "INSERT INTO producto (nombre,codigo,valor) VALUES ('".$this->nombre."','".$this->codigo."',".$this->valor.")";
            print $query;
            echo $query;

            if ($conn->query($query) === TRUE) {
                return array(TRUE, $this->toJSON());
            } else {
                return array(FALSE, $conn->error);
            }
        }
    }
    
    public function deleteById($nId){
        $db= new Database();
        $conn = $db->connect();
        if ($conn) {
            $query = "Delete producto where id=$this->$nId";
            echo $query;
            if ($conn->query($query)===true) {
                return array(TRUE, $this->toJSON());
            }else{
                return array(FALSE, $conn->error);
                }
            }
        }
    
    
    public function updateByID($id,$nNombre,$nCodigo,$nValor){
        $db= new Database();
        $conn = $db->connect();
        if ($conn) {
            $query="UPDATE producto SET nombre='".$nNombre."',"
                    ."SET codigo='".$nValor."',"
                    ."SET valor = '".$nValor."'"
                    . "WHERE id=$id";
            echo $query;
            if ($conn->query($query)===true) {
                return array(TRUE, $this->toJSON());
            }else{
                return array(FALSE, $conn->error);
            }
        }    
    }
            
    

    function toJSON() {
        $arr = array(
            'id' => "",
            'username' => $this->username,
            'password' => $this->password,
        );
        return json_encode($arr);
    }

}

?>