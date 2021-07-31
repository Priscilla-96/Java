<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqlexec($sql);
		if($result){
			$row=mysqli_fetch_assoc($result);
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$complexion=$row['complexion'];
			$height=$row['height'];
			$diet=$row['diet'];
			$religion=$row['religion'];
			$caste=$row['caste'];
			$sub_caste=$row['subcaste'];
			$mother_tounge=$row['mothertounge'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$country=$row['country'];
			$descr=$row['descr'];
			
		}
		else{
			echo mysqli_error($conn);
		}



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Partner Prefs</title>
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
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <a href="userhome.php?id=<?php echo $id ?>"><span style="color: black;">Back</span></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Partner Prefernce</li>
     </ul>
   </div>
   <div class="profile fadeInUp animated">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    	<p><textarea style="width: 100%;" name="descr" rows="5" required><?php echo $descr;?></textarea></p>
				    </div>

			<!-- new code start -->
			<div class="row">
			<div class="form-group col-sm-4">
		      <label for="edit-pass">Age Limit<span class="form-required" title="This field is required.">*</span></label>		      
		    </div>
			<div class="form-group col-sm-4">
		      <label for="edit-pass">Min <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="agemin" size="60" value="<?php echo $agemin; ?>" maxlength="128" class="form-text required" required>
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="edit-pass">Max <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-last" name="agemax" size="60" value="<?php echo $agemax; ?>" maxlength="128" class="form-text required" required>
		    </div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Marital Status : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="maritalstatus" required> 
				                    <option value="<?php echo $religion; ?>"><?php echo $marital_status; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Single">Single</option>
				                    <option value="Married">Married</option>
				                    <option value="Divorsed">Divorsed</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Complexion : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="colour" required> 
				                    <option value="<?php echo $complexion; ?>"><?php echo $complexion; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Black">Black</option>
				                    <option value="Fair">Fair</option>
				                    <option value="Normal">Normal</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
			<div class="form-group col-sm-4">
		      <label for="edit-pass">Height :<span class="form-required" title="This field is required.">*</span></label>		      
		    </div>
			<div class="form-group col-sm-8">
		      <input type="text" id="edit-last" name="height" size="60" value="<?php echo $height; ?>" maxlength="128" class="form-text required" required>
		    </div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Diet : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="diet" required> 
				                    <option value="<?php echo $diet; ?>"><?php echo $diet; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Veg">Veg</option>
				                    <option value="Non Veg">Non Veg</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Religion : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="religion" required> 
				                    <option value="<?php echo $religion; ?>"><?php echo $religion; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Hindu">Hindu</option>
				                    <option value="Christian">Christian</option>
				                    <option value="Muslim">Muslim</option>
				                    <option value="Malay">Malay</option>
				                    <option value="Buddhism">Buddhism</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Mother Tongue : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="mothertounge" required> 
				                    <option value="<?php echo $mother_tounge; ?>"><?php echo $mother_tounge; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Tamil">Tamil</option>
				                    <option value="Sinhala">Sinhala</option>
				                    <option value="English">English</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Education : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="education" required> 
				                    <option value="<?php echo $education; ?>"><?php echo $education; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="Primary">Primary</option>
				                    <option value="Ordinary level">Ordinary level</option>
				                    <option value="Advance Level">Advance Level</option>
				                    <option value="Degree">Degree</option>
				                    <option value="Diploma">Diploma</option>
				                    <option value="Doctorate">Doctorate</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <div class="row">
			<div class="form-group col-sm-4">
		      <label for="edit-pass">Occupation :<span class="form-required" title="This field is required.">*</span></label>		      
		    </div>
			<div class="form-group col-sm-8">
		      <input type="text" id="edit-last" name="occupation" size="60" value="<?php echo $occupation; ?>" maxlength="128" class="form-text required" required>
		    </div>
		    </div>

		    <div class="row">
		    	<div class="col-sm-4">
		    		<label for="edit-pass">Country of Residence : <span class="form-required" title="This field is required.">*</span></label>
		    	</div>
		    	<div class="form-group col-sm-8">
		      		<div class="age_select">
			      	
				        <div class="age_grid">
					        <div class="col-sm-12 form_box">
			                	<div class="select-block1">
			                    <select name="country" required> 
				                    <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
				                    <option value="Not Applicable">Not Applicable</option>
				                    <option value="India">India</option>
				                    <option value="Srilanka">Srilanka</option>
				                    <option value="UAE">UAE</option>
				                </select>
	                  			</div>
	                  		</div>
	                  	</div>
	              	</div>
		    	</div>
		    </div>

		    <!-- new code end -->

				    
				  
				  </div>
				 <input type="submit" class="btn_1 submit" value="Update Preferences">
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>
