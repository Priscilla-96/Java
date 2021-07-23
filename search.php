<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php?mes=search");
}

?>
<?php
$result=search();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Datings
 | Search :: Make My Love
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
  </style>
</head>
<body>
<!--  Navigation Start -->
 <?php include_once("includes/navigation.php");?>
<!--  Navigation End -->

<!-- main area start -->
<div class="grid_3 cc">
  <div class="container fadeInUp animated">
    <div class="breadcrumb1 ">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Find Your Match</li>
      </ul>
    </div>
   
    <div class="col-md-7 search_left fadeInUp animated">
      <form action="priceoptions.php" method="post">
      <div class="elementor-widget-container">
            <h3 style="font-size: 40px;opacity: 70%;" class="elementor-heading-title elementor-size-default">Find your Special Someone</h3>
            <br>
          </div>	
       <div class="form_but1 fadeInUp animated">
    	<label class="col-sm-5 control-lable1" for="sex">Groom or Bride : </label>
      	<div class="col-sm-7 form_radios fadeInUp animated">
      		<input type="radio" class="radio_1" name="sex" value="male" <?php echo "checked";?>/> Groom &nbsp;&nbsp;
      		<input type="radio" class="radio_1" name="sex" value="female"/> Bride
      	</div>
      	<div class="clearfix"> </div>
      </div>
        <div class="form_but1 fadeInUp animated">
      	<label class="col-sm-5 control-lable1" for="Marital Status">Marital Status : </label>
        	<div class="col-sm-7 form_radios fadeInUp animated">
        		<input type="radio" class="radio_1" name="maritalstatus" value="Single" <?php echo "checked" ?>/> Single &nbsp;&nbsp;
        		<input type="radio" class="radio_1" name="maritalstatus" value="Divorced" /> Divorced &nbsp;&nbsp;
        		<input type="radio" class="radio_1" name="maritalstatus" value="Married" /> Married &nbsp;&nbsp;
        		<!--<input type="radio" class="radio_1" name="maritalstatus" value="Not Defined"/> Any -->
        	</div>
      	 <div class="clearfix"> </div>
        </div>
      <?php /*?>
      <div class="form_but1">
        <label class="col-sm-5 control-lable1" for="country">Country : </label>
        <div class="col-sm-7 form_radios">
          <div class="select-block1">
            <select name="country">
                <option value="">Country</option>
                <option value="Srilanka">Srilanka</option> 
                <option value="India">India</option> 
                <option value="Australia">Australia</option> 
                <option value="UAE">UAE</option> 
                
              </select>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="form_but1">
        <label class="col-sm-5 control-lable1" for="District / City">District / City : </label>
        <div class="col-sm-7 form_radios">
          <div class="select-block1">
            <select name="district">
                <option value="">District / City</option>
                <option value="Wayanad">kalutara</option>
                <option value="Calicut">Colombo</option>
                <option value="Malappuram">Galle</option> 
                <option value="Trivandrum">Jaffna</option> 
                <option value="Kannur">Kandy</option> 
                <option value="Kasargode">Kurunagale</option>
            </select>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="form_but1">
        <label class="col-sm-5 control-lable1" for="State">State : </label>
        <div class="col-sm-7 form_radios">
          <div class="select-block1">
            <select name="state">
                <option value="">State</option>
                <option value="Sothern">Southern</option>
                <option value="Western">Western</option>
                <option value="Nothern">Nothern</option>
                <option value="Eastern">Eastern</option>
            </select>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="form_but1">
        <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
        <div class="col-sm-7 form_radios">
          <div class="select-block1">
            <select name="religion">
                <option value="">Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="sinhala">Sinhala</option>
                <option value="Muslim-All">Muslim-All</option> 
                <option value="Muslim-Shia">Muslim-Shia</option> 
                <option value="Muslim-Sunni">Muslim-Sunni</option> 
                <option value="Muslim-Others">Muslim-Others</option> 
                <option value="Christian-All">Christian-All</option> 
                <option value="Christian-Catholic">Christian-Catholic</option> 
                <option value="Jewish">Jewish</option> 
                <option value="Inter-Religion">Inter-Religion</option> 
            </select>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div><?php */?>
        <div class="form_but1 fadeInUp animated">
          <label class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label>
          <div class="col-sm-5 form_radios">
            <div class="select-block1 fadeInUp animated">
              <select name="mothertounge">
                <option value="Sinhala">Sinhala</option>
                <option value="English">English</option>
                <option value="Tamil">Tamil</option>
                <option value="Hindi">Hindi</option>
              </select>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="form_but1 fadeInUp animated">
      	<label class="col-sm-5 control-lable1" for="Age">Age Range: </label>
        	<div class="col-sm-5 form_radios ">
        	  <div class="col-sm-5 input-group1">
              <input class="form-control has-dark-background" name="agemin" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="slider-name" maxlength="2" placeholder="min" type="text" required=""/>
            </div>          
            <div class="col-sm-5 input-group1">
                <input class="form-control has-dark-background" name="agemax" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="2" id="slider-name" placeholder="max" type="text" required=""/><br><br>
            </div>
            <div class="clearfix"> </div>
        	</div>
      	  <div class="clearfix"> </div>
          <input style="width: 80%;min-width: 280px;opacity: 85%;" type="submit" class="btn btn-primary" name="search" value="Search"/>
        </div>
      </form>
      <div class="paid_people">

      <?php
        //only start display profiles if and only if search is triggered
        if(isset($_POST['search'])){

        // couloumn count
        $c_count = '1';

        while ($row = mysqli_fetch_assoc($result))
          {      
            $profid=$row['cust_id'];
            //getting photo to display
            $sql="SELECT * FROM photos WHERE cust_id=$profid";
            $result2=mysqlexec($sql);
            $photo=mysqli_fetch_assoc($result2);
            $pic=$photo['pic1'];

            // printing left side profile
            echo "<div class=\"row_1\">"; //starting row  
            if ($c_count == '1')
              {        
                echo "<div class=\"col-sm-6 paid_people-left\">"; //left statrted
                  echo "<ul class=\"profile_item\">";
                  echo "<a href=\"view_profile.php?id=$profid\">";
                    echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\" alt=\"\"/></li>";
                    echo "<li class=\"profile_item-desc\">";
                    echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                    echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                    echo "<h5>" . "View Full Profile" . "</h5>";
                    echo "</li>";
                  echo "</a>";
                  echo "</ul>";
                echo "</div>"; //left end
                $c_count++;
              }
            else
              {
                echo "<div class=\"col-sm-6\">"; //right statrted
                  echo "<ul class=\"profile_item\">";
                  echo "<a href=\"view_profile.php?id=$profid\">";
                    echo "<li class=\"profile_item-img\"><img src=\"profile/". $profid."/".$pic ."\"" . "class=\"img-responsive\"" ;
                    echo "alt=\"\"/></li>";
                    echo "<li class=\"profile_item-desc\">";
                    echo "<h4>" . $row['firstname'] . " " . $row['lastname'] . "</h4>";
                    echo "<p>" . $row['age']. "Yrs," . $row['religion'] . "</p>";
                    echo "<h5>" . "View Full Profile" . "</h5>";
                    echo "</li>";
                  echo "</a>";
                  echo "</ul>";
                echo "</div class=\"test\">"; //right end

                // end of right side
                $c_count = '1';
              }
            echo "</div>"; //row end
          } //end of while
        }//end of if
      ?>
         
      </div>
    </div>
    <!-- main area end -->

    <!-- Match Right Starts -->
    <div class="col-md-5">
      <img style="width: 100%" src="images/background/illutration.png" class="attachment-large size-large" alt="" loading="lazy" srcset="images/background/illutration.png 520w, https://slkapu.com/wp-content/uploads/2021/05/illutration-300x219.png 300w" class="img-responsive" alt=""/>
    </div>
    <!-- Match Right ends -->
    <div class="clearfix"> </div>
  </div>
</div>

<?php include_once("footer.php");?>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	