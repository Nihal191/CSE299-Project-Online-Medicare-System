<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Online Medicare System</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link
		href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="hms/assets/css/styles.css">
	<!--<link rel="stylesheet" href="hms/assets/css/plugins.css">-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				maxwidth: 1600,
				speed: 600
			});
		});
	</script>
	<script type="text/javascript">
		function valid() {
			if (document.registration.password.value != document.registration.password_again.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.registration.password_again.focus();
				return false;
			}
			return true;
		}
	</script>
	<style>
		body {
			background: #078bf7;
		}

		.header {
			background: url(../images/header-bg.png);
			background: #078bf7;
		}

		.logo {
			float: left;
			margin-top: 14px;
			color: #edf3f3;
		}

		.logo a {
			color: white;
		}

		.row {
			float: right;
			width: 550px;
			font-size: 15px;
			text-align: left;
			background: #f8f9fa;
			font-weight: bold;
			color:black;
			margin-top: 2%;
			margin-bottom: 3%;
			cursor: pointer;
			border-top-left-radius: 20px;
			border-bottom-left-radius: 30px;
			border-top-right-radius: 20px;
			border-bottom-right-radius: 20px;
			opacity: 95%;
		}
		.row .box-register form{
			height: 550px;
		}
		.row .box-register label{
			color: black;
			font-size: 15px;
			font-weight: bold;
		}
		.row .box-register .form-group input[type = email]{
			width: 273px;
			border-radius: 20px;
		}
		.row .box-register .form-group input[type = text]{
			width: 300px;
			border-radius: 20px;
		}
		.row .box-register .form-group input[type = password]{
			width: 300px;
			border-radius: 20px;
		}
		.row .box-register .form-actions button[type = submit]{
			width: 150px;
			border-radius: 10px;
			margin-left: 70%;
			padding:1%;
			background-color: white;
			color: black;

		}
		.row .box-register .form-actions button[type = submit]:hover{
			background-color: #078bf7 ;
			color: white;
		}

		.row legend {
			text-align: center;
		}

		.form-group input [type="text"] {
			text-align: center;
		}

		/*.row .box-register .copyright {
			text-align: center;
			margin: 1%;
		}*/

		.rslides img {
			margin: 5%;
			padding: 2%;
			height: 350px;
			width: 650px;
			border-radius: 50px;
		}

	/*	.chat button[type = submit]{
			border: none;
			color: #078bf7;
			margin-left: 100px;
			padding: 2%;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 2%;
			margin-left: 20%;
			border-radius: 20px;
			transition-duration: 0.4s;
			cursor: pointer;
		}
		.chat button[type = submit]:hover{
			background-color: blue;
			color:white;
		}
		*/
		
		.dropdowncontent {
			display: none;
			position: absolute;
			background-color: #0062cc;
			min-width: 60px;
			z-index: 1;
			border-radius: 25px;
		}

		.dropdowncontent a {
			color: white;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-size: 15px;
		}

		.dropdowncontent a:hover {
			color: white;
			background-color: blue;
		}

		.nav-item:hover .dropdowncontent {
			display: block;
		}
	</style>
</head>

<body>
	<!--start-wrap-->

	<!--start-header-->
	<div class="header">
	<div class="wrap">
			<!--start-logo-->
			<div class="logo">
				<a href="index.php" style="font-size: 30px;">Online Medicare System</a>
			</div>
			<!--end-logo-->
			<!--start-top-nav-->
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="doctor-info.php">Doctor's Information</a></li>
					<li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="#"
                            style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>LOGIN</h6></a>
                            <div class = dropdowncontent>
                                <div class="button"><span><a href="hms/user-login.php">Patient</a></span></div>
                                <div class="button"><span><a href="hms/doctor/">Doctor</a></span></div>
                                <div class="button"><span><a href="hms/admin">Admin</a></span></div>
                            </div>
                       
                    </li>
					<li><a href="services.html">About Us</a></li>
					<li><a href="contact.php">Feedback</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
			<!--end-top-nav-->
		</div>
		<!--end-header-->
	</div>
			<div class="clear"> </div>
			<!--end-top-nav-->
		</div>
		<!--end-header-->
	</div>
	<div class="clear"> </div>
	<!--start-image-slider---->


	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<!-- start: REGISTER BOX -->
			<div class="box-register">
				<form name="registration" id="registration" method="post" onSubmit="return valid();">
					<fieldset>
						<legend>
							Register as a patient
						</legend>
						<label for="for-name">Name:</label>
						<div class="form-group">
							<input type="text" class="form-control" name="full_name"
								placeholder="Full Name" required>
						</div><br>
						<label for="for-name">Address:</label>
						<div class="form-group">
							<input type="text" class="form-control" name="address"
								placeholder="Address" required>
						</div><br>
						<label for="for-name">City:</label>
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div><br>
						<div class="form-group">
							<label class="block">
								Gender
							</label>

							<input type="radio" id="rg-female" name="gender" value="female">
							<label for="rg-female">
								Female
							</label>
							<input type="radio" id="rg-male" name="gender" value="male">
							<label for="rg-male">
								Male
							</label>
							<input type="radio" id="rg-other" name="gender" value="other">
							<label for="rg-other">
								Others
							</label>

						</div><br>
						<label for="for-name">E-Mail:</label>
						<div class="form-group">
							<span class="input-icon">
							 <input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
								<i class="fa fa-envelope"></i> 
							</span>
							 <span id="user-availability-status1" style="font-size:12px;"></span>
						</div><br>
						<label for="for-name">Password:</label>
						<div class="form-group">
							<input type="password" class="form-control"id="password" name="password" placeholder="Password" required>
						</div><br>
						<label for="for-name">Confirm Password:</label>
						<div class="form-group">
							<input type="password"class="form-control" id="password_again" name="password_again" placeholder="Password Again" required>
						</div><br>
						<div class="form-group">
							<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
							<label for="agree">
								I agree
							</label>
						</div><br>
						<div class="form-actions">
							<p>
								Already have an account?
								<a href="hms/user-login.php">
									Log-in
								</a>
							</p>
							<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div><br>
					</fieldset>
				</form>

				<!--<div class="copyright">
					&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> OMS</span>.
					<span>All rights reserved</span>
				</div>-->

			</div>

		</div>
	</div>
	<div class="image-slider">
		<ul class="rslides" id="slider1">
			<li><img src="images/image1.jpg" alt=""></li>
			<li><img src="images/image3.jpg" alt=""></li>
			<li><img src="images/image2.jpg" alt=""></li>
		</ul>
	</div>
	<!--<div class="chat">
		<button type="submit" id="submit" name="submit" onsubmit="#">
			CHAT
		</button>
	</div>-->
	<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: ('hms/check_availability.php'),
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	

</body>

</html>