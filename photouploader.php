
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php

$id=$_GET['id'];

if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

if (!isset($_GET['mes'])) {
      $message=null;
      $color="";
  }else{
    $signupCheck = $_GET['mes'];
    if ($signupCheck == "next") {
        $message='Upload All Images To Proceed';
        $color="blue";
    }else{
        $message=null;
        $color="";
    }
  }

//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ uploadphoto($id); }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Datings
 | Login :: Make My Love
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
<!--hour glass cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<!--hidden div function-->
<script type="text/javascript">
 function showHide() {
   var div = document.getElementById("hidden_div");
   if (div.style.display == 'none') {
     div.style.display = '';
     $("#formid").trigger('submit')
   }
   else {
     div.style.display = 'none';
   }
 }
</script>
<style> 
  .cc{
    background-image: url(images/background/right-shape.png);
    width: 100%;
   }
  #div1 {
  font-size:48px;
}
  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
  }
  input[type="file"] {
    display: none;
  }
</style>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
</head>
<body>
<!-- Navigation Start-->
<?php include_once("includes/navigation2.php");?>
<!-- Navigation End-->
<div class="grid_3 cc">
  <div class="container fadeInUp animated">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Upload Images</li>
         <?php
            if($message){
              if ($color=="blue") {
                echo '  <div style="text-align: center;" class="alert alert-info" role="alert">'.$message.'<br>
                  </div>'; }
              }
              ?>
            <br>
      </ul>
    </div>
    <div class="services fadeInUp animated">
   	  <div class="col-sm-7 login_left">
	    <form action="" method="post" id="formid" onsubmit="showHide();" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Upload Bride ?Groom Images <p style="font-size: 13px">(Image Formats png, jpeg, jpg)</p> <span class="form-required" title="This field is required."></span></label><br><br>
          <div style="text-align: center;" class="alert alert-danger" role="alert">
            <?php echo"Add All Images To Proceed"; ?>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file1" name="pic1" accept="image/png, image/jpg, image/jpeg" required />
                  Profile Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image1" /><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file2" name="pic2" accept="image/png, image/jpg, image/jpeg" required />
                  First Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image2" /><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file3" name="pic3" accept="image/png, image/jpg, image/jpeg" required />
                  Second Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image3" /><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file4" name="pic4" accept="image/png, image/jpg, image/jpeg" required />
                  Third Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image4" /><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file5" name="idFront" accept="image/png, image/jpg, image/jpeg" required />
                  ID Card Front Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image5" /><br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <label style="width: 90%" class="custom-file-upload btn btn-success">
                <input type="file" id="file6" name="idBack" accept="image/png, image/jpg, image/jpeg" required />
                  ID Card Back Picture
              </label>
            </div>
            <div class="col-sm-8">
              <img style="width: 50%" id="image6" /><br><br>
            </div>
          </div>
	      </div>
          <div  style="text-align: center;" class="alert alert-danger" role="alert">
          <p>It Will Take A Few Seconds To Upload The Images </p>
          </div>
        <div style="display:none" id="hidden_div">
          <div  id="div1" class="fa"></div>
          <div  style="text-align: center;" class="alert alert-danger" role="alert">
          <p>It Will Take A Few Seconds To Upload The Images </p>
          </div>
        </div>
  	    <div class="form-actions">
  	    	<input style="width: 100%;" type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
  	    </div><br>
	    </form>
	    </div>
	    <div class="col-sm-5">
      <img style="width: 100%" src="images/background/illutration.png">
	    </div>
      <div class="row">
        <div style="text-align: center;" class="col-sm-12">
          <ul class="sharing"><br>
          <div class="col-sm-3">
            <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i>Find Kapu on Facebook</a></li>
          </div>
          <div class="col-sm-3">
            <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i>Find Kapu on Twitter</a></li>
          </div>
          <div class="col-sm-3">
            <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
          </div>
          <div class="col-sm-3">
            <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
          </div>
          </ul>
        </div>
      </div>
	    <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>
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
<!-- scripts for showing the images live when uploaded --> 
<script>
  document.getElementById('file1').onchange = function () {
  var src1 = URL.createObjectURL(this.files[0])
  document.getElementById('image1').src = src1
}
</script> 
<script>
  document.getElementById('file2').onchange = function () {
  var src2 = URL.createObjectURL(this.files[0])
  document.getElementById('image2').src = src2
}
</script>
<script>
  document.getElementById('file3').onchange = function () {
  var src3 = URL.createObjectURL(this.files[0])
  document.getElementById('image3').src = src3
}
</script> 
<script>
  document.getElementById('file4').onchange = function () {
  var src4 = URL.createObjectURL(this.files[0])
  document.getElementById('image4').src = src4
}
</script>
<script>
  document.getElementById('file5').onchange = function () {
  var src5 = URL.createObjectURL(this.files[0])
  document.getElementById('image5').src = src5
}
</script> 
<script>
  document.getElementById('file6').onchange = function () {
  var src6 = URL.createObjectURL(this.files[0])
  document.getElementById('image6').src = src6
}
</script>

<!-- scripts for the hour glass animation --> 
<script>
function hourglass() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf251;";
  setTimeout(function () {
      a.innerHTML = "&#xf252;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf253;";
    }, 2000);
}
hourglass();
setInterval(hourglass, 3000);
</script>