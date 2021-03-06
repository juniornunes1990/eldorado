<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-panel">
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Cadastrar Novo Usuário</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Usuários</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					Cadastrar Novo Usuário
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				  <form action="/admin/users/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">
					<div class="card-header">
						<div class="card-title">Formulario de Cadastro</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-4">							
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Digite o Nome" value="<?php echo htmlspecialchars( $user["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
								</div>
								<div class="form-group">
									<label for="username">Usuário</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Digite o Nome de Usuário" value="<?php echo htmlspecialchars( $user["username"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Digite o email" value="<?php echo htmlspecialchars( $user["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
									<small id="emailHelp2" class="form-text text-muted">Digite um email válido.</small>
								</div>
								<div class="form-group">
									<label for="phone">Telefone</label>
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Digite o Número do Telefone" value="<?php echo htmlspecialchars( $user["phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
								</div>															
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" name="nivel" type="checkbox" value="1" <?php if( $user["nivel"] == 1 ){ ?>checked<?php } ?>>
										<span class="form-check-sign">Acesso Administrador</span>
									</label>
								</div>								
							</div>							
						</div>
					</div>
					<div class="card-action">
						<button type="submit" class="btn btn-success">Cadastrar</button>
						<button class="btn btn-danger">Cancelar</button>
					</div>
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>