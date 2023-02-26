<?php

    namespace PodologiaPHP_rev2\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/CadastroPessoas.php");


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
            
            $email = $user_data['email'];
            $cpf = $user_data['cpf'];
            $novaSenha = $user_data['senha'];

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

    <title>Senha Atualizado com sucesso</title>
    <body>
    <div class="tela-box">
            <h2>Senha Atualizado com Sucesso</h2>
        <form method="POST">
        <div class="tela-box">
            <div class="input-group">
            <label for="data_agendamento">Email:</label>
            <input type="text" id="TEmail" name="Email" value="<?php echo $email ?>" required>
            <br><br>
            </div>
            <div class="input-group">
            <label for="hora_agendamento">CPF:</label>
            <input type="text" id="TEmail" name="Email" value="<?php echo $cpf ?>" required>
            </div>
            <br><br>
            <div class="input-group">
            <label for="hora_agendamento">Nova Senha:</label>
            <input type="senha" id="Tsenha" name="senha" value="<?php echo $novaSenha ?>" required>
           
            <br><br>
            </div>
            </form>
            <div class="input-group">
            <ul>
                <a href="indexAgendar.php">Atualizar</a>
            </ul>
        </div>
               
        
    </div>
    </body>
</html>
