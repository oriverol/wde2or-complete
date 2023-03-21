<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>OAR &lt;&sol;WebDev&gt; - <?= $title ?? 'Home' ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../assets/img/favicon.png" type="image/png">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/lindy-uikit.css" />
    
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }

        .error {
            font-size: 12px;
            font-weight: 100;
            color: #f00;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

        <!-- ========================= header-6 start ========================= -->
        <header class="header header-6">
            <div class="navbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="http://cs210.byethost33.com">
                                    <img src="../../assets/img/logo/orLogoMenu.png" alt="Logo" />
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                                    <ul id="nav6" class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="page-scroll active" href="http://cs210.byethost33.com/#home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#projects">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#aboutme">About Me</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#interests">Interest</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#contact">Contact Me</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="page-scroll" href="http://cs210.byethost33.com/#clients">Clients</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- navbar collapse -->
                            </nav>
                            <!-- navbar -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- navbar area -->
        </header>
        <?php //flash() ?>
