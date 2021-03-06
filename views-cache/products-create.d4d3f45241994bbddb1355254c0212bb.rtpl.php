<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Cadastrar Novo Produto</h4>
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
                        <a href="/admin/products">Produtos</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Cadastrar Novo Produto
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <form action="/admin/products/create" method="post" enctype="multipart/form-data">
                        <div class="card-header">
                            <div class="card-title">Formulario de Cadastro</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="desproduct">Nome Produto</label>
                                        <input type="text" class="form-control" name="desproduct" id="desproduct" placeholder="Digite o nome do produto">
                                    </div>																
                                </div>		
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlprice">Preço</label>
                                        <input type="number" class="form-control" name="vlprice" id="vlprice" step="0.01" placeholder="0.00">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlwidth">Largura</label>
                                        <input type="number" class="form-control" name="vlwidth" id="vlwidth" step="0.01" placeholder="0.00">
                                    </div>																
                                </div>		
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlheight">Altura</label>
                                        <input type="number" class="form-control" name="vlheight" id="vlheight" step="0.01" placeholder="0.00">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vllength">Comprimento</label>
                                        <input type="number" class="form-control" name="vllength" id="vllength" step="0.01" placeholder="0.00">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlweight">Peso</label>
                                        <input type="number" class="form-control" name="vlweight" id="vlweight" step="0.01" placeholder="0.00">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="desurl">URL</label>
                                        <input type="text" class="form-control" name="desurl" id="desurl" placeholder="Digite a URL do produto">
                                    </div>																
                                </div>
                                <div class="row"></div>
                                    <div class="col-md-6 col-lg-4">							
                                        <div class="form-group">
                                            <label for="desphoto">Foto do Produto</label>
                                            <input type="file" class="form-control" name="desphoto" id="desphoto">
                                        </div>																
                                    </div>
                                </div>		
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>