<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta http-equiv="http-equiv" content="text/html">
	<meta name="description" content="Login Usuário">
	<title>Login Usuário</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/style.css"/>
</head>
<body>
	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1 mt-5">
						<div class="h1 page-header display-4 text-center mb-3">Login</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1">
						<div class="col-md-12 order-1">
							<div class="alert alert-info shadow-sm text-center" role="alert">informe seu e-mail e senha realizando o login !!</div>
							<?php require_once "sessions.php"; ?>
							<form name="login" method="POST" class="needs-validation" novalidate action="validar_login_usuario.php">
								<div class="form-row">
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label class="text-dark form-label" for="email">E-Mail</label>
											<input type="email" name="email" class="form-control form-control-md" autocomplete="off" placeholder=" exemplo@hotmail.com.. " id="email" required/>
											<div class="valid-feedback">Tudo Certo.</div>
											<div class="invalid-feedback">Por favor informe seu endereço de E-Mail.</div>
										</div>
									</div>
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label class="text-dark form-label" for="senha">Senha</label>
											<input type="password" name="senha" class="form-control form-control-md" autocomplete="off" placeholder=" Senha.. " id="senha" required/>
											<div class="valid-feedback">Tudo Certo.</div>
											<div class="invalid-feedback">Por favor informe sua senha.</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 order-1 mb-1">
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-md shadow-sm">Logar</button>
											<button type="reset" class="btn btn-danger btn-md shadow-sm">Resetar</button>
										</div>
									</div>
								</div>
							</form>
							<a class="text-primary" href="#" data-toggle="modal" data-target="#ModalCadastroLoginUsuario">Realizar Cadastro</a>
							<a class="text-primary" href="#" data-toggle="modal" data-target="#ModalAtualizarSenhaLoginUsuario">Esqueci minha Senha ?</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>	
		</footer>
	</article>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/script.js"></script>
	<?php require_once "require_modais.php"; ?>
</body>
</html>