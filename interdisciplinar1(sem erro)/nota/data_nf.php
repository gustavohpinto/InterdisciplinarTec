<?php  

	include '../conecta.php';
	include 'restritanota.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Data da nota fiscal</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="data_nf.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script>
</head>
<body>

	<div class="pricetab">
		<form action="gera_nf.php" method="POST">	
		      <h1> INSIRA A DATA DA VENDA </h1>
		      <h3>DATA: <input type="date" name="data"></h3>
		      <div class="pricefooter">
		        <div class="button">
		        	<input class="btn btn-primary" type="submit" value="CONTINUAR">
		        </div>
		      </div>
		</form>      
	</div>

</body>
</html>