<!DOCTYPE html>
<html>

<head>
    <!-- Các thẻ meta, CSS và JavaScript chung -->
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

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
</body>

</html>