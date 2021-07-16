<?php
	if (!isset($_GET['mes'])) {
	    $message=null;
	}else{
      $signupCheck = $_GET['mes'];
      if ($signupCheck == "exist") {
        $message='Username Already Exist! ';
      }
      else{
        $message=null;
      }
	}
?>

<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php register(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Datings
 | Register :: KAPU Datings
</title>
<script type="text/javascript">
  window.history.forward();
  function noback(){
     window.history.forward();
  }
</script>
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
<!-- Navigation End-->

<div class="grid_3 cc">
   <div class="container  fadeInUp animated">
	    <div class="breadcrumb1">
	     <ul>
	        <a href="index.php"><i class="fa fa-home home_1"></i></a>
	        <span class="divider">&nbsp;|&nbsp;</span>
	        <li class="current-page">Register</li>
	     </ul>
	    </div>
   <div class="services  fadeInUp animated">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label><br>
		      <!--Error message-->

		      <?php
                if($message){
                  echo '	<div style="text-align: center;" class="alert alert-danger" role="alert">
			    	'.$message.'<br>
			    ';
                }
                ?>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required" required>
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		   
              
			  
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form><br>
		  <ul class="sharing">
		      <br>
		      <div class="row">
		        <div class="col-sm-6">
		          <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i>Find Kapu on Facebook</a></li>
		        </div>
		        <div class="col-sm-6">
		          <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i>Find Kapu on Twitter</a></li>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col-sm-6">
		          <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		        </div>
		        <div class="col-sm-6">
		          <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		        </div>
		      </div>
		    </ul>
	  </div>
	  <div style="text-align: center;" class="col-sm-6">
	     <img style="width: 90%" src="images/background/aimg3.png">
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

