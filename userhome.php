<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Dating
 | User Home :: Kapu Dating
</title>
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
    .cd{
      background-image: url(images/background/heartshape.png);
      min-width: 100%;
      max-height: 100%;
      opacity: 200%;
      background-color: midnightblue;
    }
    .ce{
      background-image: url(images/background/heartshape.png);
      min-width: 100%;
      max-height: 100%;
      opacity: 200%;
      background-color: hotpink;
      opacity: 80%;
    }
    .cf{
      background-image: url(images/background/heartshape.png);
      min-width: 100%;
      max-height: 100%;
      opacity: 200%;
     
      opacity: 100%;
    }
  </style>
</head>
<body>
<!-- Navigation Start -->
 <?php include_once("includes/navigation.php");?>
<!-- Navigation End-->

<!-- main area start-->
<div class="grid_3">
  <div class="container fadeInUp animated">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">User Home / Manage User Details</li>
      </ul>
    </div>
    <div class="row fadeInUp animated">
      <div style="background-color: #ccc;"><!-- Innernavigation starts -->
     	  <div <?php /*?>class="collapse navbar-collapse"<?php */?> id="bs-megadropdown-tabs">
  		    <ul class="nav navbar-nav nav_2">
  		      <li><a href="view_prfile.php?id=<?php echo $id;?>">View Profile</a></li>
            <li><a href="partner_preference.php?id=<?php echo $id;?>">Partner Preference</a></li>
             <li><a href="updateprofile.php?id=<?php echo $id;?>">Edit Groom/Bride Details</a></li>
            <li><a href="updateimages.php?id=<?php echo $id;?>">Edit Groom/Bride Images</a></li>
            <li><a href="uploadIdImages.php?id=<?php echo $id;?>">Edit ID Images</a></li>
            <li><a href="unlockedprofiles.php?id=<?php echo $id;?>">Unlocked Profiles</a></li>
            <li><a href="editUserProfile.php?id=<?php echo $id;?>">Edit profile</a></li>       
  		    </ul>
  		  </div>
      </div><!-- End of inner navigation -->
    </div><br><br><br>
    <div class="container cc fadeInUp animated">
      <div class="row">
        <div class="col-md  fadeInUp animated">
          <h2 class="contact-title" style="font-size: 30px;text-align: center;">Welcome To Kapu</h2><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div style="padding: 0px; max-width: 100%;" class="team_area">
            <div class="single_team">
              <div class="team_thumb">
                <img style="width: 100%" src="images/icon.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 ">
          <div class="bradcam_text">
            <div class="media-body">
                <p style="padding-top: 25px;font-size: 15px;">We are here to build emotion, connect people and create happy stories. Online
                  dating sites are the way to go for people seeking love or to meet singles while 
                  they don’t know where to find them. There are lots of online dating sites available 
                  which makes it .<br>
                  As a result, the customer service desk recommends that customers should 
                  consider contacting them via their website. We realize that it’s not a simple task 
                  to understand what options you have when it comes to contact with their help 
                  desk. We, therefore, find it helpful if we share some of our research work with 
                  you.<br><br>
                  Why Choose Us?<br>
                  There are lots of online dating sites available which makes it difficult to choose 
                  the one which can give you a serious partner....<br>
                  Dating<br>
                  Great Advices<br>
                  24/7Support<br>
                  Relationship</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- main area end-->

<!-- new banner start-->
<div class="container about_middle cf">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-6">
        <div style="margin-top: 30%; text-align: center;" class="elementor-widget-container">
          <h2 style="color: white;" class="elementor-heading-title elementor-size-default">Best Ways to Find Your True Soul Mate</h2>
        </div>
        <div style="text-align: center;margin-top: 60px;">
          <a style="min-width: 80%;height: 50px; font-size: 15px;" class="btn btn-danger ce" href="search.php"><h3>Seek Your Partner</h3></a>
        </div>        
      </div>
      <div class="col-md-6">
        <div class="elementor-widget-container">
          <br><img width="100%" src="images/background/img.png" class="attachment-large size-large" alt="" loading="lazy"  sizes="(max-width: 577px) 100vw, 577px" />
        </div>
      </div>
    </div>
    </div>
</div>  
<!-- new banner end -->

<?php include_once("footer.php")?>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
      });
    });
  </script>   
</body>
</html>	