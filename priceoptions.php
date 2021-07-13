<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

    if(isloggedin()){
     //do nothing stay here
    }else{
      header("location:login.php");
    }
      $id= $_SESSION['id'];
        //getting profile details from db
        $sql="SELECT * FROM customer WHERE cust_id = $id";
        $result = mysqlexec($sql);
        if($result){
        $row=mysqli_fetch_assoc($result);

          $fname=$row['firstname'];
          $lname=$row['lastname'];
          $email=$row['email'];     
          $country = $row['country'];
          $state=$row['state'];
          $district=$row['district'];     
          $contactNo=$row['contact'];
          $identityCardNo=$row['Identity_card_no'];

        //end of getting profile detils
        }else{
          echo "<script>alert(\"Invalid Profile ID\")</script>";
        } 
        $count = 0;
        if(isset($_POST['search'])){
        
          $agemin=$_POST['agemin'];
          $agemax=$_POST['agemax'];
          $maritalstatus=$_POST['maritalstatus'];        
          $mothertounge=$_POST['mothertounge'];
          $sex = $_POST['sex'];

          $sql="SELECT * FROM customer WHERE 
          sex='$sex' 
          AND age>='$agemin'
          AND age<='$agemax'
          AND maritalstatus = '$maritalstatus'          
          AND mothertounge = '$mothertounge'
          ";
          $result = mysqlexec($sql);   
      }
      while ($row = mysqli_fetch_assoc($result))
        {        
          $count = $count + 1;
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
</head>
<body>
<!-- Navigation Start -->
 <?php include_once("includes/navigation.php");?>
<!-- Navigation End -->
<div class="grid_3">
  <div class="container">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">User Home</li>
      </ul>
    </div>
    <div class="row">
      <div style="background-color: #ccc;"></div>
      <div style="text-align: center;" class="alert alert-success" role="alert">
        <?php echo $count." Profiles Found Matching Your Description!"; ?>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="card" >
            <img style="width:100%;" src="images/priceOptImages/bronze.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="alert alert-warning" role="alert">
                Get Details of 5 Profiles
              </div>
              <form action="searchresults.php" method="post"  target="blank">

                <input type="hidden" name="amin" value="<?php echo $agemin ?>">
                <input type="hidden" name="amax" value="<?php echo $agemax ?>">
                <input type="hidden" name="maritalstatus" value="<?php echo $maritalstatus ?>">
                <input type="hidden" name="mothertounge" value="<?php echo $mothertounge ?>">
                <input type="hidden" name="sex" value="<?php echo $sex ?>">
                <input type="hidden" name="age" value="5">

                <input type="hidden" name="fname" value="<?php echo $fname ?>">
                <input type="hidden" name="lname" value="<?php echo $lname ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="country" value="<?php echo $country ?>">
                <input type="hidden" name="state" value="<?php echo $state ?>">
                <input type="hidden" name="district" value="<?php echo $district ?>">
                <input type="hidden" name="contactNo" value="<?php echo $contactNo ?>">
                <input type="hidden" name="identityCardNo" value="<?php echo $identityCardNo ?>">
                    
                <input style="width: 100%;height:60px;" class="btn btn-primary" type="submit" value="Find YourMatch" name="optionone"><br><hr  style="height:2px;border-width:0;color:gray;background-color:gray"><br>
              </form>
            </div>
          </div>
        </div>
          
        <div class="col-md-3">
          <div class="card" >
            <img style="width:100%;" src="images/priceOptImages/silver.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="alert alert-warning" role="alert">
                Get Details of 12 Profiles
              </div>
              <form action="searchresults.php" method="post"  target="blank">

                <input type="hidden" name="amin" value="<?php echo $agemin ?>">
                <input type="hidden" name="amax" value="<?php echo $agemax ?>">
                <input type="hidden" name="maritalstatus" value="<?php echo $maritalstatus ?>">
                <input type="hidden" name="mothertounge" value="<?php echo $mothertounge ?>">
                <input type="hidden" name="sex" value="<?php echo $sex ?>">
                <input type="hidden" name="age" value="12">

                <input type="hidden" name="fname" value="<?php echo $fname ?>">
                <input type="hidden" name="lname" value="<?php echo $lname ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="country" value="<?php echo $country ?>">
                <input type="hidden" name="state" value="<?php echo $state ?>">
                <input type="hidden" name="district" value="<?php echo $district ?>">
                <input type="hidden" name="contactNo" value="<?php echo $contactNo ?>">
                <input type="hidden" name="identityCardNo" value="<?php echo $identityCardNo ?>">
                    
                <input style="width: 100%;height:60px;" class="btn btn-primary" type="submit" value="Find YourMatch" name="optionone"><br><hr  style="height:2px;border-width:0;color:gray;background-color:gray"><br>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" >
            <img style="width:100%;" src="images/priceOptImages/gold.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="alert alert-warning" role="alert">
                Get Details of 30 Profiles
              </div>
              <form action="searchresults.php" method="post"  target="blank">

                <input type="hidden" name="amin" value="<?php echo $agemin ?>">
                <input type="hidden" name="amax" value="<?php echo $agemax ?>">
                <input type="hidden" name="maritalstatus" value="<?php echo $maritalstatus ?>">
                <input type="hidden" name="mothertounge" value="<?php echo $mothertounge ?>">
                <input type="hidden" name="sex" value="<?php echo $sex ?>">
                <input type="hidden" name="age" value="30">

                <input type="hidden" name="fname" value="<?php echo $fname ?>">
                <input type="hidden" name="lname" value="<?php echo $lname ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="country" value="<?php echo $country ?>">
                <input type="hidden" name="state" value="<?php echo $state ?>">
                <input type="hidden" name="district" value="<?php echo $district ?>">
                <input type="hidden" name="contactNo" value="<?php echo $contactNo ?>">
                <input type="hidden" name="identityCardNo" value="<?php echo $identityCardNo ?>">
                    
                <input style="width: 100%;height:60px;" class="btn btn-primary" type="submit" value="Find YourMatch" name="optionone"><br><hr  style="height:2px;border-width:0;color:gray;background-color:gray"><br>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" >
            <img style="width:100%;" src="images/priceOptImages/platinum.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="alert alert-warning" role="alert">
                Get Details of 60 Profiles
              </div>
              <form action="searchresults.php" method="post"  target="blank">

                <input type="hidden" name="amin" value="<?php echo $agemin ?>">
                <input type="hidden" name="amax" value="<?php echo $agemax ?>">
                <input type="hidden" name="maritalstatus" value="<?php echo $maritalstatus ?>">
                <input type="hidden" name="mothertounge" value="<?php echo $mothertounge ?>">
                <input type="hidden" name="sex" value="<?php echo $sex ?>">
                <input type="hidden" name="age" value="60">
                    
                <input type="hidden" name="fname" value="<?php echo $fname ?>">
                <input type="hidden" name="lname" value="<?php echo $lname ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <input type="hidden" name="country" value="<?php echo $country ?>">
                <input type="hidden" name="state" value="<?php echo $state ?>">
                <input type="hidden" name="district" value="<?php echo $district ?>">
                <input type="hidden" name="contactNo" value="<?php echo $contactNo ?>">
                <input type="hidden" name="identityCardNo" value="<?php echo $identityCardNo ?>">
                    
                <input style="width: 100%;height:60px;" class="btn btn-primary" type="submit" value="Find YourMatch" name="optionone"><br><hr  style="height:2px;border-width:0;color:gray;background-color:gray"><br>
              </form>                
            </div>
          </div>
        </div>          
      </div>
    </div>
  </div>

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