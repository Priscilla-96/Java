<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php

    $id=$_SESSION['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];     
    $country = $_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];     
    $contactNo=$_POST['contactNo'];
    $identityCardNo=$_POST['identityCardNo'];

  if(isloggedin()){} else{
     header("location:login.php");
  }

    //get passed data and filter
    $agemin=$_POST['amin'];
    $agemax=$_POST['amax'];
    $maritalstatus=$_POST['maritalstatus'];
    $mothertounge=$_POST['mothertounge'];
    $sex = $_POST['sex'];
    $limit = $_POST['age'];

    $payamount = 0;

    if ($limit==5) {
      $payamount = 500;
    }else if ($limit == 12) {
      $payamount = 1000;
    }else if ($limit == 30) {
      $payamount = 2500;
    }else if ($limit == 60) {
      $payamount = 5000;
    }else{
      $payamount = 5000;
    }

    $items= $payamount ." Package Option";

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
<!-- Custom Theme files -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
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
<style> 
  .cc{
    background-image: url(images/background/right-shape.png);
    width: 100%;
  }
</style>
<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<!-- form trigger jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<!--  Navigation Start -->
 <?php include_once("includes/navigation.php");?>
<!--  Navigation End -->
<div class="grid_3 cc">
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
        <div style="text-align: center;" class="alert alert-danger" role="alert">
          <?php echo"You Can Select Upto ". $limit." Profiles Before Proceeding, Check The Box  ''<input type='checkbox' checked>''  To Select A Profile"; ?>
          <br>
        </div>
        <h1>Profiles</h1>
      </div>
    </div>
    <form name=form1 id="formid" method=get action=addUnlockedProfiles.php?id=<?php echo $id ?> > 
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
    echo "<div style='background-color: white;border-radius: 50px;' class=\"col-sm-4\">
            <ul class=\"profile_item\">
              <li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>
              <li class=\"profile_item-desc\">
              <input  style='display:inline-block;float:left;margin-top:0;' type='checkbox' class='game' value='". $profid."' name='data[]' >
              <h4 style='color:black;'>&nbsp&nbsp Select</h4>
              <p>" . $row['firstname'] . " " . $row['lastname'] . "</p>
              <p>Age : " . $row['age']. "Yrs</p>
              <p>Mother Tounge : " . $row['mothertounge']. "</p>
              </li><br><br>
            </ul>
          </div>"; // end    
  } //loop end
  echo "</div>"; //row end
?>

      <div style="text-align: center;">
        <div style="text-align: center;" class="alert alert-danger" role="alert">
          <?php echo"One Time Selection Only!"; ?>
        </div>
        <input  style="width: 30%;min-width: 280px;"  class="download btn btn-primary" id="payhere-payment" type="button" name="" value="Unlock Selected Profiles">
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
<script>
  $('.download').click(function(e){    

    var payment = {
        "sandbox": true,
        "merchant_id": "1216543",    // Replace your Merchant ID
        "return_url": undefined,     // Important
        "cancel_url": undefined,     // Important
        "notify_url": "http://sample.com/notify",
        "order_id": "<?php echo $identityCardNo; ?>",
        "items": "<?php echo $items; ?>",
        "amount": <?php echo $payamount; ?>,
        "currency": "LKR",
        "first_name": "<?php echo $fname; ?>",
        "last_name": "<?php echo $lname; ?>",
        "email": "<?php echo $email; ?>",
        "phone": "<?php echo $contactNo; ?>",
        "address": "<?php echo $state; ?>",
        "city": "<?php echo $district; ?>",
        "country": "<?php echo $country; ?>"        
      };

      payhere.startPayment(payment);
      // Called when user completed the payment. It can be a successful payment or failure
      payhere.onCompleted = function onCompleted(orderId) {

          console.log("Payment completed. OrderID:" + orderId);
          $("#formid").trigger('submit')//TriggerFormSUBMIT ONCE THE OPERATION isDONE
      };

    // Called when user closes the payment without completing
    payhere.onDismissed = function onDismissed() {
        //Note: Prompt user to pay again or show an error page
        console.log("Payment dismissed");
    };

    // Called when error happens when initializing payment such as invalid parameters
    payhere.onError = function onError(error) {
        // Note: show an error page
        console.log("Error:"  + error);
    };
  })
</script> 
<!-- disable left click option to prevent inspect element-->
<script type="text/javascript">
  $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
</script>
<!-- disable F12 option to prevent inspect element-->
<script type="text/javascript">
  $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
</script>
</body>
</html>	