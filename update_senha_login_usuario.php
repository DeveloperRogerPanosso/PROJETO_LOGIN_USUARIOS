<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\LoginUsuario;
		use \aplicacao\models\LoginUsuarioDao;

		//recebe dados da requisicao "form" como POST
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$nova_senha = filter_input(INPUT_POST, "nova_senha", FILTER_SANITIZE_STRING);
		if($email AND $nova_senha) {
			$updateSenhaLoginUsuario = new LoginUsuario();
			$updateSenhaLoginUsuario->setEmail($email);
			$updateSenhaLoginUsuario->setSenha($nova_senha);
			$loginUsuarioDao = new LoginUsuarioDao();
			$loginUsuarioDao->updateSenhaLoginUsuario($updateSenhaLoginUsuario);
		}else {
			header("Location: login.php");
			exit;
		}
?>