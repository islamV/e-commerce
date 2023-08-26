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
<script src="{{ asset('assets/libs/js/contries.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<!-- chart chartist js -->
<script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/chartist-bundle/Chartistjs.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js') }}"></script>
<!-- chart C3 js -->
<script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
<!-- chartjs js -->
<script src="{{ asset('assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>
<!-- sparkline js -->
<script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
<!-- dashboard finance js -->
<script src="{{ asset('assets/libs/js/dashboard-finance.js') }}"></script>
<!-- main js -->
<!-- gauge js -->
<script src="{{ asset('assets/vendor/gauge/gauge.min.js') }}"></script>
<!-- morris js -->
<script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/morris-bundle/morrisjs.html') }}"></script>
<!-- daterangepicker js -->
<script src="{{ asset('cdn.jsdelivr.net/momentjs/latest/moment.min.js') }}"></script>
<script src="{{ asset('cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') }}"></script>

<!-- chartjs js-->
<script src="{{ asset('assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>

<!-- jvactormap js-->
<script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- sparkline js-->
<script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/sparkline/spark-js.js') }}"></script>
<!-- dashboard sales js-->
<script src="{{ asset('assets/libs/js/dashboard-sales.js') }}"></script>

<script src="https://cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
</html>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });
</script>
