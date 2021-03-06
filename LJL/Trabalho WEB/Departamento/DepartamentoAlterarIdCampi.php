<?php
	ini_set('default_charset','UTF-8');

	$strNomeServer = "localhost";
	$strNomeUsuario = "root";
	$strSenha = null;
	$strDBnome = "Educatio";

	//Cria conexão
	$conn = new mysqli($strNomeServer, $strNomeUsuario, $strSenha);
	//Verifica conexão
	if ($conn->connect_error) {
   		die("Falha na conexão: " . $conn->connect_error."<br>");
	}

	//Variável para verificar o Campus dos departamentos
	$strCampi = $_GET['strCampi'];
	$strSQL = $conn->query("SELECT id, nome FROM `Educatio`.`campi` WHERE nome ='".$strCampi."'");
	while($arrLinha = $strSQL->fetch_assoc()) {
		$intIdCampi = $arrLinha['id'];
	}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Departamento</title>
	<meta charset="utf-8">

	<!-- CSS do Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap.css" rel="stylesheet"/>

	<!-- CSS do grupo -->
 	<link href="css/CSSGrupo.css" rel="stylesheet" />

	<!-- Arquivos js -->
	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>

	<!-- Fontes e icones -->
	<link href="css/nucleo-icons.css" rel="stylesheet">

</head>

<body>

<div class="wrapper">
	<div class="container">
		<div class="col-md-8 ml-auto mr-auto">

			<h1 class="text-center">Alterar Id-Campi do Departamento</h1>

			<form method="POST" action="" class="contact-form">

				<div class="input-group">
					<span class="input-group-addon"><i class="nc-icon nc-bank"></i></span>
					<input type="text" name="Onde" id="txt_consulta" placeholder="Digite o Nome do Departamento que será alterado" class="form-control" required='required'>
				</div>							
				
				<table class="table table-hover" required='required' id="tabela">
					<!-- Pega os dados do banco e coloca no select -->
					<?php $strSQL = $conn->query("SELECT id, nome, idCampi, ativo FROM `Educatio`.`deptos` WHERE idCampi = '".$intIdCampi."'"); ?>	
					<?php while($arrLinha = $strSQL->fetch_assoc()) { ?>
						<?php if ($arrLinha['ativo'] != 'N') {?>	
							<?php echo "<tr value='".$arrLinha['nome']."' onclick('document.getElementById('txt_consulta').value = document.getElementById(this).innerHTML')><th>".$arrLinha['nome']."</th></tr>";?>
					<?php }} ?>
				</table>

				<!-- Filtro da Tabela -->
				<script>
 					$('input#txt_consulta').quicksearch('table#tabela tbody tr');
				</script>
				
				<!-- Função de clique na tabela -->
				<script>
					$(document.getElementById("tabela")).ready(function() {
						$('tr').click(function () { 
							document.getElementById("txt_consulta").value = $(this).attr("value");
						});
					});
				</script>

				<br>

				<div class="input-group">
					<span class="input-group-addon"><i class="nc-icon nc-hat-3"></i></span>
					<select name="idCampi1" class="form-control" required="required">
						<option value="">Selecione o Campus</option>
						<!-- Pega os dados do banco e coloca no select -->
						<?php $strSQL = $conn->query("SELECT nome, id, ativo, cidade FROM `Educatio`.`campi` WHERE id != '".$intIdCampi."'"); ?>	
						<?php while($arrLinha2 = $strSQL->fetch_assoc()) { ?>
						<?php if ($arrLinha2['ativo'] != 'N') {?>	
						<option value="<?php echo $arrLinha2['id']?>"><?php echo $arrLinha2['nome']." - Cidade: ".$arrLinha2['cidade']; ?></option>
						<?php }} ?>
					</select>
				</div>
				
				<div class="row">
					<div class="col-md-4 ml-auto mr-auto">
						<input type="submit" name="Alterar" value="Alterar" class="btn btn-info btn-round">
					</div>
				</div>	
							
			</form>

		</div>
	</div>
</div>

</body>
</html>

<?php
	
	//Recebe os Dados do Form 
	@$intIdCampi1 = $_POST['idCampi1'];
	@$strOnde = $_POST['Onde'];
 	
	if (isset($_POST['Alterar'])) {	
		if (mysqli_num_rows($conn->query("SELECT nome FROM `Educatio`.`deptos` WHERE nome = '".$strOnde."' AND idCampi = '".$intIdCampi1."'")) != 0){
			echo "<script>alert('Um Deparatamento com esse nome já existe neste Campus');</script>";
		}else {
			$strAux1 = "idCampi = '".$intIdCampi1."'";
						
			@$strAux2 = " WHERE nome = '".$strOnde."'";

			//Parametro de SQL
			@$strSQL = "UPDATE `Educatio`.`deptos` SET ".$strAux1.$strAux2;

			//Verifica se o Departamento foi alterado 
			if ($conn->query($strSQL) === TRUE) {
				echo "<script>alert('Deparatamento alterado com sucesso');</script>";
			} else {
				echo "<script>alert('Erro alterando o Deparatamento: ".$conn->error."');</script>";
			} 
		}
	}
 	
	//Fecha a conexão
	$conn->close();
?>