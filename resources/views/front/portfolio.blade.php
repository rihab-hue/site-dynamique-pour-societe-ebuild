@extends('layouts.front')
@section('title', 'Portfolio')
@section('content')
    <!-- banner starts -->
    <div class="banner d-flex align-items-center light-grey-bg">
        <!-- Breadcrumb starts -->
        <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ __('message.accueil') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('message.Portfolio') }}</li>
                </ol>
            </div>
        </nav>


        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1>{{ __('message.Portfolio') }}</h1>
                    <p class="larger-txt">{{ __('message.descriptionportfolio') }}</p>

                </div>
                <!-- End of .col-lg-5 -->

                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="{{ asset('assets/images/banner/portfolio-banner.png') }}" alt="Banner image"
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


    <!-- Projects starts -->
    <section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
        <div class="container">
            <h2 class="section-title text-center">{{ __('message.Portfoliocomplet') }}</h2>

            <div class="item-showcase grid-wrapper__small-padding">
                <div class="btn-filter-wrap nav nav-tabs justify-content-center">
                    <button class="btn-filter nav-link is-checked" data-filter="*">
                        <i class="ml-tro-3-trophy-cup-medallion-locket-win"></i>Tout le travail</button>
                    @foreach ($projets as $c)
                        <button class="btn-filter nav-link" data-filter=".category-a">
                            <i
                                class="ml-symtwo-34-cursor-click-browser-website-arrow-computer"></i>{{ $c->type_projet }}</button>
                    @endforeach
                </div>
                <!-- End of .btn-filter-wrap -->


                <div class="row iso-grid">
                    @foreach ($projets as $c)
                        <div class="col-lg-4 col-md-6 item category-a">
                            <a href="#product-modal" class="img-card text-center portfolio-card white-bg "
                                data-bs-toggle="modal" data-target="#product-modal">
                                <img src="{{ asset('uploads') }}/{{ $c->image }}" alt="product" class="img-fluid">
                                <h4>
                                    <span>{{ $c->nom_projet }} </span>
                                </h4>
                                <h5>{{ $c->clients->nom_client }}</h5>
                                <p>{{ $c->type_projet }}</p>
                            </a>
                            <!-- End of .img-card -->
                        </div>
                        <!-- End of .col-lg-4 -->
                    @endforeach
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .project-showcase -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .projects -->

    <section class="newsletter section-gap theme-bg-d newsletter__white">
        <div class="container">
            <h2 class="text-center">{{ __('message.newslettre') }}
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
                    <li>
                </ul>
                <!-- End of .social-icons -->
            </div>
            <!-- End of .social-icons-wrapper -->
        </div>
        <!-- End of .container -->
    </section>

    <!-- Product Modal Starts -->
    @foreach ($projets as $c)
        <div class="modal fade full-width-modal product-modal" id="product-modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                        <!-- End of .close -->
                    </div>
                    <!-- End of .modal-header -->
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="modal-img text-center">
                                    <img src="{{ asset('uploads') }}/{{ $c->image }}" alt="product"
                                        class="img-fluid">

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="modal-body__inner-content">
                                    <h3>
                                        <span>{{ $c->nom_projet }} </span>
                                    </h3>
                                    <p>{!! $c->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of .modal-body -->
                </div>
                <!-- End of .modal-content -->
            </div>
            <!-- End of .modal-dialog -->
        </div>
    @endforeach
    <!-- End of .portfolio-modal -->
@endsection
