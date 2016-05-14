<?php
	session_start();

	if ($_SESSION['logado'] != 'bem vindo') {
		header('Location: login.php');
	}
?>