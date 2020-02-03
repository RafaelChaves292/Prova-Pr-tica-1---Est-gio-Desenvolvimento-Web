<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

//Total de registros
$conn = new PDO("mysql:host=localhost;dbname=etapa1;", "etapa", "994118baskara");

$res_totalReg = $conn->prepare("SELECT COUNT(id) AS totalReg FROM tab_cliente");
$res_totalReg->execute();
$total = $res_totalReg->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container'>
		<fieldset>

			<!-- Cabeçalho da Listagem -->
			<legend><h1>Dashboard</h1></legend>

			<!-- Formulário de Pesquisa -->
			

			<!-- Link para página de cadastro -->
				<a href='index.php' class="btn btn-primary">Clientes Cadastrados</a>
			<a href='cadastro.php' class="btn btn-success pull-right">Cadastrar Cliente</a>
			<div class='clearfix'></div>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Nº de registros no BD = <?php echo $total_de_registros = $total->totalReg; ?></h3>
		
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>