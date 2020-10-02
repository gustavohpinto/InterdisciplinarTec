<?php

	include '../conecta.php';
	include 'restritanota.php';

	echo "<br>";
	
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];


			$consulta = $conexao -> prepare(
			    "INSERT INTO produtos (nome, preco) VALUES('$nome', $preco)"
			); 

			$consulta -> execute();  

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PRODUTO INSERIDO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="insere_produto.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>

			<div class="pricetab">
		      <h1>Inserido!</h1>

		      <div class="pricefooter">
		        <div class="button">
		          <a href="index.php">Voltar</a>
		        </div>
		     </div>

</body>
</html>