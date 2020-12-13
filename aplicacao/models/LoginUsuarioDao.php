<?php
		//define namespace para classe
		namespace aplicacao\models;

		session_start();

		require_once "LoginUsuarioDaoInterface.php";

		use \aplicacao\models\ConnectMysql;

		class LoginUsuarioDao implements LoginUsuarioDaoInterface {
			public function insertCadastroLoginUsuario(LoginUsuario $insertCadastroLoginUsuario) {
				$query = "SELECT * FROM usuarios WHERE email = :email";
				$query = ConnectMysql::getInstancePdo()->prepare($query);
				$query->bindValue(":email", $insertCadastroLoginUsuario->getEmail());
				$query->execute();
				if($query->rowCount() === 0) {
					$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome, :email, :senha)";
					$query = ConnectMysql::getInstancePdo()->prepare($query);
					$query->bindValue(":nome", $insertCadastroLoginUsuario->getNome());
					$query->bindValue(":email", $insertCadastroLoginUsuario->getEmail());
					$query->bindValue(":senha", $insertCadastroLoginUsuario->getSenha());
					$query->execute();
					if($query->rowCount() > 0) {
						$_SESSION["cadastro_login_usuario"] = "
						<div class='alert alert-success fade show alert-dismissible shadow-sm' role='alert'>
							<a class='close' href='#' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></a>
							Cadastro de usuário realizado com suscesso !!
						</div>";
						header("Location: login.php");
						return true;
					}else {
						header("Location: login.php");
						return false;
					}
				}else {
					$_SESSION["cadastro_login_usuario_existente"] = "
					<div class='alert alert-danger fade show alert-dismissible shadow-sm' role='alert'>
						<a class='close' href='#' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></a>
						Cadastro de usuário já existente !!
					</div>";
					header("Location: login.php");
					return false;
				} 
			}

			public function validarLoginUsuario(LoginUsuario $validarLoginUsuario) {
				$query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
				$query = ConnectMysql::getInstancePdo()->prepare($query);
				$query->bindValue(":email", $validarLoginUsuario->getEmail());
				$query->bindValue(":senha", $validarLoginUsuario->getSenha());
				$query->execute();
				if($query->rowCount() > 0) {
					$dadosLoginUsuario = $query->fetch(\PDO::FETCH_ASSOC);
					$_SESSION["login_usuario"] = $dadosLoginUsuario["email"];
					header("Location: index.php");
					return true;
				}else {
					$_SESSION["login_invalido"] = "
					<div class='alert alert-danger fade show alert-dismissible shadow-sm' role='alert'>
						<a class='close' href='#' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></a>
						E-Mail ou senha informado invalidos !!
					</div>";
					header("Location: login.php");
					return false;
				}
			}

			public function updateSenhaLoginUsuario(LoginUsuario $updateSenhaLoginUsuario) {
				$query = "UPDATE usuarios SET senha = :nova_senha WHERE email = :email";
				$query = ConnectMysql::getInstancePdo()->prepare($query);
				$query->bindValue(":nova_senha", $updateSenhaLoginUsuario->getSenha());
				$query->bindValue(":email", $updateSenhaLoginUsuario->getEmail());
				$query->execute();
				if($query->rowCount() > 0) {
					$_SESSION["update_senha_login_usuario"] = "
					<div class='alert alert-success fade show alert-dismissible shadow-sm' role='alert'>
						<a class='close' href='#' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></a>
						Atualização de senha realizada com suscesso !!
					</div>";
					header("Location: login.php");
					return true;
				}else {
					header("Location: login.php");
					return false;
				}
			}

			public function deleteSessionLoginUsuario() {
				if(isset($_SESSION["login_usuario"]) AND !empty($_SESSION["login_usuario"])) {
					$_SESSION["login_usuario"] = null;
					unset($_SESSION["login_usuario"]);
					header("Location: index.php");
					return true;
				}else {
					header("Location: login.php");
					return false;
				}
			}
		}
?>