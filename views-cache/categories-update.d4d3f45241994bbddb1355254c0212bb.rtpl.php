<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Cadastrar Nova Categoria</h4>
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
                        <a href="#">Categoria</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Cadastrar Nova Categoria
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <form action="/admin/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">
                        <div class="card-header">
                            <div class="card-title">Formulario de Cadastro</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">							
                                    <div class="form-group">
                                        <label for="descategory">Nome Categoria</label>
                                        <input type="text" class="form-control" name="descategory" id="descategory" value="<?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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