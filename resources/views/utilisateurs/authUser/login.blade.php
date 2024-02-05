<!doctype html>
<html lang="en">



@include("layoutsAdmin.head")


<body data-theme="light" class="font-nunito">
	<!-- WRAPPER -->
	<div id="wrapper" class="theme-cyan">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
					<div class="top">
                        
                    </div>
        
                <div id="app">
                    <login-client></login-client>
                </div>
					<!-- Formulaire -->

				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->


    <!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- page vendor js file -->
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<!-- page js file -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('../js/index.js')}}"></script>
</body>
</html>
