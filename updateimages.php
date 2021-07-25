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
$profileid=$id;
  $sql2="SELECT * FROM photos WHERE cust_id = $profileid";
  $result2 = mysqlexec($sql2);
  if($result2){
    $row2=mysqli_fetch_array($result2);
    $pic1=$row2['pic1'];
    $pic2=$row2['pic2'];
    $pic3=$row2['pic3'];
    $pic4=$row2['pic4'];
  
  }else{
    echo "<script>alert(\"Invalid Profile ID\")</script>";
  }

//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ updatephoto($id); }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Datings
 | Login :: Make My Love
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
<style type="text/css">
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
    .cc{
      background-image: url(images/background/right-shape.png);
      width: 100%;
    }
  
  </style>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3 cc">
  <div class="container  fadeInUp animated">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <a href="userhome.php?id=<?php echo $id ?>"><span style="color: black;">Back</span></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Update Images</li>
     </ul>
   </div>


  <!--row start-->
                 
            
           


   <div class="services  fadeInUp animated">
   	  <div class="col-sm-12">
        
	   <form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Current Images<span class="form-required" title="This field is required.">*</span><br><br></label>
        <div class="row">
          <!-- Profile pic-->
            <div class="col-sm-3"> 
                <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%" class="custom-file-upload btn btn-success">
                      <input type="hidden" value="<?php echo $pic1;?>" name="a">
                      <input type="file" id="file1" name="pic1" accept="image/png, image/jpg, image/jpeg" />
                        Select New Profile Picture
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%"  id="word1"></label><br>
                    <img style="width: 100%" id="image1" />
                    <br>
                    <hr><br>
                  </div>
                </div>
              </div>
              <!-- first pic-->
            <div class="col-sm-3"> 
                <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%" class="custom-file-upload btn btn-success">
                      <input type="hidden" value="<?php echo $pic2;?>" name="b">
                      <input type="file" id="file2" name="pic2" accept="image/png, image/jpg, image/jpeg" />
                        Select New Picture
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%"  id="word2"></label><br>
                    <img style="width: 100%" id="image2" />
                    <br>
                    <hr><br>
                  </div>
                </div>
              </div>
              <!-- second pic-->
            <div class="col-sm-3"> 
                <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic3;?>" />
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%" class="custom-file-upload btn btn-success">
                      <input type="hidden" value="<?php echo $pic3;?>" name="c">
                      <input type="file" id="file3" name="pic3" accept="image/png, image/jpg, image/jpeg" />
                        Select New Picture
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%"  id="word3"></label><br>
                    <img style="width: 100%" id="image3" />
                    <br>
                    <hr><br>
                  </div>
                </div>
              </div>
              <!-- third pic-->
            <div class="col-sm-3"> 
                <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic4;?>" />
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%" class="custom-file-upload btn btn-success">
                      <input type="hidden" value="<?php echo $pic4;?>" name="d">
                      <input type="file" id="file4" name="pic4" accept="image/png, image/jpg, image/jpeg" />
                        Select New Picture
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div style="text-align: center;" class="col-sm-12">
                    <br><label  style="width: 90%"  id="word4"></label><br>
                    <img style="width: 100%" id="image4" />
                    <br>
                    <hr><br>
                  </div>
                </div>
              </div>
             

            <!--
              <div class="col-sm-3"> 
              <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
              <br><br><br><label for="edit-name">Select New Image <p style="font-size: 13px">(Image Formats png, jpeg, jpg)</p><span class="form-required" title="This field is required."></span><br></label>
              <input type="hidden" value="<?php echo $pic1;?>" name="a">
              <input type="file" id="edit-name" name="pic1" class="form-file required" accept="image/png, image/jpg, image/jpeg"><br><br>
            </div>
            

          <div class="col-sm-3">
              <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
              <br><br><br><label for="edit-name">Select New Image <p style="font-size: 13px">(Image Formats png, jpeg, jpg)</p><span class="form-required" title="This field is required."></span><br></label>
              <input type="hidden" value="<?php echo $pic2;?>" name="b">
              <input type="file" id="edit-name" name="pic2" class="form-file required" accept="image/png, image/jpg, image/jpeg"><br><br>
            </div>
          <div class="col-sm-3">
              <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic3;?>" />
              <br><br><br><label for="edit-name">Select New Image <p style="font-size: 13px">(Image Formats png, jpeg, jpg)</p><span class="form-required" title="This field is required."></span><br></label>
              <input type="hidden" value="<?php echo $pic3;?>" name="c">
              <input type="file" id="edit-name" name="pic3" class="form-file required" accept="image/png, image/jpg, image/jpeg"><br><br>
            </div>
          <div class="col-sm-3"> 
              <img style="width: 100%" src="profile/<?php echo $profileid;?>/<?php echo $pic4;?>" />
              <br><br><br><label for="edit-name">Select New Image <p style="font-size: 13px">(Image Formats png, jpeg, jpg)</p><span class="form-required" title="This field is required."></span><br></label>
              <input type="hidden" value="<?php echo $pic4;?>" name="d">
              <input type="file" id="edit-name" name="pic4" class="form-file required" accept="image/png, image/jpg, image/jpeg"><br><br>
            </div> -->
        </div>
	    </div>
      <div  style="text-align: center;" class="alert alert-danger" role="alert">
          <p>It Will Take A Few Seconds To Upload The Images </p>
          </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
	    </div>
	   </form>
	  </div>
	  
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
<script>
  document.getElementById('file1').onchange = function () {
  var src1 = URL.createObjectURL(this.files[0])
  document.getElementById('image1').src = src1
  document.getElementById('word1').innerHTML = 'Selected Profile Picture';
}
</script>
<script>
  document.getElementById('file2').onchange = function () {
  var src2 = URL.createObjectURL(this.files[0])
  document.getElementById('image2').src = src2
  document.getElementById('word2').innerHTML = 'Selected Picture';
}
</script>
<script>
  document.getElementById('file3').onchange = function () {
  var src3 = URL.createObjectURL(this.files[0])
  document.getElementById('image3').src = src3
  document.getElementById('word3').innerHTML = 'Selected Picture';
}
</script>
<script>
  document.getElementById('file4').onchange = function () {
  var src4 = URL.createObjectURL(this.files[0])
  document.getElementById('image4').src = src4
  document.getElementById('word4').innerHTML = 'Selected Picture';
}
</script>