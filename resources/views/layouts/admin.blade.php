<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('admin')}}/img/favicon.png">
    <title>
        @yield('title')
    </title>

    <!--- include CSS --->
    @include('includes.backend.css')
    <!--- include CSS --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">


    <!--- include sidebar --->

    @include('includes.backend.sidebar')

    <!--- include sidebar --->

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!--- include NAVBAR --->
        @include('includes.backend.navbar')
        <!--- include NAVBAR --->

        <!--- content --->

        @yield('content')

        <!--- content --->

        <!--- footer --->

        {{-- @include('includes.backend.footer') --}}

        <!--- footer --->
    </main>

    <!--- include JS --->
    @include('includes.backend.script')
    <!--- include JS --->

    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    @yield('scripts')

    @stack('script')

</body>


</html>
