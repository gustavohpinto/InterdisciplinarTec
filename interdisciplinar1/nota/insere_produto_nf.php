<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>INSERIR PRODUTO</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="insere_produto_nf.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>


<body>

	<?php  

		include '../conecta.php';
		include 'restritanota.php';
		echo "<br>";

	?>	
			
			<form action="insere_produto.php" method="POST">	

				<div class="pricetab2">
					<h1> CADASTRO </h1>
				</div>	

				<div class="pricetab2">
					<h1> NOME </h1>
					<h1><input type="text" name="nome"></h1>     		
								 
				</div> 	      	   		

				<div class="pricetab2">
					<h1> PRECO </h1>
					<h1><input type="text" name="preco"></h1>     		

						<div class="pricefooter"> 	 	
							<div class="button">	
								<input class="btn btn-primary" type="submit" value="CADASTRAR">
							</div>
						</div> 
								 
				</div>  
					
							

			</form>			             



</body>
</html>