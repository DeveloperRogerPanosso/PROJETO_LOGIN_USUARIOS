<?php
		session_start();

		if(isset($_SESSION["cadastro_login_usuario"]) AND !empty($_SESSION["cadastro_login_usuario"])) {
			echo $_SESSION["cadastro_login_usuario"];
			$_SESSION["cadastro_login_usuario"] = null;
			unset($_SESSION["cadastro_login_usuario"]);
		}

		if(isset($_SESSION["cadastro_login_usuario_existente"]) AND !empty($_SESSION["cadastro_login_usuario_existente"])) {
			echo $_SESSION["cadastro_login_usuario_existente"];
			$_SESSION["cadastro_login_usuario_existente"] = null;
			unset($_SESSION["cadastro_login_usuario_existente"]);
		}

		if(isset($_SESSION["login_invalido"]) AND !empty($_SESSION["login_invalido"])) {
			echo $_SESSION["login_invalido"];
			$_SESSION["login_invalido"] = null;
			unset($_SESSION["login_invalido"]);
		}

		if(isset($_SESSION["update_senha_login_usuario"]) AND !empty($_SESSION["update_senha_login_usuario"])) {
			echo $_SESSION["update_senha_login_usuario"];
			$_SESSION["update_senha_login_usuario"] = null;
			unset($_SESSION["update_senha_login_usuario"]);
		}
?>