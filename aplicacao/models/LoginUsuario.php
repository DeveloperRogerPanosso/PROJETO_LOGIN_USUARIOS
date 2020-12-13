<?php
		//define namespace para classe 
		namespace aplicacao\models;

		class LoginUsuario {
			private string $nome;
			private string $email;
			private string $senha;

			//define encapsulamento a classe definindo meios de proteção a seus atributos internos
			public function setNome(string $nome) : string {
				if(isset($nome) AND !empty($nome) AND is_string($nome)) {
					if(strlen($nome) >= 3) {
						$nome = filter_var($nome, FILTER_SANITIZE_STRING);
						$this->nome = addslashes(htmlspecialchars(trim(ucwords($nome))));
						return true;
					}else {
						return false;
					}
				}else {
					return false;
				}
			}
			public function getNome() : string {
				return $this->nome ?? "Nome não informado !!";
			}
			
			public function setEmail(string $email) : string {
				if(isset($email) AND !empty($email) AND is_string($email)) {
					$email = filter_var($email, FILTER_SANITIZE_EMAIL);
					$this->email = addslashes(htmlspecialchars(trim($email)));
					return true;
				}else {
					return false;
				}
			}
			public function getEmail() : string {
				return $this->email ?? "E-Mail não informado !!";
			}

			public function setSenha(string $senha) : string {
				if(isset($senha) AND !empty($senha) AND is_string($senha)) {
					$senha = filter_var($senha, FILTER_SANITIZE_STRING);
					$this->senha = addslashes(htmlspecialchars(trim(md5($senha))));
					return true;
				}else {
					return false;
				}
			}
			public function getSenha() : string {
				return $this->senha ?? "Senha não informada !!";
			}
		}
?>