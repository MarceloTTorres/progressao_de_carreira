<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>    

		<form method="POST" class="colorlib-form" action="emailexistente.php"style="background-color: #808080;">
			<h2>Cadastre-se</h2>
		       	<div class="row">
			        <div class="col-md-12">
			            <div class="form-group">
							<div class="col-md-6">
								<label for="nome">Nome</label>
								<input type="text" pattern="[A-Za-z-0-9., -]{4,255}$" name="nome" id="nome" class="form-control" placeholder="Ex: Mateus" oninvalid="setCustomValidity('Por favor, insira pelo menos 7 letras!')">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<label for="email">Email</label>
								<input type="email" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" id="email" name="email" class="form-control" placeholder="Digite seu email">
							</div>
							<div class="col-md-6">
								<label for="senha">Senha</label>
								<input type="password" pattern="^.{6,15}$" id="senha" name="senha" class="form-control" title="Senha com no minímo 6 caracteres de letras e números" placeholder="Senha com no minímo 6 caracteres de letras e números">
							</div>
						</div>
						<div class="form-group">
							<div align="center">
								<label> <a class="btn" href="form-login.php"> Login </a> </label> <br>
								<button type="submit" name="cadastrar" class="btn btn-primary">
   									Cadastrar
   								</button> 

							</div>
						</div>
   					</div>
   				</div>
		</form>