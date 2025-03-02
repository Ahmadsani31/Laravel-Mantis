<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mantis HTML Admin Template | Mantis Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('/') }}assets/images/favicon.svg" type="image/x-icon">
    <!-- [Page specific CSS] start -->
    <link href="{{ asset('/') }}assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">
    <!-- [Page specific CSS] end -->
    <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/tabler-icons.min.css">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/feather.css">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/fontawesome.css">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/material.css">
    <!-- [Template CSS Files] -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/landing.css">
</head>

<body class="landing-page">
    <!-- [ Main Content ] start -->
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Header ] start -->
    <header id="home">
        <!-- [ Nav ] start -->
        <nav class="navbar navbar-expand-md navbar-dark top-nav-collapse default">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/') }}assets/images/logo-white.svg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 btn btn-success">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li class="nav-item me-2">
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 btn btn-primary">
                                        Log in
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 btn btn-warning">
                                            Register
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary" target="_blank"
                                    href="https://codedthemes.com/item/mantis-bootstrap-admin-dashboard/">Purchase
                                    Now</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ Nav ] start -->
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-9 col-xl-6">
                    <h1 class="mt-sm-3 text-white mb-4 f-w-600 wow fadeInUp" data-wow-delay="0.2s">Carefully Crafted for
                        your
                        <span class="text-primary">Caring Laravel Bootstrap 5</span> Project
                    </h1>
                    <h5 class="mb-4 text-white opacity-75 wow fadeInUp" data-wow-delay="0.4s"> Mantis is a
                        blazing-fast
                        dashboard template built using the MUI React library.</h5>
                    <div class="my-5 wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#" class="btn btn-outline-primary me-2">Explore Components</a>
                        <a href="dashboard/index.html" class="btn btn-primary" target="_blank"> <i
                                class="ti ti-eye me-1"></i> Live Preview</a>
                    </div>
                </div>
            </div>
            <footer class="py-16 text-center text-sm text-white">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>

    </header>
    <!-- [ Header ] End -->
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="{{ asset('/') }}assets/js/plugins/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/js/fonts/custom-font.js"></script>
    <script src="{{ asset('/') }}assets/js/pcoded.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins/feather.min.js"></script>
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-1");
    </script>
    <script>
        font_change("Public-Sans");
    </script>
    <script>
        // Start [ Menu hide/show on scroll ]
        let ost = 0;
        document.addEventListener('scroll', function() {
            let cOst = document.documentElement.scrollTop;
            if (cOst == 0) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
            } else if (cOst > ost) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
                document.querySelector(".navbar").classList.remove("default");
            } else {
                document.querySelector(".navbar").classList.add("default");
                document.querySelector(".navbar").classList.remove("top-nav-collapse");
            }

            if (cOst > 500) {
                document.querySelector(".pc-landing-custmizer").classList.add("active");
            } else {
                document.querySelector(".pc-landing-custmizer").classList.remove("active");
            }
            ost = cOst;
        });
        // End [ Menu hide/show on scroll ]
    </script>
    <!-- [Page Specific JS] end -->
</body>

</html>
