<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Admin Panel</title>
    <!-- style -->
    @include('admin.layout.head')
    <!-- toastr style -->
    <link rel="stylesheet" href="{{ asset('massage/toastr/toastr.css') }}">
    <!-- css -->
    @stack('css')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
    <!-- header -->
    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
        @include('admin.layout.header')
    </header>
    <!-- sidebar -->
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        @include('admin.layout.sidebar')
    </aside>
    <!-- content -->
    <main id="content" role="main" class="main">
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="footer">
        @include('admin.layout.footer')
    </footer>

    <!-- script -->
    @include('admin.layout.foot')
    <!-- js -->
    <!-- toastr js -->
    <script src="{{ asset('massage/toastr/toastr.js') }}"></script>
    {!! Toastr::message() !!}
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                });
            @endforeach
        @endif
    </script>
    @stack('js')
</body>

</html>
