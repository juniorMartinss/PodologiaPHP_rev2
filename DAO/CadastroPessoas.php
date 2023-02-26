<?php 
    namespace PodologiaPHP_rev2\DAO;

    use DateTime;
use Exception;

    require_once('Conexao.php');

    class CadastroPessoas{
        
        public function cadastrar(Conexao $conexao, string $nomeDaTabela, string $nomeCompleto, string $cpf,string $data_nascimento, string $email, string $telefone, string $senha, string $sexo)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (id, nomeCompleto, cpf, data_nascimento, email, telefone, senha, sexo) 
                values ('','$nomeCompleto','$cpf','$data_nascimento', '$email', '$telefone', '$senha', '$sexo')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco
                
                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    echo "<br><br>Inserido com sucesso!";
                        header('Location: ../html/indexAgendar.php');
                        return;//Encerrar a operacao
                    }//fim do if
                return "<br><br>Não Inserido!";
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }//fim da classe
?>