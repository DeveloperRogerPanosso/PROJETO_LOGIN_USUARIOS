<?php
		session_start();
		if(isset($_SESSION["login_usuario"]) AND !empty($_SESSION["login_usuario"])) {
			echo "Olá seja bem vindo usuário: " . $_SESSION["login_usuario"] . "<br>\n";
			echo "<a href='delete_session_login_usuario.php' title='Encerrar Sessão'>Encerrar Sessão</a>" . "<br>\n";
			echo "...";
		}else {
			header("Location: login.php");
			exit;
		}
?>