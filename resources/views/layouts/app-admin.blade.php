<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ @$page_title }}</title>
    <link rel="stylesheet" href="{{ asset('nobbleui') }}/assets/vendors/core/core.css">
    <link rel="stylesheet" href="{{ asset('nobbleui') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('nobbleui') }}/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="{{ asset('nobbleui') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('nobbleui') }}/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
       @include('inc.sidebar')

        <div class="page-wrapper">
            @include('inc.navbar')

            <div class="page-content">
                @yield('content')

                @yield('modal')
            </div>

            {{-- <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2024 <a href="https://www.nobleui.com"
                        target="_blank">Project MRP</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer> --}}
        </div>
    </div>

    <script src="{{ asset('nobbleui') }}/assets/vendors/core/core.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/js/template.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('nobbleui') }}/assets/js/datepicker.js"></script>
    @yield('script')
</body>

</html>
