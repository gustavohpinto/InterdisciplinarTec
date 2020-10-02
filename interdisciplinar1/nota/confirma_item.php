<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>CONFIRMAÇÃO PEDIDO</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="confirma_item.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>

<body>

	<?php  

		include '../conecta.php';
		include 'restritanota.php';
		echo "<br>";


			session_start();
			$nf = $_SESSION['nf'];


			$consulta = "SELECT * FROM itens_nf WHERE num_nf='$nf'";
			$total = 0;

	?>		

			<div class="pricetab2">	
				      <h3> <?php echo "<h1> Nota fiscal:" .$nf  ."</h1><br>"; ?> </h3>
			</div>
 
				      	<?php 

				      	foreach ($conexao->query($consulta) as $linha) {
						
						echo "<br><hr>";					      		

				      	?> 	
			 	
						<div class="pricetab1">	
				            <h3> <?php echo "Cod Produto: " .$linha['cod_produto'] ."<br>"; ?> </h3>
			            </div>
						
			            <div class="pricetab1">	
				            <h3> <?php echo "Qtde: " .$linha['qtde'] ."<br>"; ?> </h3>
			            </div>

						<div class="pricetab2">	
				            <h1> <?php echo "Subtotal: " .$linha['subtotal'] ."<br>"; ?> </h3>	
			            </div>

			            <?php echo "<br>"; ?>

						<?php
						$subtotal = $linha['subtotal'];
						$total = $total + $subtotal;

						}

						?> 	

			</div>
					
 					<div class="pricetab2">		
				      <h1> <?php echo "<b> Total da nota: R$" .$total ."</b><br>"; ?> </h1>
					</div>

 					<div class="pricetab">	
				      <h1> O que deseja fazer? </h1>
					    <div class="pricefooter">
					    	<div class="button">
					     		<a href="seleciona_ultima_nf.php"> Inserir mais </a>
					     	</div>	
					    </div>    
					    <div class="pricefooter"> 	 	
					    <div class="button">
					    	<a href="finalizar.php?total=<?php echo $total; ?>"> Finalizar </a>
					    </div>
					    </div> 	
					</div>

				    

</body>

</html>