

<?php
	session_start();
	header('content-type: text/html; charset=ISO-8859-1');
	//constantes utilizadas na conexão com o banco de dados
	define ("SERVIDOR", "localhost");
	define ("USUARIO", "root");
	define ("SENHA", "usbw");
	define ("BD", "educatio");
	
	if(isset($_GET["idDISCIPLINA"])){
		$_SESSION["IDDISCIPLINA"] = $_GET["idDISCIPLINA"];
	}
	
	$usuario = $_SESSION['usuario'];

	define ("IDPROF", $usuario['idSIAPE']);
	define ("IDTURMA", $_SESSION["IDTURMA"]);
	define ("IDDISCIPLINA", $_SESSION["IDDISCIPLINA"]);
	
	//conexao com o BD
	$conn = mysqli_connect (SERVIDOR, USUARIO, SENHA);

	//Seleciona o BD
	$bd_select = mysqli_select_db ($conn, BD);

	//seleciona a linha em que o idCPF for igual ao CPF recebido
	$sql = "SELECT * FROM profdisciplinas WHERE idProfessor = " .IDPROF;
	$result = mysqli_query($conn,$sql);
	$linhaProf = mysqli_fetch_array($result);
	
	$sql = "SELECT * FROM turmas WHERE id = " .IDTURMA;
	$result = mysqli_query($conn,$sql);
	$linhaTurma = mysqli_fetch_array($result);
	
	$sql = "SELECT * FROM disciplinas WHERE id = " .IDDISCIPLINA;
	$result = mysqli_query($conn, $sql);
	$linhaDisciplina = mysqli_fetch_array($result);
	
	$sql = "SELECT * FROM etapas WHERE ativo = 'S' AND idOrdem < '5'";
	$resultEtapa = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
	
		<!-- TITULO E LOGO DA PAGINA  -->
		<title> Acessar di&aacute;rio - Professor </title>
		<link rel="shortcut icon" href="imagens/logo.png">
		
		<!-- CSS do Bootstrap -->
		<link href="../../../Estaticos/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="../../../Estaticos/Bootstrap/js/popper.js" type="text/javascript"></script>
		<link href="../../../Estaticos/Bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="PHJL-WEB-Estilo-paginas.css">
		
		<!-- Arquivos js -->
		<script src="../../../Estaticos/Bootstrap/js/jquery-3.2.1.js" type="text/javascript"></script>
		<script src="../../../Estaticos/Bootstrap/js/popper.js" type="text/javascript"></script>
		<script src="../../../Estaticos/Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="PHJL-WEB-Funcoes-diario-prof.js" defer></script>

		<!-- Fontes e icones -->
		<link href="https://fonts.googleapis.com/css?family=Abel|Inconsolata" rel="stylesheet">
		<link href="../../../Estaticos/Bootstrap/css/nucleo-icons.css" rel="stylesheet">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<!--Chama a funcao com o evento onload para carregar a tabela assim que o body for gerado -->
	<body>
		<?php 
			//session_start();
			require "../../Menu-Rodape-Secundarios/caso-2/gerencia-web-menu-interface-professor.php"; 
		?>		
		<div class="wrapper">
			<!-- <div class="section landing-section"> -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 ml-auto mr-auto">
							<h2 class="text-center">ACESSAR DI&Aacute;RIO</h2>
							<?php 
								echo "<h2 class = 'fonteCabecalho'> Disciplina de " .$linhaDisciplina[2] ."</h2>";
							
								while($linhaEtapas = mysqli_fetch_array($resultEtapa)){
									$sql = "SELECT * FROM conteudos WHERE idDisciplina = " .$linhaDisciplina[0] ." AND idEtapa = " .$linhaEtapas[0] ." AND ativo = 'S'";
									$result = mysqli_query($conn, $sql);
									
									echo "<h3 class = 'fonteCabecalho'>" .$linhaEtapas[0] ."&ordf; Etapa </h3>";
									
                                    echo "<table class = 'table table-hover'>";
									echo "<tbody id = 'DIVbim" .$linhaEtapas[0] ."ID'>";

									while($linhaConteudo = mysqli_fetch_array($result)){
										echo "<tr onclick = 'mostraConteudo(" .$linhaConteudo[0] .")'>";
										echo "<td class = 'fonteTexto'>";
										echo "<span id = 'Conteudo" .$linhaConteudo[0] ."Bim" .$linhaConteudo[1] ."ID'>" .$linhaConteudo[3]."</span></br>";;
										echo "</td>";
										echo "</tr>";
									}
								    echo "<tr style = 'cursor : pointer;'  id = 'novoConteudoBim" .$linhaEtapas[0] ."' onclick = 'insereConteudo(\"novoConteudoBim" .$linhaEtapas[0] ."\", $linhaEtapas[0])'>";
									echo "<td class = 'fonteTexto'>";
									echo "<span> + Adicionar Conte&uacute;do </span>";
									echo "</td>";
									echo "</tr>";
									echo "</tbody>";
                                    echo "</table>";
									
								}
							?>
							<button class='btn btn-info' onclick='voltaPagina("PHJL-WEB-Escolhe-disciplina-diario")'>Voltar</button>
						</div>
					</div>
					
				</div>
			</div>	
		</div>
		<br><br><br>
		<?php 
		require "../../Menu-Rodape-Secundarios/caso-2/gerencia-web-rodape.php"; 
		?>
	</body>
</html>