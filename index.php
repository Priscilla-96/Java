<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Fade-in animation -->
<link rel="stylesheet" href="css/animate.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
	<script>
	$(document).ready(function(){
	    $(".dropdown").hover(            
	        function() {
	            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
	            $(this).toggleClass('open');        
	        },
	        function() {
	            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
	            $(this).toggleClass('open');       
	        }
	    );
	});
	</script>
	<!-- background image style -->
	<style> 
		.cc{
			background-image: url(images/background/right-shape.png);
			width: 100%;
		}
	</style>
</head>

<body>
<!-- Navigation Start -->
 <?php include_once("includes/navigation.php");?>
<!-- Navigation End -->

<div class="banner fadeInUp animated">
  <div class="container">
    <div class="banner_info fadeInUp animated">
      <h3>Welcome to Kapu Datings</h3>
      	<!-- Home page banner button -->
      		<?php 
				if(isloggedin()){ $id=$_SESSION['id']; }
				else{echo "<a href='register.php' class='hvr-shutter-out-horizontal'>Create your Profile</a>";}
			?>
    </div>
  </div> 
</div> <br><br>

	<!-- stage 1 start -->
	<div class="cc">
		<div class="container">
		<div style="text-align: center;" class="elementor-widget-container">
				<h2 style="font-size: 50px;" class="elementor-heading-title elementor-size-default">Find your Special Someone</h2>
				<h3 style="opacity: 70%;" class="elementor-heading-title elementor-size-default">Someone is there Somewhere who dreams of you!</h3><br><br>
			</div>
		<div class="row">
			<div style="text-align: center;" class="col-sm-3">
				<img style="width: 80%" src="images/background/icon2.png">
				<div class="elementor-widget-container"><br>
					<h3 style="opacity: 80%;" class="elementor-image-box-title">Signup</h3><br>
				</div>
			</div>
			<div class="col-sm-1">
				
			</div>
			<div style="text-align: center;" class="col-sm-3">
				<img style="width: 80%;" src="images/background/illutration.png">
				<div class="elementor-widget-container"><br>
					<h3 style="opacity: 80%;" class="elementor-image-box-title">Search</h3><br>
				</div>
			</div>
			<div class="col-sm-1">
				
			</div>
			<div style="text-align: center;" class="col-sm-4">
				<img style="width: 71%" src="images/background/aimg3.png">
				<div class="elementor-widget-container"><br>
					<h3 style="opacity: 80%;" class="elementor-image-box-title">Find Love</h3><br>
				</div>
			</div>
		</div>
		</div>
	</div>
	<br><br><hr style="width: 80%; "><br><br>
	<!-- stage 1 end -->

	<!-- stage 2 start -->
	<div class="cc">
	<div class="container">
		<div class="row">
			<div class="about">
		   	  <div class="col-md-6 about_left  fadeInUp animated">
		   	  	<img style="width: 100%" src="images/background/img.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/background/img.png 520w, https://slkapu.com/wp-content/uploads/2021/05/img-300x219.png 300w" class="img-responsive" alt=""/>

		   	  </div>
		   	  <div class="col-md-6 about_right  fadeInUp animated">
		   	  	<div style="text-align: center;a" class="elementor-widget-container">
						<h2 class="elementor-heading-title elementor-size-default">Start Flirting</h2><br>
				</div>
		   	  	<p class=" fadeInUp animated" style="font-size: 16px">
					In our modern day and age dating apps have become an integral part of our lives. They allow you to check the profile of singles living near you, to chat with them, to meet them and maybe to fall in love. <br><br>
					If you’re searching for a simple dating app with free features allowing to meet singles, you’re in good hands with kapu. With kapu you get all you need from a mobile dating app, which presents you thousands of users through your smartphone in a very pleasant experience.
				</p>		   	  	
		   	  </div>
		   </div>
		</div>
	</div>
	</div>
	<br><br>
	<!-- stage 2 end -->

	<!-- stage 3 start -->
	<!--
	<div class="container">
		<div style="text-align: center;" class="elementor-widget-container">
				<h2 style="font-size: 50px;" class="elementor-heading-title elementor-size-default">Why Choose Us?</h2><br>	
			</div>
		<div class="row">
			<div style="text-align: center;" class="col-sm-4">
				<img style="width: 50%" src="images/background/shield.png">
				<div class="elementor-widget-container"><br>
					<h3 class="elementor-image-box-title">Protection</h3><br>
					<p class="elementor-image-box-description">Our safety is provided by leading anti-scam system in the industry</p><br>
				</div>
			</div>
			<div style="text-align: center;" class="col-sm-4">
				<img style="width: 50%" src="images/background/chat-1.png">
				<div class="elementor-widget-container"><br>
					<h3 class="elementor-image-box-title">Communication</h3><br>
					<p class="elementor-image-box-description">Chat, send letters, call, share your photos and videos</p><br>
				</div>
			</div>
			<div style="text-align: center;" class="col-sm-4">
				<img style="width: 50%" src="images/background/check-1.png">
				<div class="elementor-widget-container"><br>
					<h3 class="elementor-image-box-title">Verification</h3><br>
					<p class="elementor-image-box-description">All members are personally confirmed by our staff to prove they are real</p><br>
				</div>
			</div>
		</div>
	</div><br>
	-->
	<!-- stage 3 end -->

	<!-- guest message-->
    <div class="bg">
		<div class="container"> 
			<h3>Guest Messages</h3>
            <div class="col-sm-6">
            	<div class="bg_left cc">
            		<img style="width: 20%;border-radius: 50%;height: 20%" src="images/p14.jpg"><br><br>
            		<h4>Roshani De Silva</h4>
            		<p>"I would like to thank kapu.com for bringing us together, as we begin our journey together, we wish all the team members of kapu.com my deepest regards and hope you keep up the good work. Thank You once again"</p>
            	    <ul class="team-socials">
	                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
	                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
	                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                    </ul>
            	</div>
            </div>
            <div class="col-sm-6">
            	<div class="bg_left cc"><img style="width: 20%;border-radius: 50%;height: 20%" src="images/1.jpg"><br><br>
            		<h4>Ruwan Abeyasinghe</h4>

            		<p>"We met through kapu on 23rd June 2021. This will always be one of the most memorable  days in my life because I met a person who I was destined to be in love  with"</p>
            	    <ul class="team-socials">
	                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
	                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
	                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                    </ul>
            	</div>
            </div>

            <!-- space at the bottom -->
            <div class="clearfix"> </div>
		</div>
	</div>
	<!-- guest message end-->

	
<?php include_once 'footer.php'; ?>