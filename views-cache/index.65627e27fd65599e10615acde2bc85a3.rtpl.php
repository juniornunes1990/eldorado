<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="search_container_2">
    <div id="search_2">
        <ul class="nav nav-tabs">
            <li><a href="#reserva" data-toggle="tab" class="active show" id="tab_bt_1"><span>Reserva</span></a></li>
            <li><a href="#menu" data-toggle="tab" id="tab_bt_3"><span>Menu (Cardápio)</span></a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active show" id="reserva">
                <form>
                    <div class="row no-gutters custom-search-input-2">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control date-pick" type="text" name="dates" placeholder="Check-in">
                                <i class="icon_calendar"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input class="form-control date-pick" type="text" name="dates" placeholder="Check-Out">
                                <i class="icon_calendar"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel-dropdown">
                                <a href="#">Pessoas <span class="qtyTotal tours">1</span></a>
                                <div class="panel-dropdown-content">
                                    <!-- Quantity Buttons -->
                                    <div class="qtyButtons tours">
                                        <label>Adultos</label>
                                        <input type="text" name="qtyInput_tours" value="1">
                                    </div>
                                    <div class="qtyButtons tours">
                                        <label>Crianças</label>
                                        <input type="text" name="qtyInput_tours" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Reservar">
                        </div>
                    </div>
                    <!-- /row -->
                </form>
            </div>
            <!-- End tab -->
    
            <!-- End tab -->
            <div class="tab-pane" id="menu">
                <form>
                    <div class="row no-gutters custom-search-input-2">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Almoço, porções e etc...">
                                <i class="icon_search"></i>
                            </div>
                        </div>                                                    
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Pesquisar">
                        </div>
                    </div>
                    <!-- /row -->
                </form>
            </div>
            <!-- End tab -->
        </div>
    </div>
    <!-- End search_container_2 -->
</div>
<!-- End search_container -->

<main>
    <div class="white_bg">
    <div class="container margin_60">
        <div class="row small-gutters categories_grid">
            <div class="col-sm-12 col-md-6">
                <a href="all_tours_list.html">
                    <img src="/res/site/img/img_cat_home_1.jpg" alt="" class="img-fluid">
                    <div class="wrapper">
                        <h2>Special Offers</h2>
                        <p>1150 Locations</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row small-gutters mt-md-0 mt-sm-2">
                    <div class="col-sm-6">
                        <a href="all_tours_list.html">
                            <img src="/res/site/img/img_cat_home_2.jpg" alt="" class="img-fluid">
                            <div class="wrapper">
                                <h2>Tours</h2>
                                <p>800 Locations</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="all_hotels_list.html">
                            <img src="/res/site/img/img_cat_home_3.jpg" alt="" class="img-fluid">
                            <div class="wrapper">
                                <h2>Hotels</h2>
                                <p>650 Locations</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 mt-sm-2">
                        <a href="all_restaurants_list.html">
                            <img src="/res/site/img/img_cat_home_4.jpg" alt="" class="img-fluid">
                            <div class="wrapper">
                                <h2>Restaurants</h2>
                                <p>1132 Locations</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/categories_grid-->
    </div>
    <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>Nossos <span>Pacotes</span></h2>
            <p>Pocotes promocionais, confira nossas promoções.</p>
        </div>

        <div class="owl-carousel owl-theme list_carousel add_bottom_30">
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="/res/site/img/tour_box_1.jpg" width="800" height="533" class="img-fluid" alt="image">
                            <div class="badge_save">OFF<strong>50%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-8"></i>2 Adultos 3 Crianças<span class="price"><sup>R$</sup>50<span style="font-size:9pt;">,00</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pacote Família</strong> simnples</h3>
                        <div class="rating">
                            <small>Compartilhado</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Mais Detalhes</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="/res/site/img/tour_box_2.jpg" width="800" height="533" class="img-fluid" alt="image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-8"></i>Casal (2 Adultos)<span class="price"><sup>$</sup>30<span style="font-size:9pt;">,00</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Notredame</strong> tour</h3>
                        <div class="rating">
                            <small>Compartilhado</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Mais Detalhes</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="/res/site/img/tour_box_3.jpg" width="800" height="533" class="img-fluid" alt="image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>48<span style="font-size:9pt;">,00</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Versailles</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Mais Detalhes</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="/res/site/img/tour_box_4.jpg" width="800" height="533" class="img-fluid" alt="image">
                            <div class="badge_save">OFF<strong>20%</strong></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-30"></i>Walking tour<span class="price"><sup>$</sup>36</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pompidue</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- /item -->
            <div class="item">
                <div class="tour_container">
                    <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="img_container">
                        <a href="single_tour.html">
                            <img src="/res/site/img/tour_box_14.jpg" width="800" height="533" class="img-fluid" alt="image">
                            <div class="short_info">
                                <i class="icon_set_1_icon-28"></i>Skyline tours<span class="price"><sup>$</sup>42</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Tour Eiffel</strong> tour</h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
                        </div>
                        <!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div>
                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box tour -->
            </div>
            <!-- /item -->
        </div>
        <!-- /carousel -->
        
        <p class="text-center add_bottom_30">
            <a href="all_tours_list.html" class="btn_1">Ver Todos</a>
        </p>

        <hr class="mt-5 mb-5">

        
    </div>
    <!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2>Plan <span>Your Tour</span> Easly</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>
            <div class="row feature_home_2">
                <div class="col-md-4 text-center">
                    <img src="/res/site/img/adventure_icon_1.svg" alt="" width="75" height="75">
                    <h3>Itineraries studied in detail</h3>
                    <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/res/site/img/adventure_icon_2.svg" alt="" width="75" height="75">
                    <h3>Room and food included</h3>
                    <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/res/site/img/adventure_icon_3.svg" alt="" width="75" height="75">
                    <h3>Everything organized</h3>
                    <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                </div>
            </div>

            <div class="banner_2">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div>
                        <h3>Your Perfect<br>Tour Experience</h3>
                        <p>Activities and accommodations</p>
                        <a href="all_tours_list.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner_2 -->

        </div>
        <!-- End container -->
    </div>
    <!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Lates <span>Blog</span> News</h2>
            <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
        </div>

        <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="/res/site/img/news_home_1.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="/res/site/img/news_home_2.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Jhon Doe</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Duo eius postea suscipit ad</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="/res/site/img/news_home_3.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Luca Robinson</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Elitr mandamus cu has</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
                <div class="col-lg-6">
                    <a class="box_news" href="blog.html">
                        <figure><img src="/res/site/img/news_home_4.jpg" alt="">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>Paula Rodrigez</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Id est adhuc ignota delenit</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
    </div>
    <!-- End container -->
</main>
<!-- End main -->