<script type="text/javascript">
  window.history.forward();
  function noback(){
     window.history.forward();
  }
</script>
<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
$id=$_SESSION['id'];

if(isloggedin()){} else{
   header("location:login.php");
}

    //get passed data and filter
    $agemin=$_POST['amin'];
    $agemax=$_POST['amax'];
    $maritalstatus=$_POST['maritalstatus'];
    $mothertounge=$_POST['mothertounge'];
    $sex = $_POST['sex'];
    $limit = $_POST['limith'];

    
    $sql="SELECT * FROM customer WHERE 
    sex='$sex' 
    AND age>='$agemin'
    AND age<='$agemax'
    AND maritalstatus = '$maritalstatus'
    AND mothertounge = '$mothertounge'";

    $result = mysqlexec($sql);
    /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   // echo "<script> window.location=\"searchresults.php?result=$result\"</script>";
    //return $result;
    }*/
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Dating  | User Home :: Kapu Dating
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
-->
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

<script type="text/javascript">
    
    var max_limit = <?php echo $limit; ?>; // Max Limit
    $(document).ready(function (){
        $(".game:input:checkbox").each(function (index){
            this.checked = (".game:input:checkbox" < max_limit);
            }).change(function (){
            if ($(".game:input:checkbox:checked").length > max_limit){
                this.checked = false;
                alert("Maximum Number Of Profiles Selected") ;
            }
        });
    });
    
</script>

</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profiles Matching Your Preferences</li>
     </ul>
   </div>
   
     <div class="row">
           <div class="paid_people">
   <h1>Profiles</h1>
   </div>
  </div>

  <form name=form1 method=get action=addUnlockedProfiles.php?id=<?php echo $id ?>>
   
<?php

echo "<div class='row'>"; //starting row  
while ($row = mysqli_fetch_assoc($result))
  {
    
    $profid=$row['cust_id'];
    //getting photo for display
    $sql="SELECT * FROM photos WHERE cust_id=$profid";
    $result2=mysqlexec($sql);
    $photo=mysqli_fetch_assoc($result2);
    $pic=$photo['pic1'];

    // printing profile details
    echo "<div class=\"col-sm-4\">";
        echo "<ul class=\"profile_item\">";
             echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\"" ;
                echo "alt=\"\"/></li>";
               
                echo "<li class=\"profile_item-desc\">";
                 echo "<input  style='display:inline-block;float:left;' type='checkbox' class='game' value='". $profid."' name='data[]' >";
                echo "<h4 style='color:black'>&nbsp&nbsp Select</h4>";
                
                echo "<h4 style='color:black'>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                echo "<p>Age : " . $row['age']. "Yrs</p>";
                echo "<p>Mother Tounge : " . $row['mothertounge']. "</p>";
                
                echo "</li><br><br>";
        echo "</ul>";
    echo "</div>"; // end
    
  } //loop end
  echo "</div>"; //row end
?>

<div style="text-align: center;"><br>
  <div style="text-align: center;" class="alert alert-danger" role="alert">
      <?php echo"You Can Select Upto ". $limit." Profiles Before Proceeding"; ?>
    </div>
  <input  style="width: 30%;min-width: 280px;" class="btn btn-primary" type="submit" name="" value="Unlock Profiles">
    
</div>

</form>
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