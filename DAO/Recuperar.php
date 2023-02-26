<?php

namespace PodologiaPHP_rev2\DAO;

require_once('Conexao.php');

use Exception;
use mysqli;
use PodologiaPHP_rev2\DAO\Conexao;

if(isset($_POST['ok'])){

    $novaSenha = substr(md5(time()), 0, 6);

    $con = new Conexao();
    $mysqli = $con->getMysqli();

    if ($mysqli->connect_errno) {
        throw new Exception("Failed to connect to MySQL: " . $mysqli->connect_error);
    }

    $email = $mysqli->real_escape_string($_POST['tEmail']);
    $cpf = $mysqli->real_escape_string($_POST['tCpf']);

    $query = "SELECT * FROM pessoas WHERE email = '".$email."'";
    $result = $mysqli->query($query);

    if ($result->num_rows == 0) {
        echo "Email não preenchido/ não encontrado no banco de dados!";
    } else {
        
        $query = "UPDATE pessoas SET senha = '".$novaSenha."' WHERE email = '".$email."' AND cpf = '".$cpf."'";
        $result = $mysqli->query($query);

        if ($mysqli->affected_rows > 0) {
            echo "Senha atualizada com sucesso!<br><br>";
            $senhaAtualizada = $novaSenha;
            header('Location: ../html/SalvaSenha.php');
            exit();
        } else {
            echo "Erro ao atualizar a senha!";
        }
    }
}  
?>
