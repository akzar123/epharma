<!DOCTYPE HTML>
<html>
<head>
<title>Update | E-Pharma</title>
<link rel = "icon" type = "image/png" href = "{{ asset('login/images/medicine.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{ asset('admin/js/jquery-2.1.1.min.js') }}"></script> 
<!--icons-css-->
<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="{{ asset('admin/js/Chart.min.js') }}"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    
<!--geo chart-->

<!--skycons-icons-->
<script src="{{ asset('admin/js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name" style="width: 40%;">
									<h1>E-Pharma</h1> 
									<!--<img id="logo" src="" alt="Logo"/>-->  								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
														<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span><img src="{{ url('login/images/man.svg') }}" alt=""  width="50px" height="50px"> </span>  
												<div class="user-name">
													<p>{{ session('username') }}</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="/alogout"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<div class="blankpage-main">
    		<div class="d-flex justify-content-center">
    		<h2>Update data</h2>
		<div class="card">
		  <div class="card-body">
		   	<form method="post" action="/editqry" enctype="multipart/form-data">
		   	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		   <!--{{ method_field("PUT") }}	  -->
		   	@foreach($res as $value)
		   	<input type="hidden" name="id" value="{{ $value->id }}">
		   	<h4 class="text-center text-white">Drug Info</h4>
			  <div class="form-group">
			    <label for="name" class="text-white">Name</label>
			    <input type="text" class="form-control" name="name" placeholder="Enter drug name" required="" value="{{ $value->name }}">
			      
			  </div>
			  <div class="form-group">
			    <label for="dosage" class="text-white">Dosage</label>
			    <input type="number" class="form-control" name="dosage" placeholder="Enter drug dosage" required="" value="{{ $value->dosage }}">
			    
			  </div>
			   <div class="form-group">
			     <label for="expiry" class="text-white">Expiry date</label>
			    <input type="date" class="form-control" name="expiry" placeholder="Enter expiry date" required="" value="{{ $value->expiry }}">
			    
			  </div>
			   <div class="form-group">
   				 <label for="desc" class="text-white">Enter description</label>
  				  <textarea class="form-control" name="desc" rows="3">{{ $value->desc }}</textarea>
  				   <small class="form-text text-muted">Description must be 15-20 characters long.</small>
  				   
  				</div>
  				<div class="form-group">
   				 <label for="effects" class="text-white">Enter side effects</label>
  				  <textarea class="form-control" name="effects" rows="3">{{ $value->effects }}</textarea>
  				</div>

  				<div class="form-group">
   				 <label class="text-white">Image please</label>
  				  <input type="file" name="image" class="custom-file-input" value="{{ $value->image }}">
  				</div>
  				<input type="hidden" name="_im" value="{{ $value->image }}"/>

  				@endforeach
			   <div class="text-center">
			  <button type="Update" class="btn btn-primary">Update</button>
			  </div>
			</form>
		  </div>
		</div>
	</div>
    	</div>
    </div>
</div>
<!--
<script>
		// Disable form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Get the forms we want to add validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
	</script> -->
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>?? 2019 E-Pharma. All Rights Reserved | Design by E-Pharma Team </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="{{ url('/adminPage') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Medicines</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="{{ url('/add') }}">Add new entry</a></li>		
		            <li><a href="{{ url('/viewMed') }}">View</a></li>            
		          </ul>
		        </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>

<!--scrolling js-->
		<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
		<script src="{{ asset('admin/js/scripts.js') }}"></script>
		<!--//scrolling js-->
<script src="{{ asset('admin/js/bootstrap.js') }}"> </script>
<!-- mother grid end here-->
</body>
</html>                     