<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Atlantic Tecnologia - Desenvolvimento de sistemas.">
    <meta name="author" content="Ansonika">
    <title>Eldorado Camping Club</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/res/site/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/res/site/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/res/site/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/res/site/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/res/site/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">

    <!-- COMMON CSS -->
	<link href="/res/site/css/bootstrap.min.css" rel="stylesheet">
    <link href="/res/site/css/style.css" rel="stylesheet">
	<link href="/res/site/css/vendors.css" rel="stylesheet">

	<!-- CUSTOM CSS -->
	<link href="/res/site/css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-6"><i class="icon-phone"></i><strong>(62) 3379-2674</strong></div>
                    <div class="col-6">
                        <ul id="top_links">
                            <li><a href="#sign-in-dialog" id="access_link">Entrar</a></li>
                            <li><a href="#sign-in-dialog">Registrar-se</a></li>
                            <li><a href="#" id="wishlist_link">Avaliações</a></li>
                            <li><a href="#">Reservar</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="index.html" title="City tours travel template">Clube Eldorado Camping</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="/res/site/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                         <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Inicio <i class="icon-down-open-mini"></i></a>
                                
                            </li>
							 <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Pacotes <i class="icon-down-open-mini"></i></a>
                                <ul>
                                   
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Ambientes <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_tours_list.html">All tours list</a></li>
                                    <li><a href="all_tours_grid.html">All tours grid</a></li>
                                    <li><a href="all_tours_grid_masonry.html">All tours Sort Masonry</a></li>
                                    <li><a href="all_tours_map_listing.html">All tours map listing</a></li>
                                    <li><a href="single_tour.html">Single tour page</a></li>
                                    <li><a href="single_tour_with_gallery.html">Single tour with gallery</a></li>
                                    <li class="third-level"><a href="javascript:void(0);">Single tour fixed sidebar</a>
                                        <ul>
                                            <li><a href="single_tour_fixed_sidebar.html">Single tour fixed sidebar</a></li>
                                            <li><a href="single_tour_with_gallery_fixed_sidebar.html">Single tour 2 Fixed Sidebar</a></li>
                                            <li><a href="cart_fixed_sidebar.html">Cart Fixed Sidebar</a></li>
                                            <li><a href="payment_fixed_sidebar.html">Payment Fixed Sidebar</a></li>
                                            <li><a href="confirmation_fixed_sidebar.html">Confirmation Fixed Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single_tour_working_booking.php">Single tour working booking</a></li>
                                    <li><a href="single_tour_datepicker_v2.html">Date and time picker V2</a></li>
                                    <li><a href="cart.html">Single tour cart</a></li>
                                    <li><a href="payment.html">Single tour booking</a></li>
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Menu <i class="icon-down-open-mini"></i></a><ul>
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Como Chegar <i class="icon-down-open-mini"></i></a>
                                <ul>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" data-toggle="dropdown" class="cart_bt"><i class="icon_bag_alt"></i><strong>3</strong></a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="/res/site/img/thumb_cart_1.jpg" alt="image"></div>
                                        <strong><a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="/res/site/img/thumb_cart_2.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="/res/site/img/thumb_cart_3.jpg" alt="image"></div>
                                        <strong><a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="#" class="button_drop">Abrir Carrinho</a>
                                        <a href="#" class="button_drop outline">Finalizar</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->