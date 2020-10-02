<?php

	session_start();

	unset(
		$_SESSION['idUsuario'],
		$_SESSION['nome'],
		$_SESSION['email']);

	header('Location: index.html');

?>