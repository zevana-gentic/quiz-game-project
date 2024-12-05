<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ @$page_title }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Potta+One&display=swap" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">

    {{-- Styles --}}
    @vite('resources/css/app.css')

    @yield('css')
</head>

<body class="relative font-source-poppins min-h-screen">

    <div class="mb-32 relative min-h-screen overflow-x-hidden container w-full max-w-md mx-auto h-full bg-white border-8 container-color">
        <main class="relative z-10">
            @yield('content')
        </main>

        @yield('modal')
    </div>

    {{-- Border for Desktop --}}
    <div class="hidden xl:block fixed w-full -z-0 container inset-0 max-w-md mx-auto h-full min-h-screen border-x border-white/5">
    </div>

    {{-- <script src="{{ asset('enzo') }}/assets/js/jquery-3.6.0.min.js"></script> --}}
    @yield('scripts')
</body>

</html>
