<!DOCTYPE html>
<html>
<head>

	<!-- CSS do Bootstrap -->
	<link href="../../../Estaticos/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../../Estaticos/Bootstrap/css/bootstrap.css" rel="stylesheet"/>

	<!-- CSS do grupo -->
	 <link href="formularios.css" rel="stylesheet" />

	<!-- Arquivos js -->
	<script src="../../../Estaticos/Bootstrap/js/popper.js"></script>
	<script src="../../../Estaticos/Bootstrap/js/jquery-3.2.1.js" type="text/javascript"></script>
	<script src="../../../Estaticos/Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- Fontes e icones -->
	<link href="../../../Estaticos/Bootstrap/css/nucleo-icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abel|Inconsolata" rel="stylesheet">

	<style type="text/css">
		.text-center{
           font-family: 'Abel', sans-serif;
           color: #d8ac29;
        }
        .fonteTexto{
           font-family: 'Inconsolata', monospace;
           font-size: 20px;
        }
		button.btn {
			background-color: #2644B2;
			color: white;
		}

		div.title {
			margin-top: 2%;
		}

		h1 {
			color: #d8ac29; 
		}

		div.container {
			margin-top: 2%;
		}

		#p1 {
			text-align: center;
		}

		#voltar {
		    margin-top: 5%;
		    float: right;
		}
		.btn-info {
          background-color: #162e87;
          border-color: #162e87;
          color: #FFFFFF;
          opacity: 1;
          filter: alpha(opacity=100);
        }
        .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
          background-color: #11277a;
          color: #FFFFFF;
          border-color: #11277a;
        }
	 </style>
	

	<title></title>
</head>
<body>
 
<!-- 
2644B2
6989FF
4F75FF 
d8ac29
-->
<?php 
        session_start();
        require "../../Menu-Rodape-Secundarios/caso-2/gerencia-web-menu-interface-bibliotecario.php"; 
    ?>

<div class="wrapper">
	<div class="title" style="text-align: center;">
		<h1><b>Manutenção de Acervo</b></h1>
	</div>
		<p id="p1">Crie, edite e exclua obras do acervo</p>

	<div class="container">
		<div class="head">
             <h2 class="text-center">Livros</h2>
        </div>
		<form class="contact-form" action="livrophp.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col ml-auto mr-auto">
	       			<div class="col-md-12">
	         			<label class="fonteTexto">Nome:</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="nc-icon nc-tag-content"></i>
									</span>
									<input type="text" name="nome" class="form-control" placeholder="Nome do livro" required='required'>
								</div>
				      </div>
					</div>
					<div class="col ml-auto mr-auto">
       			<div class="col-md-12">
         			<label class="fonteTexto">Edição:</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="nc-icon nc-check-2"></i>
								</span>
								<input type="text" class="form-control" name="edicao" placeholder="Edição do livro" required='required'>
							</div>
			      </div>
					</div>	
				</div>

				<div class="row">
					<div class="col ml-auto mr-auto">
	       			<div class="col-md-12">
	         			<label class="fonteTexto">idCampi:</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="nc-icon nc-bookmark-2"></i>
									</span>
									<select class="form-control" name="idCampi" class="form-control" 
					id = "idCampi" required>
					<option disabled selected value = ""> Selecione um Campus </option>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "usbw", "educatio");
					if (!$conn) {
						die("Conexão falhou: " . mysqli_connect_error());
					}
						$sql = "SELECT * FROM campi";
						$result = mysqli_query($conn, $sql);
						while($linhaCampus = mysqli_fetch_array($result)){
							echo "<option value = " .$linhaCampus[0] .">" .$linhaCampus[1] ."</option>";
						}
					?>
				</select>
								</div>
				      </div>
					</div>
					<div class="col ml-auto mr-auto">
       			<div class="col-md-12">
         			<label class="fonteTexto">Local:</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="nc-icon nc-pin-3"></i>
								</span>
								<input type="text" class="form-control" name="local" placeholder="Local do livro" required='required'>
							</div>
			      </div>
					</div>	
				</div>

				<div class="row">
					<div class="col ml-auto mr-auto">
	       			<div class="col-md-12">
	         			<label class="fonteTexto">Ano:</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="nc-icon nc-calendar-60"></i>
									</span>
									<input type="number" class="form-control" name="ano" placeholder="qualquer coisa" required='required'>
								</div>
				      </div>
					</div>
					<div class="col ml-auto mr-auto">
       			<div class="col-md-12">
         			<label class="fonteTexto">Editora:</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="nc-icon nc-paper"></i>
								</span>
								<input type="text" class="form-control" name="editora" placeholder="Editora do livro" required='required'>
							</div>
			      </div>
					</div>	
				</div>

				<div class="row">
					<div class="col ml-auto mr-auto">
	       			<div class="col-md-12">
	         			<label class="fonteTexto">Paginas:</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="nc-icon nc-single-copy-04"></i>
									</span>
									<input type="number" class="form-control" name="paginas" placeholder="Numero de paginas" required='required'>
								</div>
				      </div>
					</div>
                    <div class="col ml-auto mr-auto">
	       			<div class="col-md-12">
	         			<label class="fonteTexto">ISBN:</label>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="nc-icon nc-book-bookmark"></i>
									</span>
									<input type="number" class="form-control" name="ISBN" placeholder="ISBN do livro" required='required'>
								</div>
				      </div>
					</div>
				</div>
					<button type="submit" id="criar" class="btn btn-info">Criar</button>
			</div>	
		</form>	
	</div>


</div>
<br><br><br><br><br><br>
	<?php require "../../Menu-Rodape-Secundarios/caso-2/gerencia-web-rodape.php"; ?>

</body>
</html>