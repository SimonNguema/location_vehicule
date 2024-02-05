<!DOCTYPE html>
<html lang="en">

@include('layoutsUser.head')
 
  <body style="background-image: url('assetsUser/images/bg_1.jpg');">

  
    
	  
    <!-- END nav -->
    
    
    	

		<div id="app">
			<locationclient-add :id='{{ $id }}' :auth_id='{{Auth::user()->id}}'></locationclient-add>
		 </div>
   

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @include('layoutsUser.footer')

  </body>
</html>
