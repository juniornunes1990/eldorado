<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Editar Produto</h4>
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
                        Editar Produto
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <form action="/admin/products/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
                        <div class="card-header">
                            <div class="card-title">Formulario Editar Produtor</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="desproduct">Nome Produto</label>
                                        <input type="text" class="form-control" name="desproduct" id="desproduct" value="<?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>		
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlprice">Preço</label>
                                        <input type="number" class="form-control" name="vlprice" id="vlprice" step="0.01" value="<?php echo htmlspecialchars( $product["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlwidth">Largura</label>
                                        <input type="number" class="form-control" name="vlwidth" id="vlwidth" step="0.01" value="<?php echo htmlspecialchars( $product["vlwidth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>		
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlheight">Altura</label>
                                        <input type="number" class="form-control" name="vlheight" id="vlheight" step="0.01" value="<?php echo htmlspecialchars( $product["vlheight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vllength">Comprimento</label>
                                        <input type="number" class="form-control" name="vllength" id="vllength" step="0.01" value="<?php echo htmlspecialchars( $product["vllength"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="vlweight">Peso</label>
                                        <input type="number" class="form-control" name="vlweight" id="vlweight" step="0.01" placeholder="<?php echo htmlspecialchars( $product["vlweight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>	
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="desurl">URL</label>
                                        <input type="text" class="form-control" name="desurl" id="desurl" placeholder="<?php echo htmlspecialchars( $product["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>																
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">							
                                        <div class="form-group">
                                            <label for="desphoto">Foto do Produto</label>
                                            <input type="file" class="form-control" name="file" id="desphoto">
                                        </div>																
                                    </div>
                                    <div class="box">
                                        <img class="img-responsive" id="img-preview" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem do Produto">
                                    </div>
                                </div>					
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Editar Produto</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>