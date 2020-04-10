<?php if(!class_exists('Rain\Tpl')){exit;}?><section class="parallax-window" data-parallax="scroll" data-image-src="/res/site/img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
            <p>pagina de produtos</p>
        </div>
    </div>
</section>
<!-- End section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li>
                    <a href="/">Inicio</a>
                </li>
                <li><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></li>
            </ul>
        </div>
    </div>
    <!-- Position -->

    <div class="container margin_60">

        <div class="row">
            <aside class="col-lg-3">
                <p>
                    <a style="margin-bottom: 5px;" href="#" class="btn_map" data-toggle="collapse">Ver Ambientes</a>
                    <a style="margin-bottom: 5px;" href="#" class="btn_map" data-toggle="collapse">Ver cardapio</a>
                </p>              
            </aside>
            <!--End aside -->
            <div class="col-lg-9">

                <div id="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class="title">Lorem ipsum</h1>
                            <p>A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na 
                             produção gráfica para preencher os espaços de texto em publicações para testar e ajustar 
                             aspectos visuais antes de utilizar conteúdo real.</p>
                        </div>
                    </div>
                </div>
                <!--/tools -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                        <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Proxima</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- end pagination-->

            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->