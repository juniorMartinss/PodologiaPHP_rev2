<?php
    namespace PodologiaPHP\html;

    require_once("../DAO/Conexao.php");
    require_once("../DAO/Consultar.php");


    use PodologiaPHP\DAO\Conexao;
    use PodologiaPHP\DAO\Consultar;

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulario Administrador</title>

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

		<!-- menu -->
		<div class="nav-side-menu">
		    <div class="brand"></div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		  
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">
		                <li>
		                  <a href="dashboard.php" id="dashboard"><i class="fa fa-tachometer-alt sidebar-icon" ></i> Agendamentos</a>
						  
		                </li>
						<li>
						<a href="dashboard2.php" id="dashboard"><i class="fa fa-tachometer-alt sidebar-icon" ></i> Formularios Clientes</a>
						</li>
		                
		                <li  data-toggle="collapse" data-target="#ajuda" class="collapsed">
		                    <a href="#"><i class="fa fa-life-ring sidebar-icon"></i> Ajuda <span class="arrow"><i class="fa fa-angle-down"></i></spam></a>
		                </li>
		                <ul class="sub-menu collapse" id="ajuda">
		                    <li><a href="documentacao.php" id="documentacao"><i class="fa fa-angle-right"></i> Documentação</a></li>
		                    <li><a href="suporte.php" id="suporte"><i class="fa fa-angle-right"></i> Suporte <small><i class="fa fa-external-link"></i></small></a></li>
							<li><a href="index.php" id="sair"><i class="fa fa-angle-right"></i> Sair <small><i class="fa fa-external-link"></i></small></a></li>
		                </ul>
		            </ul>
		     </div>
		</div>

		<!-- paginas -->
		<div class="main" id="pagina">
		    
		    

		</div>

	</body>

</html>