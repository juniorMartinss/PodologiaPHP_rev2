<?php
    namespace PodologiaPHP_rev2\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Agendar.php");


    use PodologiaPHP_rev2\DAO\Conexao;
    use PodologiaPHP_rev2\DAO\Agendar;

?>

<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/Estilo.css">
        <title>Agendamento de Consulta</title>
    </head>
    <body>
    <div class="tela-box">
            <h2>Consultar para Avaliação</h2>
            <p> Voltar para minha tela inicial? <a href="indexAgendar.php"> HOME </a> </p>
        <form method="POST">
        <div class="tela-box">
            <div class="input-group">
            <label for="data_agendamento">Data:</label>
            <input type="date" id="data_agendamento" name="data_agendamento">
            <br><br>
            </div>
            <div class="input-group">
                <label for="hora_agendamento">Hora:</label>
                <input type="time" id="hora_agendamento" name="hora_agendamento">
                <!-- <select id="hora_agendamento" name="hora_agendamento"></select>
                <script>
                    var select = document.getElementById('hora_agendamento');
                    var inicio = new Date(2023, 2, 1, 8, 0, 0); // data de inicio do expediente
                    var fim = new Date(2023, 2, 1, 18, 0, 0); // data do fim do expediente
                    var intervalo = 30; // intervalo de 30 minutos

                    while (inicio <= fim) {
                        var option = document.createElement("option");
                        var hora = inicio.getHours();
                        var minutos = inicio.getMinutes() < 10 ? '0' + inicio.getMinutes() : inicio.getMinutes(); // formata os minutos com zero à esquerda, se necessário
                        option.value = hora + ":" + minutos; // formatando a hora HH:MM
                        option.text = hora + ":" + minutos;
                        select.add(option);
                        inicio.setTime(inicio.getTime() + intervalo * 60000); // adiciona o intervalo de 30 minutos em milisegundos
                    }
                </script>-->
            </div>

            <br><br>
            <div class="input-group">
            <label for="nome_paciente">Nome do Paciente:</label>
            <input type="text" id="nome_paciente" name="nome_paciente">
            <br><br>
            </div>
            <div class="input-grou">
            <label for="observacoes">Observações:</label>
            <textarea id="observacoes" name="observacoes"></textarea>
            <br><br>
            </div>
            <div class="input-group">
                    <br><br><button>Agendar</button>
                </div>
            

            <?php
               
               if(isset($_POST['data_agendamento']) && isset($_POST['hora_agendamento']) && isset($_POST['nome_paciente']) && isset($_POST['observacoes'])){
                if($_POST['data_agendamento'] != "" && $_POST['hora_agendamento'] != "" && $_POST['nome_paciente'] != "" && $_POST['observacoes'] != ""){
                    $conexao = new Conexao();
                    $cad     = new Agendar();
                    echo $cad->cadastrar($conexao, "agendamento",$_POST['data_agendamento'],$_POST['hora_agendamento'], $_POST['nome_paciente'], $_POST['observacoes']);
                    return;
                }
                echo "Erro, preencha o campo!";
            }
            
            ?>
        </form>
    </div>
    </body>
</html>