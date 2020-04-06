<?php if(!class_exists('Rain\Tpl')){exit;}?>

<hr class="mt-5 mb-5">
<main>
    
    <div class="white_bg">        
    <div class="container margin_60">
        <div class="row small-gutters categories_grid">
            <div class="col-sm-12 col-md-6">
                <a href="all_tours_list.html">
                    <img src="/res/site/img/img_cat_home_1.jpg" alt="" class="img-fluid">
                    <div class="wrapper">
                        <h2><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                        <p>1150 Locations</p>
                    </div>
                </a>
            </div>            
        </div>
        <!--/categories_grid-->
    </div>
    <!-- /container -->
    </div>
    <!-- /white_bg -->
</main>
<!-- End main -->