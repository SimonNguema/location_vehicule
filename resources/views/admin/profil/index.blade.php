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
         <!-- Top navbar div start -->
   @include('layoutsAdmin.navbar')

   <!-- main left menu -->
   @include('layoutsAdmin.left_bar')
    
       
    
        <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2> Profil</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                                <li class="breadcrumb-item">Utilisateur</li>
                                <li class="breadcrumb-item active">Profil</li>
                            </ul>
                        </div>
                       
                    </div>
                </div>

                {{-- Profil User --}}
                <div id="app">
                    <profil-admin :user='{{$user}}'></profil-admin>
                </div>
    
               
            </div>
        </div>
    
    </div>

<!-- Javascript -->
<script src="{{ asset('/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


<!-- page js file -->
<script src="{{ asset('/assets/bundles/mainscripts.bundle.js')}}"></script>
<script>
    $(function() {
        // photo upload
        $('#btn-upload-photo').on('click', function() {
            $(this).siblings('#filePhoto').trigger('click');
        });

        // plans
        $('.btn-choose-plan').on('click', function() {
            $('.plan').removeClass('selected-plan');
            $('.plan-title span').find('i').remove();

            $(this).parent().addClass('selected-plan');
            $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
        });
    });
</script>
</body>
</html>