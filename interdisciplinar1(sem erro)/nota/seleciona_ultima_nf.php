<?php  

	include '../conecta.php';
	include 'restritanota.php';
	echo "<br>";

	$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
	$consulta = $conexao->query($consulta);
	$linha = $consulta->fetch_assoc();
	$ultimo = $linha['ultima'];


	error_reporting(0);
	session_start();
	$_SESSION['nf'] = $ultimo;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Itens</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="seleciona_ultima_nf1.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>
		    
				<div class="pricetab1">	
					<form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="POST">	
					      		<h1>NOTA FISCAL</h1>
					      			<h1><input type="text" name="nf" value="<?php echo $ultimo; ?>"></h1> 
				</div>
					      		
					    <div class="pricetab1">  		
					      		<h1>PRODUTO</h1>

							      	<h1>
							      		<select name="produto_opcao" id="produto_opcao">		
											<?php  
												$consulta = "SELECT * FROM produtos";
												foreach ($conexao -> query($consulta) as $linha) {
												?>

													<option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
											<?php  
												}
											?>
										</select>
							      	</h1>
						</div>	      	   		

							<div class="pricetab1">
							      <h1> QUANTIDADE </h1>
						      		<h1><input type="text" name="qtde"></h1>     		

									<div class="pricefooter"> 	 	
									    <div class="button">	
									    <input class="btn btn-primary" type="submit" value="ADICIONAR PRODUTO">
									    </div>
								    </div> 
								 
							</div>  
					
							

					</form>
				</div>			             



</body>
</html>