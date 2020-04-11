<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Produtos</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="/admin">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						Produtos
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Lista de Produtos</h4>
								<a class="btn btn-primary btn-round ml-auto" href="/admin/products/create">
									<i class="fa fa-plus"></i>&nbsp;
									Cadastrar Produto
								</a>
							</div>
						</div>
						<div class="card-body">						
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th>Nome</th>
											<th>Valor</th>
											<th style="width: 10%">Ações</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Nome</th>
											<th>Valor</th>
											<th>Ações</th>
										</tr>
									</tfoot>
									<tbody>
										<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
										<tr>
											<td><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
											<td><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>											
											<td>
												<div class="form-button-action">
													<a href="/admin/products/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar">
														<i class="fa fa-edit"></i>
													</a>
													<a href="/admin/products/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" data-toggle="tooltip" onclick="return confirm('Deseja excluir esse usuário?')" title="" class="btn btn-link btn-danger" data-original-title="Deletar">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</td>
										</tr>
										<?php } ?>									
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>