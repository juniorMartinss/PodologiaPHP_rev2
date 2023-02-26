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
    $sqlSelect = "SELECT * FROM pessoas WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0);
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            
            $nomeCompleto = $user_data['nomeCompleto'];
            $cpf = $user_data['cpf'];
            $data_nascimento = $user_data['data_nascimento'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $senha = $user_data['senha'];
            $sexo = $user_data['sexo'];
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

        <form action="saveEdit.php" method="POST">
      
            <div class="tela-box">
            <h2>Atualizar Conta</h2>
            <p><a href="dashboard2.php"> Voltar </a> </p>
            <div class="input-group">
            <label>Nome Completo: </label>
            <input type="text" name="tNome" placeholder="Informe seu nome" value="<?php echo $nomeCompleto ?>" required>
            </div>

            <div class="input-group">
                <label>CPF: </label>
                <input type="text" name="tCpf" placeholder="xxx.xxx.xxx-xx" value="<?php echo $cpf ?>" required>
            </div>

            <div class="input-group">
                <label>Data de nascimento: </label>
                <input type="date" name="tData" value="<?php echo $data_nascimento ?>" required>
            </div>

            <div class="input-group">
                <label>E-mail: </label>
                <input type="text" name="tEmail" placeholder="Digite seu E-mail" value="<?php echo $email ?>" required>
                </div>

            <div class="input-group">
                <label>Telefone: </label>
                <input type="number" name="tTelefone" placeholder="Digite seu telefone" value="<?php echo $telefone ?>" required>
            </div>

            <div class="input-group">
                <label>Senha: </label>
                <input type="password" name="tSenha" placeholder="Digite sua senha" value="<?php echo $senha ?>" required>
                </div>

            <h4> Genero </h4>

            <div class="gender-group">
                                <div class="gender-input">
                                    <input id="female" value="feminino" type="radio" name="tSexo" <?php echo ($sexo == 'feminino') ? 'checked': '' ?> "required>
                                    <label for="female">Feminino</label>
                                </div>

                                <div class="gender-input">
                                    <input id="male" value="masculino" type="radio" name="tSexo" <?php echo ($sexo == 'masculino') ? 'checked': '' ?> "required>
                                    <label for="male">Masculino</label>
                                </div>

                                <div class="gender-input">
                                    <input id="others" value="outros" type="radio" name="tSexo" <?php echo ($sexo == 'outros') ? 'checked': '' ?>" required>
                                    <label for="others">Outros</label>
                                </div>

                                <div class="gender-input">
                                    <input id="none" value="x" type="radio" name="tSexo" <?php echo ($sexo == 'prefironaodizer') ? 'checked': '' ?>" required>
                                    <label for="none">Prefiro não dizer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update">
                
                
        </form>
    </body>
</html>
