<?php if(!class_exists('Rain\Tpl')){exit;}?><footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Ajuda?</h3>
                <a href="tel://004542344599" id="phone">+55 (62) 3379-2674 </a>
                <a href="#" id="email_footer">contato@eldoradocampingclub.com.br</a>
            </div>
            <div class="col-md-3">
                <h3>Sobre</h3>
                <ul>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">FAQ</a></li>                    
                    <li><a href="#">Registrar</a></li>
                     <li><a href="#">Politica e Privacidade</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#">Comunidade</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contato</a></li>
                     <li><a href="#">Galeria</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Categorias</h3>
                <ul>
                    <?php require $this->checkTemplate("categories-menu");?>                    
                </ul>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© Eldorado Camping Club</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Entrar</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login com Facebook</a>
            <a href="#0" class="social_bt google">Login com Google</a>
            <div class="divider"><span>Ou</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <input id="remember-me" type="checkbox" name="check">
                    <label for="remember-me">Lembrar Me</label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Esqueceu sua senha?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
            <div class="text-center">
                Don’t have an account? <a href="javascript:void(0);">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<!-- Common scripts -->
<script src="/res/site/js/jquery-2.2.4.min.js"></script>
<script src="/res/site/js/common_scripts_min.js"></script>
<script src="/res/site/js/functions.js"></script>

<!-- Date picker -->
<script>$('input.date-pick').datepicker();</script>

<!-- Input quantity  -->
<script src="/res/site/js/input_qty.js"></script>

</body>

</html>