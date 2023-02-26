<?php

    namespace PodologiaPHP_rev2\DAO;

    use Exception;


    require_once('Conexao.php');

    use PodologiaPHP_rev2\DAO\Conexao;

    class Agendar{

        public function cadastrar(Conexao $conexao, string $nomeDaTabela, string $data_agendamento, string $hora_agendamento, string $nome_paciente, string $observacoes){
            try{
                $conn = $conexao->conectar();//Conexão com banco de dados

                //verificar se já existe agendamento para data e hora escolhidos
                $sqlVerifica = "SELECT * FROM $nomeDaTabela WHERE data_agendamento = '$data_agendamento' AND hora_agendamento = '$hora_agendamento'";
                $resultVerifica = mysqli_query($conn, $sqlVerifica);
                if(mysqli_num_rows($resultVerifica) > 0){
                    return "<br><br> Já existe agendamento para data e hora escolhida, favor escolher um novo horário";//msg que irá aparecer para o usuário
                }

                //Verificar se está dentro do período de trabalho (segunda a sexta)
                $dt = new \DateTime($data_agendamento);
                if($dt->format("N") >= 6){// dia 6 e 7 são sábados e domingos
                    return "<br><br>A Clínica não funciona nos finais de semana";//msg que irá aparecer para o usuário
                }

                //Hora de ínicio e fim do expediente
                $horario_inicio = new \DateTime("08:00");
                $horario_fim  = new \DateTime("18:00");
            
                //intervalos de 30min em cada consulta em relação ao horario de inicio e fim de expediente
                while($horario_inicio < $horario_fim){
                    if($horario_inicio->format("H:i") == $hora_agendamento){
                        break;
                    }
                    $horario_inicio->add(new \DateInterval("PT30M"));//Padrão ISO 8601 (norma internacional)
                }

                if($horario_inicio >= $horario_fim){
                    return "<br><br> Não foi possível agendar a consulta, a clínica funciona das 08:00 às 18:00 de segunda à sexta";
                }

                //Inserir o agendamento
                $sql = "INSERT INTO $nomeDaTabela (id, data_agendamento, hora_agendamento, nome_paciente, observacoes) values ('', '$data_agendamento', '$hora_agendamento', '$nome_paciente', '$observacoes')";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);//fechando a conexão com sucesso!

                if($result){
                    return "<br><br>Consulta agendada com sucesso!";
                }
                return "<br><br>Erro ao realizar a agendamento!";
            }catch(Exception $erro){
                echo $erro;
            }//fim do TRY CATCH (tramento de erros)
        }//fim da função cadastrar

    }//fim da classe agendar




?>