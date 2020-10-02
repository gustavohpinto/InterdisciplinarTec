<?php  

	include '../conecta.php';
	include 'restritanota.php';

		$consulta = "SELECT * FROM produtos";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>PRODUTOS</title>
	<link rel="stylesheet" type="text/css" href="ver_produtos.css"> 		
</head>
			

<body>

		<?php  
		foreach ($conexao -> query($consulta) as $linha) {
		?>	

			<div class="pricetab1">	
				<h3> <?php echo "Produto: " .$linha['nome']; ?> </h3>	
				<h3> <?php echo "Preco: " .$linha['preco']; ?>  </h3>
        <?php  
        }
        ?>  

        		<div class="pricetab1">
				<div class="pricefooter">
				<div class="button">	
				<a href="index.php"> Voltar </a>
				</div>
				</div>



</body>
			

</html>			