<?php


    namespace PodologiaPHP_rev2\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/CadastroPessoas.php");




    use Exception;

    use mysqli;

    use PodologiaPHP_rev2\DAO\Conexao;
  
    if(!empty($_GET['id']))
    $conexao = new mysqli('localhost', 'root', '', 'sitePodologiaPhp');
    $id = $_GET['id'];
    $sqlDelete = "SELECT * FROM agendamento WHERE id=$id";
    $result = $conexao->query($sqlDelete);

    if($result->num_rows > 0);
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $sqlDelete ="DELETE FROM agendamento WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
        
    }
    header('Location:dashboard.php')
    
?>
