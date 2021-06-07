<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Admin Login | E-Pharma</title>
    <!-- Meta-Tags -->
    <link rel = "icon" type = "image/png" href = "{{ asset('login/images/medicine.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{ asset('login/css/style.css') }}" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="{{ asset('login/css/font-awesome.min.css') }}" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="/"><img class="brand_logo" src="{{ asset('login/images/vitamins.svg') }}"> E-Pharma</a></h1>
			</div>
			<!--div class="links">
				<ul class="links-unordered-list">
					<li class="active">
						<a href="#" class="">Register</a>
					</li>
				</ul>
			</div-->
		</div>
		<div class="content-w3ls">
			<div class="text-center icon">
				<img class="login_logo" src="{{ asset('login/images/login.svg') }}">
			</div>
			<div class="content-bottom">
				<form action="/adminLogin" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- csrf token -->
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="text1" id="text1" type="text" value="" placeholder="Username" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="password" id="myInput" type="Password" placeholder="Password" required>
						</div>
					</div>
					<input type="checkbox" class="form-check-input" name="abc" id="myInput" onclick="myFunction()">
					<label for="abc" style="color: white; font-size: 15px">Show Password</label>
					<div class="wthree-field">
						<button type="submit" class="btn">Login</button>
					</div>
					<ul class="list-login">
						<!--li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li-->
						<!--li>
							<a href="#" class="text-right">forgot password?</a>
						</li-->
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>
    </div>
</section>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
<!-- //Body -->
</html>
