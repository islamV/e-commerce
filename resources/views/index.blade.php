<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    @stack('css')

    <title>@yield('titel')</title>
</head>

<body>
    @include('layouts.header')
    @include('layouts.sidebar') 
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                {{-- @include('layouts.pageheader') --}}
                @yield('content')
            </div>
        </div>
    </div>
</body>
@stack('js');
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>


{{-- <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script> --}}
</html>



