<?php  

		include '../conecta.php';
		include 'restritanota.php';
		echo "<br>";


			session_start();
			$nf = $_SESSION['nf'];
			$id_produto = $_POST['id_prod'];
			$qtde = $_POST['qtde'];
			$subtotal = $_POST['subtotal'];


			$consulta = $conexao->prepare(
			"INSERT INTO itens_nf (cod_produto,num_nf,qtde,subtotal) VALUES ('$id_produto','$nf','$qtde','$subtotal')");
			$consulta -> execute();
			header('Location: confirma_item.php');


	?>