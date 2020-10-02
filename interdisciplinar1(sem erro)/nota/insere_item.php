<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>ITEM DA NOTA FISCAL</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="insere_item.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>

<body>

	<?php  

		include '../conecta.php';
		include 'restritanota.php';
		echo "<br>";

			error_reporting(0);
			session_start();
			$nf = $_SESSION['nf'];
			$id_prod = $_POST['produto_opcao'];
			$qtde_prod = $_POST['qtde'];


			$consulta = "SELECT preco,nome FROM produtos WHERE id='$id_prod'";
			$consulta = $conexao->query($consulta);
			$linha = $consulta->fetch_assoc();
			//print_r($linha);
			$preco = $linha['preco'];
			$nome = $linha['nome'];

			$subtotal = $preco * $qtde_prod;


	?>


			<form action="insere_item_nf.php" method="POST">

				    <div class="pricetab2">	
				      <h1> <?php echo "<b> Numero da Nota Fiscal: " .$nf . "</b><br>"; ?> </h1>
				    </div>

				    <div class="pricetab1">	
				      <h1> ID PRODUTO </h1>
				      <h3><input type="text" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly"></h3>
				    </div>
				
					<div class="pricetab1">	
				      <h1> PRODUTO </h1>
				      <h3><input type="text" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly"></h3>
				    </div>

				    <div class="pricetab1">	
				      <h1> VALOR UNIT </h1>
				      <h3><input type="text" name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly"></h3>
				    </div>

				    <div class="pricetab1">	
				      <h1> QTDE </h1>
				      <h3><input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly"></h3>
				    </div>

				    <div class="pricetab2">	
				      <h1> SUBTOTAL </h1>
				      <h3><input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly"></h3>

					    <div class="pricefooter">
								<div class="button">	
								<input class="btn btn-primary" type="submit" value="ADICIONAR PRODUTO">
								</div>
		        	    </div>	

			</form>


</body>

</html>