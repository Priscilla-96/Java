
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
  <style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
  <style>
#div1 {
  position: absolute;
  top: 70%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-70%);
  -ms-transform: translate(-50%,-70%);
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
</script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="overlay" onclick="off()">
        <div style="text-align: center;font-size: 90%" id="text">Uploading Your Images!<br>This Will Take A Few Seconds</div><br>
        <div id="div1" class="fa"></div>
        </div>
      </div>
    </div>
  </div>
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
                <input type="file" id="file1" name="pic1"  />
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
                <input type="file" id="file2" name="pic2"  />
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
                <input type="file" id="file3" name="pic3"  />
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
                <input type="file" id="file4" name="pic4"  />
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
                <input type="file" id="file5" name="idFront"  />
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
                <input type="file" id="file6" name="idBack"  />
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
        <!-- <div style="display:none" id="hidden_div">
          <div  id="div1" class="fa"></div>
          <div  style="text-align: center;" class="alert alert-danger" role="alert">
          <p>It Will Take A Few Seconds To Upload The Images </p>
          </div>
        </div> -->

  	    <div class="form-actions">
  	    	<input style="width: 100%;" type="submit" onclick="on()" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
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

<!-- scripts for the hour glass animation  
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
</script>-->

<script>
  $('form').submit(function(event) {
    

    var file1 = $(document.getElementById('file1')).val();
    var file2 = $(document.getElementById('file2')).val();
    var file3 = $(document.getElementById('file3')).val();
    var file4 = $(document.getElementById('file4')).val(); 
    var file5 = $(document.getElementById('file5')).val();
    var file6 = $(document.getElementById('file6')).val(); 

      if ( !file1 || !file2 || !file3 || !file4 || !file5 || !file6) {
        alert('Upload All Images To Continue');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
        return;
      } 

    //profile image validation
    var file11 = $(document.getElementById('file1')).val();
      if (file11.match(/\.(?:jpeg|jpg|png)$/)) {            
          var image = document.getElementById("file1");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('Profile Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("Profile Picture Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }

      }else{
        alert('Profile Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }

    //first image validation     
    var file22 = $(document.getElementById('file2')).val();
      if (file22.match(/\.(?:jpeg|jpg|png)$/)) { 
        var image = document.getElementById("file2");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('First Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("First Image Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }

      }else{
        alert('First Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }

    //third image validation     
    var file33 = $(document.getElementById('file3')).val();
      if (file33.match(/\.(?:jpeg|jpg|png)$/)) {
        var image = document.getElementById("file3");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('Second Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("Second Image Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }       
      }else{
        alert('Second Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }

    //fourth image validation     
    var file44 = $(document.getElementById('file4')).val();
      if (file44.match(/\.(?:jpeg|jpg|png)$/)) {   
          var image = document.getElementById("file4");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('Third Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("Third Image Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }    
      }else{
        alert('Third Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }

    //fifth image validation     
    var file55 = $(document.getElementById('file5')).val();
      if (file55.match(/\.(?:jpeg|jpg|png)$/)) {   
          var image = document.getElementById("file5");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('ID Front Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("'ID Front Image Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }    
      }else{
        alert('ID Front Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }

    //sixth image validation     
    var file66 = $(document.getElementById('file6')).val();
      if (file66.match(/\.(?:jpeg|jpg|png)$/)) { 
          var image = document.getElementById("file6");
            if (typeof (image.files) != "undefined") {
                var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
                if(size > 2) {
                    alert('ID Back Image Size Is Too Large! Select A Image Less Than 2 MB');
                    event.preventDefault();
                    document.getElementById("overlay").style.display = "none";
                }else{}
            } else {
                alert("ID Back Image Uploading Error. Upload A Different Image");
                event.preventDefault();
                document.getElementById("overlay").style.display = "none";
            }      
      }else{
        alert('ID Back Picture Format Not Supported. Choose A Different Image!');
        event.preventDefault();
        document.getElementById("overlay").style.display = "none";
      }
});
</script>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

</script>
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