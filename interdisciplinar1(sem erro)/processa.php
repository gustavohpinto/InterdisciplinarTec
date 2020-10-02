<?php 

	session_start();

	include 'conecta.php';

	$email = $_POST['username'];
	$senha = $_POST['pass'];

	$consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;
	$resultado_usuario = mysqli_fetch_assoc($resultado);

	if ($registros == 1){
		$_SESSION['id'] = $resultado_usuario['id'];
		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['email'] = $resultado_usuario['email'];

		header('location: nota/index.php');
	}

	else {
		header('location: index.html');
	}

?>