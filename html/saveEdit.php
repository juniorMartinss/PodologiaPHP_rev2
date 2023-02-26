<?php


    namespace PodologiaPHP\html;

    require_once("../DAO/Conexao.php");



    use Exception;

    use mysqli;

    use PodologiaPHP\DAO\Conexao;

    if(!empty($_POST['id']))
    $conexao = new mysqli('localhost', 'root', '', 'sitePodologiaPhp');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nomeCompleto = $_POST['nomeCompleto'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];
        
        $sqlupdate = "UPDATE pessoas SET nomeCompleto='$nomeCompleto',cpf='$cpf',data_nascimento='$data_nascimento',email='$email',telefone='$telefone',senha='$senha',sexo='$sexo'
        WHERE id='$id'";
        $result = $conexao->query($sqlupdate);
    }
    header('Location: dashboard2.php');

?>