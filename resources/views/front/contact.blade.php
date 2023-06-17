@extends('layouts.front')
@section('title', 'Contact')
@section('content')
    <div class="banner d-flex align-items-center light-grey-bg">

        <!-- Breadcrumb starts -->
        <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ __('message.accueil') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('message.Contact') }}</li>
                </ol>
            </div>
        </nav>


        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1>{{ __('message.Contact') }}</h1>
                    <p class="larger-txt"> {{ __('message.descriptionContact') }}
                    </p>

                </div>
                <!-- End of .col-lg-5 -->

                <div class="col-lg-6">
                    <div class="img-container text-center text-lg-right">
                        <img src="{{ asset('assets/images/banner/contact-banner.png') }}" alt="Contact banner image"
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

    <section class="contact-us section-gap">
        <div class="container">
            <h2 class="section-title text-center">{{ __('message.NousContacter') }}</h2>
            <p class="larger-txt text-center"> {{ __('message.descriptionformcontact') }}</p>
            <div class="quote-form-wrapper contact-form-wrapper text-center grid-wrapper">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <!--contact form -->
                <form method="post" action="{{ route('contacte') }}">
                    {{ csrf_field() }}
                    <div class="quote-form text-center row">
                        <div class="col-lg-6">
                            <input type="text" class="@error('name') is-invalid @enderror" placeholder="Nom"
                                name="name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <input type="email" class="@error('email') is-invalid @enderror" placeholder="Email"
                                name="email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <input type="number" class="@error('phone_number') is-invalid @enderror"
                                placeholder="telephone" name="phone_number" required>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">

                            <input type="text" class=" @error('subject') is-invalid @enderror" placeholder="Sujet"
                                name="subject" required>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">

                            <textarea class=" textarea @error('message') is-invalid @enderror" placeholder="Message" name="message" required></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">

                                <button type="submit"
                                    class="custom-btn secondary-btn">{{ __('message.NousContacter') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- location starts -->
    <section class="location section-gap light-grey-bg" id="cynic-contact" data-scroll-offset="75"
        data-scroll-offset-mobile="75">
        <div class="container">
            <h2 class="section-title text-center">{{ __('message.emplacement') }}</h2>
            <ul class="nav nav-tabs location-tab justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab"
                        href="#location-tab-1">{{ __('message.tunisie') }}</a>
                </li>
            </ul>
            <!-- End of .nav-tabs -->

            <div class="tab-content location-tab-content grid-wrapper" id="myTabContent">
                <div class="tab-pane fade show active" id="location-tab-1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355495124!2d-118.69191514099776!3d34.020730497983934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531805451146"
                        width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="tab-pane fade" id="location-tab-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.38943832612!2d-80.29949838161122!3d25.78254531076632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sbd!4v1531805857653"
                        width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="tab-pane fade" id="location-tab-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42437.17344437831!2d-122.48127727514952!3d37.76280447210564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531805888648"
                        width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="tab-pane fade" id="location-tab-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583088354!2d-74.11976389828038!3d40.697663748695746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1531805909949"
                        width="600" height="450" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- End of .tab-content -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .location -->

    <section class="newsletter section-gap theme-bg-d newsletter__white">
        <div class="container">
            <h2 class="text-center">{{ __('message.newslettre') }}
            </h2>
            <!---form newslettre --->
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
                <p class="text-danger">{{ __('message.btnSuivez-nous') }}</p>
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

@endsection
