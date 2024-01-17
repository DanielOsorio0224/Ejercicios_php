<?php
//el modelo se encarga de todo lo relacionado con la base de datos
class Conexion{

    private $con;

    public function __construct(){
        $this->con = new mysqli('localhost','root','');
    }

    public function getUsers(){
        $query = $this->con->query('SELECT * FROM usuarios');

        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }

        return $retorno;
    }
}

?>