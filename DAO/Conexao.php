<?php
namespace PodologiaPHP_rev2\DAO;

use Exception;

class Conexao{

    private $conn;

    public function conectar(){
        try{
            $this->conn = mysqli_connect('localhost','root','','sitePodologiaPhp');
            if($this->conn){
                //echo "<br>Conectado com sucesso!";
                return $this->conn;
            }
        }catch(Exception $erro){
            echo $erro;
        }
    }//fim do método conectar

    public function escape_string($string) {
        return mysqli_real_escape_string($this->conectar(), $string);
    }

    public function getMysqli() {
        if (!$this->conn) {
            $this->conectar();
        }
        return $this->conn;
    }

}//fim da classe