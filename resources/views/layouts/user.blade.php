<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- pemanggilan CSS -->
    @include('includes.frontend.css')

    <!-- pemanggilan CSS khusus -->
    @yield('css_khusus')
    <!-- pemanggilan JS -->
    @include('includes.frontend.script')

    <title>@yield('title')</title>
</head>

<body>
    <!-- Chat -->
    <a href="https://api.whatsapp.com/send?phone=6289514640148&text=Hallo%20kak%20Saya%20ingin%20memesan%20Template"
        target="__blank" id="chatButton">
        <i class="bi bi-chat-right-text"></i>
        &nbsp; Chat dengan Lara
    </a>
    <!-- End Chat -->

    <!-- Up button -->
    <a href="#" onclick="topFunction()" id="upButton" title="Go to the top">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </a>
    <!-- End up button -->

    <!-- Header -->
    @include('includes.frontend.header')
    <!-- End Header -->

    @yield('content_user')

    <!-- Footer -->
    @include('includes.frontend.footer')
    <!-- End Footer -->

    @stack('script')
</body>

</html>
