<?php
    namespace PodologiaPHP_rev2\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Consultar.php");


    use Exception;

    use mysqli;

    use PodologiaPHP_rev2\DAO\Conexao;
    use PodologiaPHP_rev2\DAO\Consultar;
    $conexao = new mysqli('localhost', 'root', '', 'sitePodologiaPhp');
    $sql = "SELECT * FROM pessoas ORDER BY id DESC";
    $result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../CSS/Dash.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="script.js"></script>
		
	</head>

	<body>  
<div class="container">

    <div class="row">
        <div class="col">
            
            <form>
            <a href="telaAdm.php">HOME</a></li>
                <div class="form-group row">
                    <label class="col-sm-9 col-form-label">Clientes Cadastrados:</label>
                    <div class="col-sm-3">
                        <select class="form-control-plaintext borda" id="competencia">
                            <option value="">-- Selecione </option>
                            <option value="2023-02">Feveiro / 2023</option>
                            <option value="2023-03">Março / 2023</option>
                            <option value="2023-04">Abril / 2023</option>
                            <option value="2023-05">Maio / 2023</option>
                        </select>
                    </div>
                </div>
            </form>

            <hr />

        </div>
    </div>
    
    
    <div class="row mb-3">
        
            <div class="card">
                <div class="card-header">
                    Clientes
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">CPF</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Senha</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nivel</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nomeCompleto']."</td>";
            echo "<td>".$user_data['cpf']."</td>";
            echo "<td>".$user_data['data_nascimento']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['telefone']."</td>";
            echo "<td>".$user_data['senha']."</td>";
            echo "<td>".$user_data['sexo']."</td>";
            echo "<td>".$user_data['nivel']."</td>";
            echo "<td>
                <a class='btn btn-sm btn-primary' href='edit2.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
                </a>
                <a class='btn btn-sm btn-danger' href='delete2.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                </svg>
                </a>
                </td>";
            echo "</tr>";
        }
    ?>
    </tbody>
    </table>
    </div>
</body>
</html>
    
             