<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-Pharma | View Medicine </title>
	<!-- Meta tag Keywords -->
	<link rel = "icon" type = "image/png" href = "{{ asset('login/images/medicine.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Natural Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ asset('frontside/css/bootstrap.css') }}">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="{{ asset('frontside/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ asset('frontside/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center navbar-dark bg-dark">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="/">Home</a></li>
						<li><a href="#med">Medicines</a></li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			<!-- banner slider -->
			<div id="homepage-slider" class="st-slider">
				<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
				<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
				<div class="images">
					<div class="images-inner">
						<div class="image-slide">
							<div class="banner-w3ls-1">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-2">

							</div>
						</div>
						<div class="image-slide">
							<div class="banner-w3ls-3">

							</div>
						</div>
					</div>
				</div>
				<div class="labels">
					<div class="fake-radio">
						<label for="slide1" class="radio-btn"></label>
						<label for="slide2" class="radio-btn"></label>
						<label for="slide3" class="radio-btn"></label>
					</div>
				</div>
				<!-- banner-text -->
				<div class="banner-text">
					<fieldset>
						<legend>
							<a href="index.html" class="logo">E-Pharma</a>
						</legend>
						<div class="banner-sub-txt">
							<h1 class="banner-txt">Welcome</h1>
							<p class="banner-txt1">This site will help you to search medicines incase you are dying ;)</p>
						</div>
					</fieldset>
				</div>
				<!-- //banner-text -->
			</div>
			<!-- //banner slider -->
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->

	<!-- about -->
	<div class="container" style="margin-top: 5em;" id="med">
	<center><h1 class="display-4" id="about">Medicines</h1></center>
			<table class="table table-hover">
						<thead>
							<th>S.No</th>
							<th>Name</th>
							<th>Dosage</th>
							<th>Expiry Date</th>
							<th>Description</th>
							<th>Side effects</th>
							<th>Image</th>
						</thead>
						<tbody>
							@foreach($res as $value)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->dosage }}</td>
								<td>{{ $value->expiry }}</td>
								<td>{{ $value->desc }}</td>
								<td>{{ $value->effects }}</td>
								@if(!is_null($value->image))
								<td><img src="{{ asset('uploads/images/'.$value->image)}}" width="100px" height="100px" /></td>
								@else
								<td> </td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
	</div>
	<!-- //testimonials -->

	<!-- middle section -->
	
	<!-- //middle section -->

	<!-- footer -->
	<footer class="footer-sec-w3layouts py-5 ">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-3">
				<div class="col-xl-5 col-md-6 footer-left-info text-left">
					<div class="logo-footer" id="contact">
						<h2>
							<a href="">E-Pharma</a>
						</h2>
					</div>
					<p class="mt-lg-5 mt-4">E-Pharma, your one stop destination for medicine information and related details. Keep visiting again and helping our site grow.
					</p>
				</div>
				<div class="col-md-6 footer-right-info text-right offset-xl-1 mt-md-0 mt-5">
					<h6>Get In Touch</h6>
					<address class="ad-info mt-lg-5 mt-4">
						<strong>Zephyr technologies,</strong>
						<br> 2nd floor, Oberole towers,
						<br> Balmatta, Mangalore 575003
						<br>
						<abbr title="Phone">P:</abbr> 1234567890
					</address>
				</div>
			</div>
			<!-- social icons -->
			<div class="social-icons-footer social-w3pvt-footer border-top text-center pt-md-5 pt-4 mt-md-5 mt-4">
				<ul class="list-unstyled">
					<li>
						<a href="#">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-dribbble"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-instagram"></span>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 E-Pharma. All rights reserved | Design by team E-Pharma.
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-chevron-circle-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->


</body>

</html>