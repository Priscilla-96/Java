<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

if(isloggedin()){} else{
   header("location:login.php");
}

$id=$_SESSION['id'];

    //select unlocked profiles for this user    
    $sql="SELECT * FROM unlocked_profiles WHERE cust_id  = '$id' ORDER BY created_date DESC";

    $result = mysqlexec($sql);
    /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   // echo "<script> window.location=\"searchresults.php?result=$result\"</script>";
    //return $result;
    }*/

    if (!isset($_GET['mes'])) {
      $message=null;
    }else{
      $signupCheck = $_GET['mes'];
      if ($signupCheck == "unlckd") {
          $message='The Profiles You Selected Were Unlocked';
      }else{
          $message=null;
      }
    }
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
<!-- Fade-in animation -->
<link rel="stylesheet" href="css/animate.css">
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
                alert("You Can Only Select Three") ;
            }
        });
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
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3 cc">
  <div class="container fadeInUp animated">
   <div class="breadcrumb1">
     <ul>
      <?php
            if($message){              
              echo '  <div style="text-align: center;" class="alert alert-success" role="alert">'.$message.'<br>
              </div>';              
              }
              ?>
            <br>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <a href="userhome.php?id=<?php echo $id ?>"><span style="color: black;">Back</span></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Unlocked Profiles / Select Any Profile To View Details</li>
     </ul>
   </div>
   
     <div class="row ">
           <div class="paid_people fadeInUp animated">
   <h1>Unlocked Profiles</h1><br>
   </div>
  </div>

  <form name=form1 method=get action=check.php>
   
<?php

echo "<div class='row'>"; //starting row  
if ($result) {
  # code...

while ($row = mysqli_fetch_assoc($result))
  {
    
    $profid=$row['unlckd_pro_id'];
    //getting photo for display
    $sql="SELECT * FROM photos WHERE cust_id=$profid";
    $result2=mysqlexec($sql);
    $photo=mysqli_fetch_assoc($result2);
    $pic=$photo['pic1'];

    $sql1="SELECT * FROM customer WHERE cust_id=$profid";
    $result3=mysqlexec($sql1);
    
    while ($row2 = mysqli_fetch_assoc($result3))
    {
      $fn=$row2['firstname'];
      $ln=$row2['lastname'];
      $age=$row2['age'];
      $mt=$row2['mothertounge'];
    }

    //new part
echo '
    <div class="col-sm-3">
      <div class="card zoom cont"  style="width: 22rem; height: 22rem;">
        <a style="text-decoration: none;" href="view_profile.php?id='.$profid.'" >
          <img style="width:50%" name="image" src="profile/'. $profid.'/'.$pic .'" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
        <br>
          <h4 class="card-title">'.$fn.'  '.$ln.'</h4>
          <p class="card-title">Mother Tounge :  '.$mt.'</p>
          <p class="card-title">Age : '.$age.'</p>
        </div>
      </div>
    </div>
';
    /*
     echo '
     <div class="col-lg-4">
      <div class="card" style="width: 10rem; height: rem;">
        <a href=\"view_profile.php?id=$profid\">
          <img style="width:100%" src="profile/'. $profid.'/'.$pic .'" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to content.</p>
          </div>
        </a>
      </div>
      </div>'
*/
      /*
        <div class="card mb-3">
        <a href=\"view_profile.php?id=$profid\">
          <div class="col-md-3">
            <img style="width:100%; height:300px" src="profile/'. $profid.'/'.$pic .'" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-3">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </a>
      </div>
      */

      ;

    // printing left side profile
/*    echo "<div class=\"col-sm-4 fadeInUp animated\">";
        echo "<ul class=\"profile_item fadeInUp animated\">";
            echo "<a href=\"view_profile.php?id=$profid\">";
                echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\"" ;
                echo "alt=\"\"/></li>";
                
                echo "<li class=\"profile_item-desc\">";
                echo "<h4>" . $fn . " " . $ln . "</h4>";
                echo "<p>" . $age. "Yrs</p>";
                echo "<p>" . $mt. "</p>";
                echo "<h5>" . "View Full Profile" . "</h5>";
                echo "</li>";
            echo "</a>";
        echo "</ul>";
    echo "</div>";*/ // end
    
  } //loop end
  echo "</div>"; //row end
  }else{
    echo "No Profiles Unlocked";
  }
?>

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