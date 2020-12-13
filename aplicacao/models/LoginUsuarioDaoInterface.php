<?php
		//define namespace para interface 
		namespace aplicacao\models;

		interface LoginUsuarioDaoInterface {
			public function insertCadastroLoginUsuario(LoginUsuario $insertCadastroLoginUsuario);
			public function validarLoginUsuario(LoginUsuario $validarLoginUsuario);
			public function updateSenhaLoginUsuario(LoginUsuario $updateSenhaLoginUsuario);
			public function deleteSessionLoginUsuario();
		}
?>