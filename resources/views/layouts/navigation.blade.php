<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/colorbox/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="body-inner">
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">{{ env('APP_ADDRESS') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                <a class="d-block" href="{{ route('landingPage') }}">
                                    <img loading="lazy" src="{{ asset('assets/images/logo.png') }}" height="200px"
                                        width="200px" alt="{{ env('APP_NAME') }}">
                                </a>
                            </div>
                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Call Us</p>
                                                <p class="info-box-subtitle">{{ env('APP_PHONE') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email Us</p>
                                                <p class="info-box-subtitle">{{ env('APP_EMAIL') }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="header-get-a-quote">
                                        <a class="btn btn-primary" href="{{ route('user.Estimation') }}">Estatimate Your Plan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav mr-auto">
                                        <li class="nav-item dropdown active">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">About us
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="faq.html">Vision</a></li>
                                                <li><a href="faq.html">Mission</a></li>
                                                <li><a href="faq.html">Objects</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Our
                                                Services <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="projects.html">Consultancy</a></li>
                                                <li><a href="projects-single.html">Construction</a></li>
                                                <li><a href="projects-single.html">Real Estate</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-toggle="dropdown">Our
                                                Projects <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="services.html">Dar es salaam </a></li>
                                                <li><a href="service-single.html">Arusha</a></li>
                                                <li><a href="service-single.html">Dodoma</a></li>
                                                <li><a href="service-single.html">Mara</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('user.contactUs') }}">Our Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="nav-search">
                        <span id="search"><i class="fa fa-search"></i></span>
                    </div>
                    <div class="search-block" style="display: none;">
                        <label for="search-field" class="w-100 mb-0">
                            <input type="text" class="form-control" id="search-field"
                                placeholder="Type what you want and enter">
                        </label>
                        <span class="search-close">&times;</span>
                    </div>
                </div>
            </div>
        </header>
