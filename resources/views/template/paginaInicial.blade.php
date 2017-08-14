<!DOCTYPE html>
<html lang="es">
<head>
    <title>CGUIR</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/style.css') }}">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

</head>
<body id="home">

    <!-- ****************************** Preloader ************************** -->

    <div id="preloader"></div>

    <!-- ****************************** Sidebar ************************** -->
    <nav id="sidebar-wrapper">
        <a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
        <ul class="sidebar-nav">
            <li><a href="#home">Inicio</a></li>
            @yield('menuPrincipal')
        </ul>
    </nav>


    <!-- ****************************** Header ************************** -->

    <header class="sticky" id="header">
        <section class="container">
            <section class="row" id="logo_menu">
                <section class="col-xs-8"><a class="logo" href="">@yield('nombreGrupo')</a></section>
                <section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
            </section>
        </section>
    </header>

    <!-- ****************************** Banner ************************** -->


    <section id="banner" >
        <section class="container">
            <a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#contenido"><i class="ion-ios-download-outline"></i></a>
            <section class="row">
                <div class="col-md-6">
                    <div class="headings">
                        <h1 class="wow animated fadeInDown">@yield('tituloSeccionInicial')</h1>
                        <p class="wow animated fadeInLeft">@yield('contenidoSeccionInicial')</p>
                        <!-- 
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-5">
                                <div>
                                    <a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-android"></i> Play Store</a>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-5">
                                <div>
                                    <a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-apple"></i> App Store</a>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-md-6 hidden-xs hidden-sm">
                    <div class="hand-container">
                    <!--<img class="iphone-hand img_res wow animated bounceInUp" data-wow-duration="1.2s" src="{{ asset('images/geoideGeneral2.png') }}"></img>-->
                    <div class="clearfix"></div>
                    </div>
                </div>
            </section>
        </section>
    </section>

    <!-- ****************************** Features Section ************************** -->
    <!-- Tecnologias
    <section id="features" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left"></span>
                <span class="bb-bottom-left"></span>
                Features
                <span class="bb-top-right"></span>
                <span class="bb-bottom-right"></span>
                </h1></div>
            </section>

            <section class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
                        <i class="ion-ios-settings" style="color:#9b59b6;"></i>
                        <h2>Tune up</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
                        <i class="ion-ios-locked-outline" style="color:#d35400;"></i>
                        <h2>Security</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
                        <i class="ion-nuclear" style="color:#00ceb8;"></i>
                        <h2>Firewall</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
                        <i class="ion-ios-browsers-outline" style="color:#c0392b;"></i>
                        <h2>HD Widgets</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
                        <i class="ion-ios-loop" style="color:#27ae60;"></i>
                        <h2>Data Sync</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
                        <i class="ion-ios-glasses" style="color:#2c3e50;"></i>
                        <h2>Customize</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </section>
    </section>
    -->

    <!-- ****************************** Gallery Section ************************** -->
    <!--
    <section id="gallery" class="block">
        <section class="container">
            <section class="row">
                <div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
                <span class="bb-top-left" style="border-color: #fff; "></span>
                <span class="bb-bottom-left" style="border-color: #fff; "></span>
                Gallery
                <span class="bb-top-right" style="border-color: #fff; "></span>
                <span class="bb-bottom-right" style="border-color: #fff; "></span>
                </h1></div>
            </section>
            <section class="row">
                <div class="col-xs-12">
                    <div id="screenshots" class="owl-carousel owl-theme">
                      <div class="item"><img src="assets/img/screenshot-1.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-2.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-3.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-4.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-5.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-6.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-7.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-3.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-5.png" class="img_res wow animated zoomIn"></div>
                      <div class="item"><img src="assets/img/screenshot-1.png" class="img_res wow animated zoomIn"></div>
                    </div>
                     <div class="customNavigation">
                      <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="ion-ios-arrow-left"></i></a>
                      <a class="btn next gallery-nav wow animated bounceInRight"><i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </section>
        </section>
    </section> -->

    <!-- ****************************** Team Section ************************** -->
    <!--
    <section id="team" class="block">
        <section class="container">
            <section class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <h1 class="block-title wow animated rollIn">
                            <span class="bb-top-left"></span>
                            <span class="bb-bottom-left"></span>
                            Development Team
                            <span class="bb-top-right"></span>
                            <span class="bb-bottom-right"></span>
                        </h1>
                    </div>
                </div>
            </section>
            <section class="row">
                <section class="col-md-3 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="assets/img/dev-1.jpg" class="img_res team-pic">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="team-social">
                            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-3 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="assets/img/dev-2.jpg" class="img_res team-pic">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="team-social">
                            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-3 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="assets/img/dev-3.jpg" class="img_res team-pic">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="team-social">
                            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
                        </ul>
                    </div>
                </section>
                <section class="col-md-3 col-sm-6">
                    <div class="team-member wow animated fadeIn" data-wow-delay=="0.3s">
                        <img src="assets/img/dev-4.jpg" class="img_res team-pic">
                        <h2 class="wow animated fadeInDown" data-wow-delay=="0.7s">Rubel Saheb</h2>
                        <p class="wow animated fadeIn" data-wow-delay=="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul class="team-social">
                            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
                        </ul>
                    </div>
                </section>
            </section>
        </section>
    </section>
    -->
    <!-- ****************************** Testimonial ************************** -->

    <section id="contenido" class="block">

        <section class="container">
            <section class="row">
                <section class="col-xs-12">
                    <div id="review" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <!--<div class="col-sm-4 col-sm-offset-1">
                                   <div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
                                    <p class="review-star">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-outline"></i>
                                    </p>
                                </div>-->
                                <div class="col-sm-12">
                                    <p class="titulo-item">
                                        @yield('mision')
                                    </p>
                                    <br><br><br>
                                    <p class="review-desc">
                                       @yield('contenidoMision')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <!--<div class="col-sm-4 col-sm-offset-1">
                                    <div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
                                    <p class="review-star">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-outline"></i>
                                    </p>
                                </div>-->
                                <div class="col-sm-12">
                                    <p class="titulo-item">
                                        @yield('vision')
                                    </p>
                                    <br><br><br>
                                    <p class="review-desc">
                                        @yield('contenidoVision')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <!--<div class="col-sm-4 col-sm-offset-1">
                                    <div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
                                    <p class="review-star">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star-outline"></i>
                                    </p>
                                </div>-->
                                <div class="col-sm-12">
                                    <p class="titulo-item">
                                        @yield('historia')
                                    </p>
                                    <br><br><br>
                                    <p class="review-desc">
                                        @yield('contenidoHistoria')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </section>

    <!-- ****************************** Subscribe Section ************************** -->
    <!--
    <section id="subscribe">
        <section class="container">
            <section class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <p class="susbcribe-text">
                    <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor</strong> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </section>
        </section>
        <section class="container subscribe-wrap">
            <section class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <form role="form">
                            <div class="col-xs-10">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <button type="submit" class="btn-custom">
                                <i class="ion-ios-arrow-thin-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </section>-->

    <!-- ****************************** Contact Section ************************** -->

    <section id="contact">
            <section class="container contact-wrap">
                <section class="row">
                    <div class="title-box"><h1 class="block-title wow animated rollIn">
                    <span class="bb-top-left"></span>
                    <span class="bb-bottom-left"></span>
                    @yield('titulosContato')
                    <span class="bb-top-right"></span>
                    <span class="bb-bottom-right"></span>
                    </h1></div>
                </section>
            </section>
            <section class="address">
                <div class="container">
                    <div class="col-sm-12">
                        <ul class="address-list">
                            <li><i class="ion-ios-location" style="background-color: rgb(28, 33, 45);"></i> <span>@yield('direccionVision')</span></li>
                            <!--<li><i class="ion-ios-telephone" style="background-color: #63cfea;"></i> <span>670-898-2847 </span></li>-->
                            <li><i class="ion-email" style="background-color: #dd5044;"></i> <span>@yield('correoVision')</span></li>
                            <li><i class="ion-earth" style="background-color: #3b5998;"></i> <span>@yield('linkVision')</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="mailbox">
                <div class="container">
                    <div class="col-sm-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                        <div id="success"></div>
                                        <button type="submit" class="polo-btn contact-submit"><i class="ion-paper-airplane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </section>

        <!-- ****************************** Footer ************************** -->

        <section id="footer">
            <section class="container">
                <section class="row">
                    <div class="col-sm-6">
                        <h1 class="footer-logo">
                        @yield('descripcionPlantilla')
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <p class="copyright">@yield('logos')</p>
                    </div>
                </section>
            </section>
        </section>


    <!-- All the scripts -->

    <script src="{{ asset('plugins/poloPlantilla/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/wow.min.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/script.js') }}"></script>

</body>
</html>