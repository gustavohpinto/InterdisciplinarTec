<?php  

	include '../conecta.php';
	include 'restritanota.php';
	echo "<br>";

			error_reporting(0);
			session_start();
			$nf = $_SESSION['nf'];
			$total = $_GET['total'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>FINALIZANDO</title>
	<link rel="stylesheet" type="text/css" href="finalizar.css">
</head>
<body>

	<div class="pricetab2">		
		<h1> <?php echo "Nota Fiscal: " .$nf . "<br>"; ?> </h1>
	</div>

	<div class="pricetab2">		
		<h1> <?php echo "Total: " .$total . "<br>"; ?> </h1>
	</div>

		<?php
			$consulta = $conexao -> prepare("UPDATE nota_fiscal SET valor_total='$total' WHERE nf='$nf'");
			$consulta -> execute();
			header('Location: logout.php');
		?>					

</body>
</html>
			


