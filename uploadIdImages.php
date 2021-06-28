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
    $pic1=$row2['id_card_front'];
    $pic2=$row2['id_card_back'];
  
  }else{
    echo "<script>alert(\"Invalid Profile ID\")</script>";
  }

//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ updateIdPhoto($id); }
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
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container  fadeInUp animated">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <a href="userhome.php?id=<?php echo $id ?>"><span style="color: black;">Back</span></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Updfate Identification Card Images</li>
     </ul>
   </div>


  <!--row start-->
                 
            
           


   <div class="services  fadeInUp animated">
   	  <div class="col-sm-12">
        
	   <form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Current Images  <span  style="font-size: 13px" class="form-required" title="This field is required.">(Image formats allowed png, jpeg, jpg)</span><br><br></label>
        <div class="row">
          <div style="text-align: center;"  class="col-sm-6"> 
              <img style="width: 70%" src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
              <br><br><br>

              <input type="hidden" value="<?php echo $pic1;?>" name="a">
              <label class="custom-file-upload btn btn-success">
                <input type="file" id="edit-name" name="pic1" ccept="image/png, image/jpg, image/jpeg" />
                  Select ID Front Side Image
              </label>
              <?php /*?><label for="edit-name">Select New Image <span class="form-required" title="This field is required."></span><br></label> <?php */?>

            </div>
          <div style="text-align: center;" class="col-sm-6">
              <img style="width: 70%" src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
              <br><br><br>
              <input type="hidden" value="<?php echo $pic2;?>" name="b">
              <label class="custom-file-upload btn btn-success">
                <input type="file" id="edit-name" name="pic2" ccept="image/png, image/jpg, image/jpeg" />
                  Select ID Back Side Image
              </label>
               <?php /*?><label for="edit-name">Select New Image <span class="form-required" title="This field is required."></span><br></label> <?php */?>
              
            </div>
          
        </div>
	    </div>
	    <div style="text-align: center;" class="form-actions">
	    	<input style="width: 38%;min-height: 40px;" type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
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