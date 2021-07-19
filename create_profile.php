<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<?php 
if(! isloggedin()){
   header("location:login.php");
}

 ?>
<?php
$id=$_SESSION['id'];	

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}


//getting partner prefernce
$sql = "SELECT *  FROM users WHERE id = $id";
$result = mysqlexec($sql);
$row= mysqli_fetch_assoc($result);

$email=$row['email'];

if (!isset($_GET['mes'])) {
      $message=null;
      $color="";
  }else{
  	$signupCheck = $_GET['mes'];
  	if ($signupCheck == "next") {
        $message='Fill The following Details To Proceed';
        $color="blue";
    }else{
        $message=null;
        $color="";
    }
  }

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - KAPU Dating
 | Register :: Make My Love
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
<style> 
	.cc{
		background-image: url(images/background/right-shape.png);
		width: 100%;
		}
</style>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation2.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3 cc">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
     	<?php
            if($message){
              if ($color=="blue") {
                echo '  <div style="text-align: center;" class="alert alert-warning" role="alert">'.$message.'<br>
                  </div>';
              		}
          		}
              ?>
            <br>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>        
        <li class="current-page">Add Groom/Bride Details To Proceed</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">	     	
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="lname" size="60" maxlength="128" class="form-text required" required>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Gender <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
	               
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email"  value="<?php echo $email; ?>" size="60" maxlength="60" class="form-text required" required>
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">
 Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day">
		                    <option value="01">1</option>
		                    <option value="02">2</option>
		                    <option value="03">3</option>
		                    <option value="04">4</option>
		                    <option value="05">5</option>
		                    <option value="06">6</option>
		                    <option value="07">7</option>
		                    <option value="08">8</option>
		                    <option value="09">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month">
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year">
	                    	<option value="1960">1960</option>
		                    <option value="1961">1961</option>
		                    <option value="1962">1962</option>
		                    <option value="1963">1963</option>
		                    <option value="1964">1964</option>
		                    <option value="1965">1965</option>
		                    <option value="1966">1966</option>
		                    <option value="1967">1967</option>
		                    <option value="1968">1968</option>
		                    <option value="1969">1969</option>
		                    <option value="1970">1970</option>
							<option value="1971">1971</option>
		                    <option value="1972">1972</option>
		                    <option value="1973">1973</option>
		                    <option value="1974">1974</option>
		                    <option value="1975">1975</option>
		                    <option value="1976">1976</option>
		                    <option value="1977">1977</option>
		                    <option value="1978">1978</option>
		                    <option value="1979">1979</option>
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="religion">
		                    <option value="Not Applicable">Not Defined</option>
		                    <option value="Buddhist">Buddhist</option>
		                    <option value="Hindu">Hindu</option>
		                    <option value="Muslim">Muslim</option>
		                    <option value="Christian">Christian</option>
		                    
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-8 form_box2">
	                   <div class="select-block1">
	                   	<input type="text" name="caste" size="60" maxlength="128" class="form-text required" placeholder="Caste">
	                    
	                  </div>
	                 </div>
	                 
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="country">
		                    <option value="Srilanka">Srilanka</option>
		                    <option value="Australia">Australia</option>
		                    <option value="India">India</option>
		                    <option value="UAE">UAE</option>
		                    
	                    </select>
	                  </div>
	            </div>
	         
	            <div class="col-sm-4 form_box2">
	            	<label for="edit-pass">Province <span class="form-required" title="This field is required.">*</span></label>
	                   <div class="select-block1">
	                    <select name="state">
	                    	
		                    <option value="Western">Western</option>
		                    <option value="Central">Central</option>
		                    <option value="Southern">Southern</option>
		                    <option value="Uva">Uva</option>
		                    <option value="Sabaragamuwa">Sabaragamuwa</option>
		                    <option value="North Western">North Western</option>
		                    <option value="North Central">North Central</option>
		                    <option value="Eastern">Eastern</option> 
		                    <option value="Nothern">Nothern</option> 
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                 	<label for="edit-pass">District <span class="form-required" title="This field is required.">*</span></label>
	                   <div class="select-block1">
	                    <select name="district">



		                    <option value="Colombo">Colombo</option>
		                    <option value="Jaffna">Jaffna</option>
		                    <option value="Kilinochchi">Kilinochchi</option>
		                    <option value="Mannar">Mannar</option>
		                    <option value="Mulaitivu">Mulaitivu</option>
		                    <option value="Vavuniya">Vavuniya</option>

		                    <option value="Puttalam">Puttalam</option>
		                    <option value="Kurunegala">Kurunegala</option>

		                    <option value="Gampaha">Gampaha</option>
		                    <option value="Kalutara">Kalutara</option>

		                    <option value="Anuradhapura">Anuradhapura</option>
		                    <option value="Polonnaruwa">Polonnaruwa</option>

		                    <option value="Matale">Matale</option>
		                    <option value="Kandy">Kandy</option>
		                    <option value="Nuwara Eliya">Nuwara Eliya</option>

		                    <option value="Kegalle">Kegalle</option>
		                    <option value="Ratnapura">Ratnapura</option>

		                    <option value="Trincomalee">Trincomalee</option>
		                    <option value="Batticaloa">Batticaloa</option>
		                    <option value="Ampara">Ampara</option>

		                    <option value="Badulla">Badulla</option>
		                    <option value="Monaragala">Monaragala</option>

		                    <option value="Hambantota">Hambantota</option>
		                    <option value="Matara">Matara</option>
		                    <option value="Galle">Galle</option>
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
			    	<input type="text" name="age" size="60" maxlength="2" class="form-text required"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
	                
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
	                	
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Profile Created by <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="profileby">
	                    <option value="Self">Self</option>
	                    <option value="Son/Daughter">Son/Daughter</option> 
	                    <option value="Mother/Father">Mother/Father</option> 
	               		<option value="Other">Other</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="Primary">Primary</option>
	                    <option value="Ordinary level">Ordinary level</option> 
	               		<option value="Advance Level">Advance Level</option> 
	               		<option value="Diploma">Diploma</option> 
	               		<option value="HND">HND</option> 
	               		<option value="Degree">Degree</option> 
	               		<option value="Masters">Masters</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Specialization <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="edudescr" value="" size="60" maxlength="60" class="form-text">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Body type<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="bodytype">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="Slim">Slim</option>
	                    <option value="Fat">Fat</option> 
	               		<option value="Average">Average</option> 
	                </select>
			    </div>
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Physical Status<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="physicalstatus">
	                    <option value="No Problem">No Problem</option>
	                    <option value="Blind">Blind</option> 
	               		<option value="Deaf">Deaf</option> 
	                </select>
			    </div>
		    </div>
            <!-- Fifth Row ends -->
            <!-- sixth Row starts-->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Drinks<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="drink">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Smoke<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="smoke">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="No">No</option>
	                    <option value="Yes">Yes</option> 
	               		<option value="Sometimes">Sometimes</option>
	                </select>
			    </div>
		    </div>
		    
		    <div class="form-group col-sm-4">
		      <label for="edit-name">Mother Tounge<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="mothertounge">
	                    <option value="Sinhala">Sinhala</option>
	                    <option value="Tamil">Tamil</option> 
	               		<option value="English">English</option> 
	               		<option value="Hindi">Hindi</option> 
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Skin Colour<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="colour">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="Dark">Dark</option>
	                    <option value="Fair">Fair</option> 
	               		<option value="Normal">Normal</option> 
	                </select>
			    </div>
		    </div>

		    <!-- sixth Row ends-->
		    <!-- Seventh Row starts-->
		    <div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" placeholder="In centimeters"  name="height" value="" size="60" maxlength="60"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-text">
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" placeholder="In kilograms" name="weight" value="" size="60" maxlength="6"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-text">
		    </div>
		   	
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Diet<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="diet">
	                	<option value="Not Defined">Not Defined</option>
	                    <option value="Veg">Veg</option>
	                    <option value="Non Veg">Non Veg</option> 
	               		
	                </select>
			    </div>
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" placeholder="In Sri Lankan Rupees" name="income" value=""  oninput="this.value=this.value.replace(/[^0-9]/g,'');" size="60" maxlength="7" class="form-text">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-name">Occupation <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>

			</div>


             <!-- Seventh Row ends-->

             <!-- eighth Row starts-->
           <div class="col-lg-12">
            <div class="form-group col-sm-4">
		    		<label for="edit-name">Occupation Description<span class="form-required" title="This field is required."></span></label>
			  		<input type="text" id="edit-name" name="occupationdescr" value="" size="130" maxlength="500" class="form-text">
		   </div>
           <div class="form-group col-sm-4">
		      <label for="edit-name">Contact No <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="contactNo" value="" size="60" maxlength="500"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-text" required>
		    </div>
		   
		   <div class="form-group col-sm-4">
		    		<label for="edit-name">National Identity Card No <span class="form-required" title="This field is required."></span></label>
			  		<input type="text" id="edit-name" name="identityCardNo" value="" size="30" maxlength="500" class="form-text" required>
		   </div>
		    
			</div>
             <!-- eighth Row ends-->
  
           <!-- nineth Row starts-->
           <div class="col-lg-12">
            
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
			  </div>
             <!-- nineth Row ends-->
         <hr/>
			  

		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	