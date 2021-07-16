<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php?mes=contact");
}
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU
 | Contact :: KAPU
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
  <!-- background image style -->
  <style> 
    .cc{
      background-image: url(images/background/right-shape.png);
      width: 100%;
    }
    .ce{
      background-image: url(images/background/heartshape.png);
      min-width: 100%;
      max-height: 100%;
      opacity: 200%;
      background-color: hotpink;
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
<!-- Navigation End -->
  <div class="cc">
    <div class="grid_3">
      <div class="container  fadeInUp animated">
        <div class="breadcrumb1">
          <ul>
            <a href="index.php"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">Contact</li>
          </ul>
        </div>

      <!-- new code -->    
        <div class="grid_5  fadeInUp animated">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="elementor-widget-container">
                  <h1 class="elementor-heading-title elementor-size-default">Contact Us</h1> 
                    <p style="font-size: 18px">We are here to build emotion, connect people and create happy stories. Online dating sites are the way to go for people seeking love or to meet singles while they don’t know where to find them. There are lots of online dating sites available which makes it .</p><br><br>
                    <div class="row">
                      <div class="col-md-5">Address</div>
                      <div class="col-md-7">8901 Nulla Pariatur, <br>Ipsum, D05 87GR.</div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-5">Telephones :</div>
                      <div class="col-md-7">+0774200428 <br>011245368</div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-5">E-mail :</div>
                      <div class="col-md-7">info@matkapu.com</div>
                    </div><br>  
                </div>
              </div>
              <div class="col-md-6">
                <img style="width: 100%" src="images/background/about-page-left.html.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/background/about-page-left.html.png 520w, https://slkapu.com/wp-content/uploads/2021/05/about-page-left.html-300x219.png 300w" class="img-responsive" alt=""/>
              </div>
            </div>
          </div>
        </div>
        <!-- new code end -->
      </div>
    </div>
  </div>

  <!-- inputs start -->
  <div class="about_middle cf">
    <div class="container">
  	 <h2>Contact Form</h2>
  	  <form id="contact-form" class="contact-form">
          <fieldset>
            <input type="text" class="text" placeholder="" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
            <input type="text" class="text" placeholder="" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
            <input type="text" class="text" placeholder="" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
            <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            <input class="ce" name="submit" type="submit" id="submit" value="Submit">
          </fieldset>
        </form>
    </div>
  </div>
  <!-- inputs end -->
  
<?php include_once("footer.php");?>

