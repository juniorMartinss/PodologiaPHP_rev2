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
    $sqlSelect = "SELECT * FROM agendamento WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0);
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            
            $data_agendamento = $user_data['data_agendamento'];
            $hora_agendamento = $user_data['hora_agendamento'];
            $nome_paciente = $user_data['nome_paciente'];
            $observacoes = $user_data['observacoes'];
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

    <title>Agendamento de Consulta</title>
    <body>
    <div class="tela-box">
            <h2>Atualizar Avaliação</h2>
            <p> Voltar para minha tela inicial? <a href="dashboard.php"> VOLTAR </a> </p>
        <form method="POST">
        <div class="tela-box">
            <div class="input-group">
            <label for="data_agendamento">Data:</label>
            <input type="date" id="data_agendamento" name="data_agendamento" value="<?php echo $data_agendamento ?>" required>
            <br><br>
            </div>
            <div class="input-group">
            <label for="hora_agendamento">Hora:</label>
            <input type="time" id="hora_agendamento" name="hora_agendamento" value="<?php echo $hora_agendamento ?>" required>
            </div>
            <br><br>
            <div class="input-group">
            <label for="nome_paciente">Nome do Paciente:</label>
            <input type="text" id="nome_paciente" name="nome_paciente" value="<?php echo $nome_paciente ?>" required>
            
            </div>
            <br><br>
            <div class="input-group">
            <label for="observacoes">Observações:</label>
            <input type="observacoes" id="observacpes" name="observacoes" value="<?php echo $observacoes ?>" required>
           
            <br><br>
            </div>
            <div class="input-group">
                    <button>Atualizar</button>
                </div>
        </div>
        </form>
    </div>
    </body>
</html>
