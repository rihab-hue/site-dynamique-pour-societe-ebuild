@extends('layouts.front')
@section('title', 'Accueil')
@section('content')
    <!--image accueil-->
    <div class="banner home-banner d-flex align-items-center">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-l.eft">
                    <h1>{{ __('message.home') }}</h1>
                    <p class="larger-txt">{{ __('message.homep') }} </p>
                    <a href="{{ route('portfolio') }}" class="custom-btn secondary-btn">{{ __('message.btnprojet') }}</a>
                </div>
                <!-- End of .col-lg-5 -->
                <div class="col-lg-6">
                    @foreach ($info as $c)
                        <div class="img-container text-center text-lg-right">
                            <img src="{{ asset('uploads') }}/{{ $c->image }}" alt="Home banner image"
                                class="img-fluid">
                        </div>
                    @endforeach
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-7 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .banner -->

    <!-- achievements starts -->
    <div class="achievements section-gap theme-bg-d achievement-extra-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="{{ asset('assets/images/achievements/counter/counter-icon-1 (2).png') }}"
                                alt="Happy Clients">
                        </div>
                        @php
                            $totale = 0;
                            $totalee = 0;
                            $totaleee = 0;
                            foreach ($info as $info) {
                                $totale += $info['chiffre_happyclient'];
                                $totalee += $info['chiffre_projetencours'];
                                $totaleee += $info['chiffre_projetterminer'];
                            }
                            
                        @endphp
                        <!-- End of .icon-container -->

                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="counter">{{ $totale }}</span>+
                            </div>
                            <!-- End of .number -->
                            {{ __('message.client') }} <br> {{ __('message.happy') }}
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>
                <!-- End of .col-4 -->
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="{{ asset('assets/images/achievements/counter/counter-icon-2 (2).png') }}"
                                alt="Running Projects">
                        </div>
                        <!-- End of .icon-container -->

                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="counter">{{ $totalee }}</span>+
                            </div>
                            <!-- End of .number -->
                            {{ __('message.projet') }} <br>{{ __('message.cours') }}
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="{{ asset('assets/images/achievements/counter/counter-icon-3 (2).png') }}"
                                alt="Project Completed">
                        </div>
                        <!-- End of .icon-container -->

                        <div class="counter-wrapper">
                            <div class="number">
                                <span class="counter">{{ $totaleee }}</span>+
                            </div>
                            <!-- End of .number -->
                            {{ __('message.projet') }} <br> {{ __('message.terminer') }}
                        </div>
                        <!-- End of .counter-wrapper -->
                    </div>
                    <!-- End of .counter-block -->
                </div>

            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .achievements -->
    <!--services-->
    <section class="services light-grey-bg" id="cynic-services" data-scroll-offset="165">
        <div class="floating-service-wrapper section-gap">
            <div class="container">
                <h2 class="section-title text-center" id="s">{{ __('message.service') }}</h2>
                <p class="larger-txt text-center">{{ __('message.descriptionservice') }}
                </p>
                <div class="grid-wrapper">
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-lg-6">
                            <div class="service-block text-center">
                                <img src="{{ asset('assets/images/services/service-icon-1.png') }}"
                                    alt="Logo and branding">
                                <h4>{{ __('message.logo') }}<br> &amp; {{ __('message.image de marque') }} </h4>
                                <p> {{ __('message.descriptionlogo') }} </p>
                            </div>
                            <!-- End of .service-block -->
                        </div>
                        <!-- End of .col-lg-4 -->

                        <div class="col-xl-4 col-lg-6">
                            <div class="service-block text-center">
                                <img src="{{ asset('assets/images/services/service-icon-2.png') }}" alt="undefined">
                                <h4> {{ __('message.Développement') }}</h4>
                                <p> {{ __('message.descriptionDéveloppement') }}
                                </p>
                            </div>
                            <!-- End of .service-block -->
                        </div>
                        <!-- End of .col-lg-4 -->

                        <div class="col-xl-4 col-lg-6">
                            <div class="service-block text-center">
                                <img src="{{ asset('assets/images/services/service-icon-3.png') }}" alt="undefined">
                                <h4>
                                    {{ __('message.Développementmobile') }}</h4>
                                <p> {{ __('message.descriptionDéveloppementmobile') }}
                                    .</p>
                            </div>
                            <!-- End of .service-block -->
                        </div>
                        <!-- End of .col-lg-4 -->

                        <div class="col-xl-4 col-lg-6">
                            <div class="service-block text-center">
                                <img src="{{ asset('assets/images/services/service-icon-4.png') }}"
                                    alt="Search Engine Optimization">
                                <h4 id="s1"> {{ __('message.moteurderecherche') }}</h4>
                                <p>
                                    {{ __('message.descriptionmoteurderecherche') }} </p>
                            </div>
                            <!-- End of .service-block -->
                        </div>
                        <!-- End of .col-lg-4 -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="service-block text-center">
                                <img src="{{ asset('assets/images/services/service-icon-6.png') }}"
                                    alt="Online Marketing">
                                <h4 id="s1"> {{ __('message.marketing') }}</h4>

                                <p> {{ __('message.descriptionmarketing') }}</p>
                            </div>
                            <!-- End of .service-block -->
                        </div>
                        <!-- End of .col-lg-4 -->
                    </div>
                    <!-- End of .row -->
                </div>
                <!-- End of .grid-wrapper -->
            </div>
            <!-- End of .container -->
        </div>
        <!-- End of .floating-service-wrapper -->
    </section>

    <!-- our features starts -->
    <section class="features light-grey-bg" id="cynic-about" data-scroll-offset="165">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 offset-lg-1 text-center text-lg-right">
                        <div class="img-container">
                            <img src="{{ asset('assets/images/features/features-img-1.png') }}" alt="why choose us"
                                class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                    </div>
                    <!-- End of .col-lg-6 -->
                    <div class="col-lg-5">
                        <div class="features-content">
                            <h2 class="section-title">{{ __('message.Raisons') }}</h2>
                            <p>{{ __('message.ebuildfooter') }}</p>
                            <a href="{{ route('apropos') }}" class="hyperlink">{{ __('message.savoir') }}</a>
                        </div>
                        <!-- End of .features-content -->
                    </div>
                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .features -->

    <!-- Projects starts -->
    <section class="projects section-gap grey-bg" id="cynic-projects" data-scroll-offset="75">
        <div class="container">
            <h2 class="section-title text-center">{{ __('message.Notreportfolio') }}</h2>
            <div class="item-showcase grid-wrapper__small-padding">
                <div class="row ">
                    @foreach ($projets as $c)
                        <div class="col-lg-4 col-md-6 ">
                            <a href="{{ route('portfolio') }}" class="img-card text-center portfolio-card white-bg ">
                                <img alt="projet" class="img-fluid" src="{{ asset('uploads') }}/{{ $c->image }}">
                                <h4>
                                    <span>{{ $c->nom_projet }} </span>
                                </h4>
                                <h5>{{ $c->clients->nom_client }}</h5>

                            </a>
                            <!-- End of .img-card -->
                        </div>
                    @endforeach

                </div>
                <div class="col-12 text-center"><a href="{{ route('portfolio') }}" class="custom-btn secondary-btn">
                        {{ __('message.DÉCOUVREZPLUS') }} </a></div>
                <!-- End of .row -->
            </div>
            <!-- End of .project-showcase -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .projects -->

    <!--partenaire-->
    <div class="clients">
        <div class="container">
            <div class="row align-items-center clients-carousel-wrapper owl-carousel">
                @foreach ($clients as $c)
                    <div class="item client">
                        <img src="{{ asset('uploads') }}/{{ $c->logo }}" alt="clients' logo">
                    </div>
                @endforeach
            </div>
            <!-- End of .clients-carousel-wrapper -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .clients -->

    <!-- newslettre -->
    <section class="newsletter section-gap theme-bg-d ">
        <div class="container">
            <h2 class="text-center"> {{ __('message.newslettre') }}
            </h2>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <!--form newslettre -->
            <form action="/inscrit" class="newsletter-form" method="POST">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-md">
                        <input type="text" name="nom" placeholder="Name">
                    </div>
                    <div class="col-md">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-auto">
                        <button type="submit" class="custom-btn secondary-btn">{{ __('message.btninscrit') }}</button>
                    </div>
                </div>
                <!-- End of .row -->
            </form>
            <!-- End of .newsletter-form -->

            <!--social media-->
            <div class="social-icons-wrapper d-flex justify-content-center">
                <p>{{ __('message.btnSuivez-nous') }}</p>
                <ul class="social-icons">
                    <li>
                        <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>

                </ul>
                <!-- End of .social-icons -->
            </div>
            <!-- End of .social-icons-wrapper -->
        </div>
        <!-- End of .container -->
    </section>

    <!-- Section les nouvelles -->
    <section class="latest-news section-gap light-grey-bg" id="cynic-news" data-scroll-offset="75">
        <div class="container">
            <h2 class="section-title text-center" id="b">{{ __('message.nouvelle') }} </h2>
            <h6 class="larger-txt text-center">{{ __('message.blog') }}</h6>
            <div class="grid-wrapper">
                <div class="row justify-content-center">
                    @foreach ($blog as $c)
                        <div class="col-lg-4 col-md-6">
                            <div class="img-card news-card">
                                <img src="{{ asset('uploads') }}/{{ $c->image }}" alt="news image"
                                    class="img-fluid">
                                <div class="content ">
                                    <h4>{{ $c->nom }}
                                        <span>{!! $c->description !!}</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End of .row -->

            </div>
            <!-- End of .grid-wrapper -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .latest-news -->



    <!-- location starts -->
    <section class="location section-gap light-grey-bg" id="cynic-contact" data-scroll-offset="75"
        data-scroll-offset-mobile="75">
        <div class="container">
            <h2 class="section-title text-center">{{ __('message.emplacement') }}</h2>
            <ul class="nav nav-tabs location-tab justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#location-tab-1">
                        {{ __('message.tunisie') }}</a>
                </li>
            </ul>
            <!-- End of .nav-tabs -->

            <div class="tab-content location-tab-content grid-wrapper" id="myTabContent">
                <div class="tab-pane fade show active" id="location-tab-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355495124!2d-118.69191514099776!3d34.020730497983934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531805451146"
                        width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- End of .tab-content -->

            <div class="contact-info">
                <div class="row justify-content-between">

                    <div class="col-lg-4 col-md-6">

                        <div class="info">
                            <h5> {{ __('message.Siègesocial') }}</h5>
                            <p>{{ $info->lien_social }}</p>
                        </div>
                        <!-- End of .info -->
                    </div>
                    <!-- End of .col-md-3 -->
                    <div class="col-lg-3 col-md-6">

                        <div class="info">
                            <h5>Email</h5>
                            <a href="mailto:contact@e-build.tn">{{ $info->email_contact }}</a>
                        </div>
                        <!-- End of .info -->
                    </div>
                    <!-- End of .col-md-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="info">
                            <h5>
                                {{ __('message.téléphone') }} </h5>
                            <a href="tel:+21625 892 403">+ (216)
                                25 892 403</a>
                        </div>
                        <!-- End of .info -->
                    </div>
                    <!-- End of .col-md-3 -->
                    <div class="col-md-6 col-lg-2 text-lg-right info">
                        <a href="{{ route('contact') }}" class="custom-btn secondary-btn">
                            {{ __('message.NousContacter') }}</a>
                    </div>
                </div>
                <!-- End of .contact-in -->
            </div>
            <!-- End of .contact-info -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .location -->


@endsection
