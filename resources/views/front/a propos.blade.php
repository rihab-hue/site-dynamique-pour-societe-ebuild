@extends('layouts.front')
@section('title', 'A propos')
@section('content')
    <!-- Header starts -->
    <!-- banner starts -->
    <div class="banner d-flex align-items-center light-grey-bg">

        <!-- Breadcrumb starts -->
        <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ __('message.accueil') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('message.apropos') }}</li>
                </ol>
            </div>
        </nav>

        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1> {{ __('message.Aproposdenous') }}</h1>
                    <p class="larger-txt"> {{ __('message.descriptionAproposdenous') }}
                        .</p>
                </div>
                <!-- End of .col-lg-5 -->
                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="{{ asset('assets/images/banner/about-banner.png') }}" alt="Home banner image"
                            class="img-fluid">
                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-7 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->
    </div>
    <!-- End of .banner -->
    <!-- our features starts -->
    <section class="features section-gap" id="cynic-about" data-scroll-offset="165">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="img-container">
                            <img src="{{ asset('assets/images/features/features-img-1.png') }}" alt="why choose us"
                                class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                    </div>
                    <!-- End of .col-lg-6 -->

                    <div class="col-lg-5 offset-lg-1">
                        <div class="features-content">
                            <h2 class="section-title">{{ __('message.Raisons') }}</h2>
                            <p>{{ __('message.ebuildfooter') }}</p>
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

    <!-- achievements starts -->
    <div class="achievements section-gap theme-bg-d ">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="counter-block d-flex align-items-center justify-content-center">
                        <div class="icon-container">
                            <img src="{{ asset('assets/images/achievements/counter/counter-icon-1 (2).png') }}"
                                alt="Happy Clients">
                        </div>
                        <!-- End of .icon-container -->
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

    <section class="newsletter section-gap theme-bg-d newsletter__white">
        <div class="container">
            <h2 class="text-center"{{ __('message.newslettre') }}>
            </h2>

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
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

            <div class="social-icons-wrapper d-flex justify-content-center">
                <p>{{ __('message.btnSuivez-nous') }}</p>
                <ul class="social-icons">
                    <li>
                        <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                            <i class="fab fa-facebook-f"></i>
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

    <div class="modal fade team-modal" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <!-- End of .close -->
                </div>
                <!-- End of .modal-header -->

                <div class="modal-body text-center">
                    <img src="{{ asset('assets/images/team/team-modal-img.png') }}" alt="team modal image"
                        class="img-fluid modal-feat-img">
                    <div class="modal-title">
                        <h4>Steve Johnson
                            <span>Chief Exicutive Officer</span>
                        </h4>
                    </div>
                    <!-- End of .modal-title -->
                    <p>To be fair, in certain contexts, your professional bio does need to be more formal, like Mr.
                        Erickson's up there. But in many cases, writing a bio that's readable even conversational is
                        actually a really good thing. But once created, this bio should represent who you are in the eyes.
                    </p>

                    <ul class="social-icons">
                        <li>
                            <a href="http://www.behance.net/" target="_blank" rel="noopener">
                                <i class="fab fa-behance"></i>
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
                <!-- End of .modal-body -->
            </div>
            <!-- End of .modal-content -->
        </div>
        <!-- End of .modal-dialog -->
    </div>
    <!-- End of .team-modal -->
@endsection
