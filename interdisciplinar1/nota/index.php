<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>VENDA</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel='stylesheet' type='text/css' href="estilo.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.js"></script> 
</head>

<body>

	<?php include 'restritanota.php';  ?>
 
		  <h1 class="title"> INICIAR UMA NOVA VENDA </h1>

		  <h3>Ao clicar em "INICIAR VENDA", o sistema irá gerar uma nota fiscal na tabela nota_fiscal sem o valor total. </p>

		<br>

		<h3>Na próxima tela será solicitada a data da nota fiscal.</p>

		<br>

		<h3>O valor total será atualizado após a inserção dos itens na nota fiscal.</p>

		<hr>
		    
		    <div class="pricetab">
		      <form action="data_nf.php" method="POST">		
		      <h1> VENDA </h1>

		      <div class="pricefooter">
		        <div class="button">

		          <a href="data_nf.php">Iniciar</a>
		      	  
		        </div>
		      </div>
		      </form>
		    </div>

		    <div class="pricetab">
		      <h1>NOTAS</h1>

		      <div class="pricefooter">
		        <div class="button">
		          <a href="ver_nf.php"> Vê-las </a>
		        </div>
		      </div>
		    </div>

		    <div class="pricetab">
		      <h1>PRODUTOS</h1>

		      <div class="pricefooter">
		        <div class="button">
		          <a href="ver_produtos.php">Vê-los</a>
		        </div>
		      </div>
		    </div>

		    <div class="pricetab">
		      <h1>CADASTRAR</h1>

		      <div class="pricefooter">
		        <div class="button">
		          <a href="insere_produto_nf.php">Cadastrar</a>
		        </div>
		      </div>
		    </div>

		    <div class="pricetab1">
		      <h1>Sair</h1>

		      <div class="pricefooter">
		        <div class="button">
		          <a href="../sair.php">Sair</a>
		        </div>
		      </div>
		    </div>    

</body>



</html>




