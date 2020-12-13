<div class="modal fade" id="ModalCadastroLoginUsuario" role="dialog">
	<div class="modal-dialog shadow-sm modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h5 class="modal-title">Realizar Cadastro</h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</a>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12 order-1">
							<div class="alert alert-info shadow-sm text-center" role="alert">
								Preencha os campos abaixo realizando o cadastro para login !!
							</div>
							<form name="login" method="POST" class="needs-validation" novalidate action="cadastro_login_usuario.php">
								<div class="form-row">
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label class="text-dark form-label" for="nome">Nome</label>
											<input type="text" name="nome" class="form-control form-control-md" autocomplete="off" placeholder=" Nome.. " id="nome" required/>
											<div class="valid-feedback">Tudo Certo.</div>
											<div class="invalid-feedback">Por favor informe seu nome.</div>
										</div>
									</div>
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label class="text-dark form-label" for="email">E-Mail</label>
											<input type="email" name="email" class="form-control form-control-md" autocomplete="off" placeholder=" exemplo@hotmail.com.. " id="email" required/>
											<div class="valid-feedback">Tudo Certo.</div>
											<div class="invalid-feedback">Por favor informe um endereço de E-Mail.</div>
										</div>
									</div>
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label class="text-dark form-label" for="senha">Senha</label>
											<input type="password" name="senha" class="form-control form-control-md" autocomplete="off" placeholder=" Senha.. " id="senha" required/>
											<div class="valid-feedback">Tudo Certo.</div>
											<div class="invalid-feedback">Por favor informe uma senha.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-success btn-md shadow-sm mr-1">Cadastrar</button>
					<button type="button" class="btn btn-danger btn-md shadow-sm" data-dismiss="modal">Fechar</button>
				</div>
			</form>
		</div>
	</div>
</div>