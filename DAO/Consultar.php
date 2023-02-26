<?php
     namespace PodologiaPHP_rev2\DAO;

     require_once('Conexao.php');

    use Exception;
    use PodologiaPHP_rev2\DAO\Conexao;

    //echo "<br> PQ o CÓDIGO NÃO está RODADNDO CORRETO?";

    class Consultar{

        public function consultarIndividual(
            Conexao $conexao, 
            string $pessoas,
            string $email,
            string $senha)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "select email,senha,nivel from $pessoas where email = '$email'";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['email'] == $email and $dados['senha'] == $senha and $dados['nivel'] == "cliente"){
                        echo "Conectado";
                        header('Location: ../html/indexAgendar.php');
                        return;//Encerrar a operacao
                    }else{
                        if($dados['email'] == $email and $dados['senha'] == $senha and $dados['nivel'] == "administrador"){
                            echo "Conectado";
                            header('Location: ../html/telaAdm.php');
                            return;//Encerrar a operacao
                        }
                    }
                }//fim do while
                return "Email ou senha não encontrados!!";
                
                //header('Location: ../html/index.php');
            }
            catch(Exception $erro)
            {
                echo $erro;
            } 
        }//fim do método  
    }

    

    if(isset($_POST["submit"])){
        $con = new Conexao();
        $consul = new Consultar();
        $consul->consultarIndividual($con, "pessoas",$_POST['email'], $_POST['tSenha']);
        
    }
    


?>