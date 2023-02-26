<?php


    namespace PodologiaPHP_rev2\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Recuperar.php");


    use Exception;

    use mysqli;

    use PodologiaPHP_rev2\DAO\Conexao;
    $conexao = new mysqli('localhost', 'root', '', 'sitePodologiaPhp');
    $sqlSelect = "SELECT * FROM pessoas ORDER BY id DESC";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0);
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            
            $senha = $user_data['senha'];
           
        }
    }
     
       
    
       
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/Estilo.css">
        <title>Cadastrar</title>
    </head>
    <body>  
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <form method="POST" action="">
      
            <div class="tela-box">
            <h2>Recuperaração de senha!</h2>
            <p> Você também pode: <a href="index.php"> Voltar ao Login </a> </p>
        <div class="input-group">
            <label>Email: </label>
            <input placeholder="Seu email" name="tEmail" type="text"/><br><br>
        </div>
        <div class="input-group">
            <label>CPF: </label>
            <input placeholder="Seu CPF" name="tCpf" type="text"/><br><br>
        </div>
        <div class="input-group">
        <input name="ok" value="Recuperar Minha Senha" type="submit">
        <div class="input-group">
            
                
               
        </form>
    </body>

   
</html>