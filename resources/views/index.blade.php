<!DOCTYPE html>
<html>

<head>
    <!-- Các thẻ meta, CSS và JavaScript chung -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" /> <!--bootstrap4 -->

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script> <!--jquery -->

    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script> <!--bootstrap4 -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> <!--bootstrap4 -->


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-custom.css') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <section class="main-content_container">
        <!-- Nội dung động của từng trang -->
        @yield('content')
    </section>

    <!-- Footer -->
    <footer>
        @include('layout.footer')
    </footer>
</body>

</html>