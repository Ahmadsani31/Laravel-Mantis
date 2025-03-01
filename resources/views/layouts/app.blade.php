<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- [Head] start -->

<head>
    <title>{{ $pageTitle ?? 'Page' }} | Mantis Bootstrap 5 Admin Template</title>
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-3" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <x-layout-sidebar />

    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <x-layout-header />

    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @yield('content')
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <x-layout-footer />

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('/') }}assets/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('/') }}assets/js/pages/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('/') }}assets/js/plugins/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins/simplebar.min.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/js/fonts/custom-font.js"></script>
    <script src="{{ asset('/') }}assets/js/fonts/custom-ant-icon.js"></script>
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
        preset_change('preset-3');
    </script>

    <script>
        font_change('Roboto');
    </script>

    @stack('scripts')
</body>
<!-- [Body] end -->

</html>
