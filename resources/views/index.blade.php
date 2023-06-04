<!DOCTYPE html>
<html>

<head>
    <!-- Các thẻ meta, CSS và JavaScript chung -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
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