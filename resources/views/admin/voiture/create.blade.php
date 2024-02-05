<!doctype html>
<html lang="en">

@include('layoutsAdmin.head')

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('/assets/images/logo-icon.svg" width="48" height="48" alt="Iconic')}}"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
   @include('layoutsAdmin.navbar')

    <!-- main left menu -->
    @include('layoutsAdmin.left_bar')


    <!-- mani page content body part -->
    

    
</div>

<div id="app">
    <voiture-add></voiture-add>
</div>

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- page js file -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{ asset('js/pages/forms/dropify.js')}}"></script>
</body>
</html>
