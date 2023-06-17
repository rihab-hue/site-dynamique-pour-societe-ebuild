<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <title> @yield('title')</title>
    <!-- Basic metas -->
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Mobile specific metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Cynic">
	<meta name="twitter:creator" content="@Cynic">
	<meta name="twitter:title" content="Cynic">
	<meta name="twitter:description" content="Cynic Illustrated Small Digital Agency">
	<meta name="twitter:image" content="http://axilthemes.com/templates/cynic/illustrated-small-digital-agency/assets/images/brand-logo.svg">
	<!-- Facebook -->
	<meta property="og:url" content="">
	<meta property="og:title" content="Cynic">
	<meta property="og:description" content="Cynic Illustrated Small Digital Agency">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://axilthemes.com/templates/cynic/illustrated-small-digital-agency/assets/images/brand-logo.svg">
	<meta property="og:image:secure_url" content="">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
     <!-- links for favicon -->
     <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/brand-logo.png')}}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/brand-logo.png')}}">
     
     <link rel="manifest" href="{{asset('assets/favicon/manifest.json')}}">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="{{asset('assets/favicon/brand-logo.png')}}">
     <meta name="theme-color" content="#ffffff">
 
     <!-- Icon fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,500i,700,700i,900" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
      
     
 
     <!-- css links -->
     <!-- Bootstrap link -->
     <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
 
     <!-- Owl Carousel -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/owl.carousel.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/owl.theme.default.min.css')}}">
 
     <!-- Magnific popup -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor/magnific-popup.css')}}">
 
     <!-- Custom styles -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">


     <link rel="stylesheet" href="http://www.wrappixel.com/demos/admin-templates/pixeladmin/plugins/bower_components/dropify/dist/css/dropify.min.css">
     @yield('css')
<body>
    @yield('content')
    <header class="page-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/images/brand-logo.png')}}" alt="ebluid brand logo">
                </a>
                <!-- End of .navbar-brand -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-navbar"
                    aria-controls="custom-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="custom-toggler-icon"></span>
                    <span class="custom-toggler-icon"></span>
                    <span class="custom-toggler-icon"></span>
                </button>
                <!-- End of .navbar-toggler -->
    
                <div class="collapse navbar-collapse" id="custom-navbar" >
                    <ul class="navbar-nav ml-auto align-items-center dynamic-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link"> {{ __('message.accueil') }}</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#s" class="nav-link"> {{ __('message.Services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('apropos')}}" class="nav-link"> {{ __('message.apropos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('portfolio')}}" class="nav-link">{{ __('message.Portfolio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#b" class="nav-link"> {{ __('message.blog') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link"> {{ __('message.Contact') }}</a>
                        </li>
                        
                        <li class="select-style">
                            <select  onchange="changelanguage(this.value) " >
                                    
                                    <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value='en' >
                                        <i class="flag flag-us"></i>English</option>
                                    <option {{session()->has('lang_code')?(session()->get('lang_code')=='fr'?'selected':''):''}} value='fr' >French</option>                  
                            </select>
                            </div>
                        </li>
                    
                    </ul>
                </div> 
            </nav>
        </div>
        <script>
            function changelanguage(lang){
                window.location='{{url("change-language")}}/'+lang;
            }
        </script>
        
        <!-- End of .container -->
    </header>
    <!-- End of .page-header -->
<!-- footer starts -->
<footer class="page-footer dark-footer-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-widget widget-about">
                    <a href="/"><img class="footer-logo" src="{{asset('assets/images/brand-logo.png')}}" alt="footer logo"
                            height="16"></a>
                    <p>{{ __('message.ebuildfooter')  }}.</p>
                    <ul class="social-icons">
                        <li>
                            <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End of .social-icons -->
                    <p class="copywrite-txt">© 2022 <a href="http://www.axilthemes.com">Ebuild</a>. All Rights
                        Reserved.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-widget">
                    <h5 class="footer-nav-title">{{ __('message.Services') }}</h5>
                    <ul class="footer-nav dynamic-nav">
                        <li><a href="#s">
                            {{ __('message.Développement') }}</a></li>
                        <li><a href="#s">{{ __('message.logo') }}&amp; {{ __('message.image de marque') }} </a></li>
                        <li><a href="#s">{{ __('message.Développementmobile') }}</a></li>
                        <li><a href="#s">{{ __('message.moteurderecherche') }}</a></li>
                        <li><a href="#s">{{ __('message.marketing') }}</a></li>
                    </ul>
                </div>
            </div>
            <!-- End of .col-lg-2 -->

            <div class="col-lg-3">
                <div class="footer-widget">
                    <h5 class="footer-nav-title">{{ __('message.support') }}</h5>
                    <ul class="footer-nav dynamic-nav">
                        <li><a href="{{route('contact')}}">{{ __('message.Contact') }}</a></li>
                    </ul>
                </div>
            </div>
            <!-- End of .col-lg-2 -->
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5 class="footer-nav-title">{{ __('message.resources') }}</h5>
                    <ul class="footer-nav dynamic-nav">
                        <li><a href="{{route('portfolio')}}">{{ __('message.Portfolio') }}</a></li>
                        <li><a href="{{route('apropos')}}">{{ __('message.apropos') }} </a></li>
                        <li><a href="/#b">{{ __('message.blog') }}</a></li>
                    </ul>
                </div>
            </div>
            <!-- End of .col-lg-2 -->
        </div>
        <!-- End of .row -->
    </div>
    
    <!-- End of .container -->
</footer>
    <!-- End of .page-footer -->

    <!-- Javascripts -->

    <!-- jQuery -->
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate.min.js')}}"></script>

    <!-- jQuery Easing Plugin -->
    <script src="{{asset('assets/js/vendor/easing-1.3.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/isotope.pkgd.min.js')}}"></script>

    <!-- jQuery progressbar plugin -->
    <script src="{{asset('assets/js/vendor/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.counterup.min.js')}}"></script>
    <!-- ImagesLoaded js -->
    <script src="{{asset('assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Owl carousel js -->
    <script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
    <!-- Magnific popup -->
    <script src="{{asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <!-- Plugins -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- Custom Script -->
    <script src="{{asset('assets/js/main.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('js')
</body>
</html>