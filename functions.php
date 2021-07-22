<?php
function mysqlexec($sql){
	$host="localhost:3308"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="matromani"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		echo mysqli_error($conn);
	}


}
function searchid(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$profid=$_POST['profid'];
		$sql="SELECT * FROM customer WHERE id=$profid";
		$result = mysqlexec($sql);
    	return $result;
	}
}

function search(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
   // echo "<script> window.location=\"searchresults.php?result=$result\"</script>";
    return $result;

  }
}

/* search original code
	function search(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $agemin=$_POST['agemin'];
    $agemax=$_POST['agemax'];
    $maritalstatus=$_POST['maritalstatus'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $religion=$_POST['religion'];
    $mothertounge=$_POST['mothertounge'];
    $sex = $_POST['sex'];

    $sql="SELECT * FROM customer WHERE 
    sex='$sex' 
    AND age>='$agemin'
    AND age<='$agemax'
    AND maritalstatus = '$maritalstatus'
    /*AND country = '$country'
    AND state = '$state'
    AND religion = '$religion'
    AND mothertounge = '$mothertounge'
    ";

    $result = mysqlexec($sql);
    return $result;

  }
}
*/
function writepartnerprefs($id){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$agemin=$_POST['agemin'];
		$agemax=$_POST['agemax'];
		$maritalstatus=$_POST['maritalstatus'];
		$complexion=$_POST['colour'];
		$height=$_POST['height'];
		$diet=$_POST['diet'];
		$religion=$_POST['religion'];
		$mothertounge=$_POST['mothertounge'];
		$education=$_POST['education'];
		$occupation=$_POST['occupation'];
		$country=$_POST['country'];
		$descr=$_POST['descr'];

		$sql = "UPDATE
				   partnerprefs 
				SET
				   agemin = '$agemin',
				   agemax='$agemax',
				   maritalstatus = '$maritalstatus',
				   complexion = '$complexion',
				   height = '$height',
				   diet = '$diet',
				   religion='$religion',
				   mothertounge = '$mothertounge',
				   education='$education',
				   descr = '$descr',
				   occupation = '$occupation',
				   country = '$country' 
				WHERE
				   custId = '$id'";

		$result = mysqlexec($sql);
		if ($result) {;

			echo "<script> window.location=\"userhome.php?id=$idupGBdetsucss&mes=partnrsucss\"</script>";
		}
		else{
			echo "Error";
		}

	}
}



function register(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$uname=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	
	require_once("includes/dbconn.php");

	$sql1 = "select * from users where username= '$uname'";
				$result = mysqli_query($conn, $sql1);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck >0) {
					echo "<script> window.location=\"register.php?mes=exist\"</script>";
				}
				else{
					$sql = "INSERT INTO users ( profilestat, username, password, email, userlevel) 
			VALUES
			   (0, '$uname', '$pass', '$email', 0)";

			$result = mysqlexec($sql);
				if ($result) {
					echo "<script> window.location=\"login.php?mes=regsuccess\"</script>";

				}
				else{
					echo "Error";
				}
				}

}
}

function isloggedin(){
	if(!isset($_SESSION['id'])){
	 	return false;
	}
	else{
		return true;
	}

}


function processprofile_form($id){
   
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	$dob=$year ."-" . $month . "-" .$day ;
	
	$religion=$_POST['religion'];
	//$caste = $_POST['caste'];
	//$subcaste=$_POST['subcaste'];
	
	$country = $_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$age=$_POST['age'];
	$maritalstatus=$_POST['maritalstatus'];
	$profileby=$_POST['profileby'];
	$education=$_POST['education'];
	$edudescr=$_POST['edudescr'];
	$bodytype=$_POST['bodytype'];
	$physicalstatus=$_POST['physicalstatus'];
	//$drink=$_POST['drink'];
	//$smoke=$_POST['smoke'];
	$mothertounge=$_POST['mothertounge'];
	//$bloodgroup=$_POST['bloodgroup'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$colour=$_POST['colour'];
	$diet=$_POST['diet'];
	$occupation=$_POST['occupation'];
	$occupationdescr=$_POST['occupationdescr'];
	//$fatheroccupation=$_POST['fatheroccupation'];
	//$motheroccupation=$_POST['motheroccupation'];
	//$income=$_POST['income'];
	//$bros=$_POST['bros'];
	//$sis=$_POST['sis'];
	$aboutme=$_POST['aboutme'];
	$contactNo=$_POST['contactNo'];
	$identityCardNo=$_POST['identityCardNo'];

	

	


	require_once("includes/dbconn.php");
	 $sql="SELECT cust_id FROM customer WHERE cust_id=$id";
	$result=mysqlexec($sql);
/*
if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			customer j
		SET
		   email = '$email',
		   age = '$age',
		   sex = '$sex',
		   religion = '$religion',
		   caste = '$caste',
		   subcaste = '$subcaste',
		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritalstatus = '$maritalstatus',
		   profilecreatedby = '$profileby',
		   education  = '$education',
		   education_sub = '$edudescr',
		   firstname = '$fname',
		   lastname = '$lname',
		   body_type = '$bodytype',
		   physical_status = '$physicalstatus',
		   drink =  '$drink',
		   mothertounge = '$mothertounge',
		   colour = '$colour',
		   weight = '$weight',
		   smoke = '$smoke',
		   dateofbirth = '$dob', 
		   occupation = '$occupation', 
		   occupation_descr = '$occupationdescr', 
		   annual_income = '$income', 
		   fathers_occupation = '$fatheroccupation',
		   mothers_occupation = '$motheroccupation',
		   no_bro = '$bros', 
		   no_sis = '$sis', 
		   aboutme = '$aboutme'
		WHERE cust_id=$id; "
		   ;
   $result=mysqlexec($sql);
   if ($result) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"userhome.php?id=$id\"</script>";
   }
}else{ */

	//Insert the data
	require_once("includes/dbconn.php");
	$sql = "INSERT 
				INTO
				   customer
				   (cust_id, email, age, sex, religion, district, state, country, maritalstatus, profilecreatedby, education, education_sub, firstname, lastname, body_type, physical_status, mothertounge, colour, weight, height, diet,   dateofbirth, occupation, occupation_descr, aboutme, contact, Identity_card_no, profilecreationdate) 
				VALUES
				   ('$id','$email', '$age', '$sex', '$religion',  '$district', '$state', '$country', '$maritalstatus', '$profileby', '$education', '$edudescr', '$fname', '$lname', '$bodytype', '$physicalstatus', '$mothertounge', '$colour', '$weight', '$height',  '$diet', '$dob', '$occupation', '$occupationdescr',   '$aboutme', $contactNo, '$identityCardNo', CURDATE())
			";
	if (mysqli_query($conn,$sql)) {
	  echo "<script> window.location=\"photouploader.php?id={$id}\"</script>";
	  
	  //creating a slot for partner prefernce table for prefs details with cust id
	  $sql3="UPDATE users SET profilestat=1 WHERE id=$id";
	  mysqli_query($conn,$sql3);
	  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id')";
	  mysqli_query($conn,$sql2);
	  
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
//}

	 
}

//function update bride/groom details
function processprofileupdate_form($id){
   
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	$dob=$year ."-" . $month . "-" .$day ;
	
	$religion=$_POST['religion'];
	$caste = $_POST['caste'];
	//$subcaste=$_POST['subcaste'];
	
	$country = $_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$age=$_POST['age'];
	$maritalstatus=$_POST['maritalstatus'];
	$profileby=$_POST['profileby'];
	$education=$_POST['education'];
	$edudescr=$_POST['edudescr'];
	$bodytype=$_POST['bodytype'];
	$physicalstatus=$_POST['physicalstatus'];
	$drink=$_POST['drink'];
	$smoke=$_POST['smoke'];
	$mothertounge=$_POST['mothertounge'];
	//$bloodgroup=$_POST['bloodgroup'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$colour=$_POST['colour'];
	$diet=$_POST['diet'];
	$occupation=$_POST['occupation'];
	$occupationdescr=$_POST['occupationdescr'];
	//$fatheroccupation=$_POST['fatheroccupation'];
	//$motheroccupation=$_POST['motheroccupation'];
	$income=$_POST['income'];
	//$bros=$_POST['bros'];
	//$sis=$_POST['sis'];
	$aboutme=$_POST['aboutme'];
	$contactNo=$_POST['contactNo'];
	$identityCardNo=$_POST['identityCardNo'];


	require_once("includes/dbconn.php");
	 $sql="SELECT cust_id FROM customer WHERE cust_id=$id";
	$result=mysqlexec($sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			customer 
		SET
		   email = '$email',
		   age = '$age',
		   sex = '$sex',
		   religion = '$religion',
		   caste = '$caste',
		  
		   
		   diet = '$diet',
		   height = '$height',			

		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritalstatus = '$maritalstatus',
		   profilecreatedby = '$profileby',
		   education  = '$education',
		   education_sub = '$edudescr',
		   firstname = '$fname',
		   lastname = '$lname',
		   body_type = '$bodytype',
		   physical_status = '$physicalstatus',
		   drink =  '$drink',
		   mothertounge = '$mothertounge',
		   colour = '$colour',
		   weight = '$weight',
		   smoke = '$smoke',
		   dateofbirth = '$dob', 
		   occupation = '$occupation', 
		   occupation_descr = '$occupationdescr', 
		   annual_income = '$income', 
		   
		   aboutme = '$aboutme', 
		   contact  = '$contactNo', 
		   Identity_card_no = '$identityCardNo'
		WHERE cust_id=$id; "
		   ;
	  	 $result=mysqlexec($sql);
	   	if ($result) {
	   		echo "<script> window.location=\"userhome.php?id=$id&mes=upGBdetsucss\"</script>";
		}else {
		  	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}

//function update bride/groom details
function processprofiledetailsupdate_form($id){
   
	$usernamee=$_POST['usernamee'];
	$passwordd=$_POST['passwordd'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	$dob=$year ."-" . $month . "-" .$day ;
	
	


	require_once("includes/dbconn.php");
	 $sql="SELECT cust_id FROM customer WHERE cust_id=$id";
	$result=mysqlexec($sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			users 
		SET
		   email = '$email',
		   username = '$usernamee',
		   gender = '$sex',
		   password = '$passwordd',
		   dateofbirth = '$dob'
		WHERE id=$id; "
		   ;
	  	 $result=mysqlexec($sql);
	   	if ($result) {
	   		
	   		echo "<script> window.location=\"userhome.php?id=$id&mes=upprofsucss\"</script>";
		}else {
		  	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}




//function for upload photo

function uploadphoto($id){
	$target = "profile/". $id ."/";
	$maxDim = 400;
	if (!file_exists($target)) {
	    mkdir($target, 0777, true);
	}
	//specifying target for each file
	$target1 = $target ."one". basename( $_FILES['pic1']['name']);
	$target2 = $target ."two". basename( $_FILES['pic2']['name']);
	$target3 = $target ."three". basename( $_FILES['pic3']['name']);
	$target4 = $target ."four". basename( $_FILES['pic4']['name']);
	$target5 = $target ."front". basename( $_FILES['idFront']['name']);
	$target6 = $target ."back". basename( $_FILES['idBack']['name']);

	// This gets all the other information from the form
	$pic10=($_FILES['pic1']['tmp_name']);
	$pic20=($_FILES['pic2']['tmp_name']);
	$pic30=($_FILES['pic3']['tmp_name']);
	$pic40=($_FILES['pic4']['tmp_name']);
	$idFront10=($_FILES['idFront']['tmp_name']);
	$idBack20=($_FILES['idBack']['tmp_name']);

	// This gets all the other information from the form
	$pic1="one".($_FILES['pic1']['name']);
	$pic2="two".($_FILES['pic2']['name']);
	$pic3="three".($_FILES['pic3']['name']);
	$pic4="four".($_FILES['pic4']['name']);
	$idFront="front".($_FILES['idFront']['name']);
	$idBack="back".($_FILES['idBack']['name']);



	$sql="SELECT id FROM photos WHERE cust_id = '$id'";
	$result = mysqlexec($sql);

	//code part to check weather a photo already exists
	if(mysqli_num_rows($result) == 0) {
	     // no photo for curret user, do stuff...
			$sql="INSERT INTO photos (id, cust_id, pic1, pic2, pic3, pic4, id_card_front, id_card_back) VALUES ('', '$id', '$pic1' ,'$pic2', '$pic3','$pic4','$idFront','$idBack')";
			// Writes the information to the database
			mysqlexec($sql);
			$sql5="UPDATE users SET photoStatus=1 WHERE id=$id";
		  	mysqlexec($sql5);
			
	} else {
	    // There is a photo for customer so up
	     $sql="UPDATE photos SET pic1 = '$pic1', pic2 = '$pic2', pic3 = '$pic3', pic4 = '$pic4' , id_card_front= '$idFront', id_card_back= '$idBack' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sql);
	}

	//new resize part

		//picture one
		list($width, $height, $type, $attr) = getimagesize( $pic10 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic10;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic10 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $pic10 );
		  		move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);
			
		    }else{
				move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);				
		    }

		//picture two
		list($width, $height, $type, $attr) = getimagesize( $pic20 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic20;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic20 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $pic20 );
		  		move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);
			
		    }else{
				move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);				
		    }

		    //picture three
		list($width, $height, $type, $attr) = getimagesize( $pic30 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic30;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic30 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $pic30 );
		  		move_uploaded_file($_FILES['pic3']['tmp_name'], $target3);
			
		    }else{
				move_uploaded_file($_FILES['pic3']['tmp_name'], $target3);				
		    }

		    //picture four
		list($width, $height, $type, $attr) = getimagesize( $pic40 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic40;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic40 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $pic40 );
		  		move_uploaded_file($_FILES['pic4']['tmp_name'], $target4);
			
		    }else{
				move_uploaded_file($_FILES['pic4']['tmp_name'], $target4);				
		    }

		    //picture idfront
		list($width, $height, $type, $attr) = getimagesize( $idFront10 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $idFront10;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $idFront10 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $idFront10 );
		  		move_uploaded_file($_FILES['idFront']['tmp_name'], $target5);
			
		    }else{
				move_uploaded_file($_FILES['idFront']['tmp_name'], $target5);				
		    }

		    //picture id back
		list($width, $height, $type, $attr) = getimagesize( $idBack20 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $idBack20;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $idBack20 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    imagepng( $dst, $idBack20 );
		  		move_uploaded_file($_FILES['idBack']['tmp_name'], $target6);
			
		    }else{
				move_uploaded_file($_FILES['idBack']['tmp_name'], $target6);				
		    }

	


	// Tells you if its all ok
		echo "The files has been uploaded, and your information has been added to the directory";
		echo "<script> window.location=\"userhome.php?id=$id\"</script>";
	

}//end uploadphoto function


function updatephoto($id){
	$target = "profile/". $id ."/";
	$maxDim = 400;
	if (!file_exists($target)) {
	    mkdir($target);
	}
	//specifying target for each file
	$target1 = $target ."one". basename( $_FILES['pic1']['name']);
	$target2 = $target ."two". basename( $_FILES['pic2']['name']);
	$target3 = $target ."three". basename( $_FILES['pic3']['name']);
	$target4 = $target ."four". basename( $_FILES['pic4']['name']);

	//getting the current image details
	$a=$_POST['a'];
	$apath= "profile/".$id."/".$a;
	$b=$_POST['b'];
	$bpath= "profile/".$id."/".$b;
	$c=$_POST['c'];
	$cpath= "profile/".$id."/".$c;
	$d=$_POST['d'];
	$dpath= "profile/".$id."/".$d;

	// This gets all the other information from the form
	$pic1="one".($_FILES['pic1']['name']);
	$pic2="two".($_FILES['pic2']['name']);
	$pic3="three".($_FILES['pic3']['name']);
	$pic4="four".($_FILES['pic4']['name']);

	// getting image data
	$pic10=($_FILES['pic1']['tmp_name']);
	$pic20=($_FILES['pic2']['tmp_name']);
	$pic30=($_FILES['pic3']['tmp_name']);
	$pic40=($_FILES['pic4']['tmp_name']);

	$sql="SELECT id FROM photos WHERE cust_id = '$id'";
	$result = mysqlexec($sql);

	//uploading the new images
	if ($_FILES['pic1']['name'] != "") {
		$sqlpic1="UPDATE photos SET pic1 = '$pic1' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic1);

		list($width, $height, $type, $attr) = getimagesize( $pic10 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic10;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic10 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic10 );
		    unlink($apath);
		   	move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);
			
			echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }else{
		    	unlink($apath);
				move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }


	}

	if ($_FILES['pic2']['name']!= "") {
		$sqlpic2="UPDATE photos SET pic2 = '$pic2' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic2);

		list($width, $height, $type, $attr) = getimagesize( $pic20 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic20;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic20 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic20 );
		    	unlink($bpath);
		   		move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }else{
		    	unlink($bpath);
				move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }

	}

	if ($_FILES['pic3']['name'] != "") {
		$sqlpic3="UPDATE photos SET pic3 = '$pic3' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic3);

		list($width, $height, $type, $attr) = getimagesize( $pic30 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic30;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic30 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic30 );
		    	unlink($cpath);
		   		move_uploaded_file($_FILES['pic3']['tmp_name'], $target3);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }else{
		    	unlink($cpath);
				move_uploaded_file($_FILES['pic3']['tmp_name'], $target3);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }

	}

	if ($_FILES['pic4']['name'] != "") {
		$sqlpic4="UPDATE photos SET pic4 = '$pic4' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic4);

		list($width, $height, $type, $attr) = getimagesize( $pic40 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic40;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic40 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic40 );
		    	unlink($dpath);
		   		move_uploaded_file($_FILES['pic4']['tmp_name'], $target4);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }else{
		    	unlink($dpath);
				move_uploaded_file($_FILES['pic4']['tmp_name'], $target4);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upimgsucss\"</script>";
		    }

	}
	
	   		
/*
	$sql="SELECT id FROM photos WHERE cust_id = '$id'";
	$result = mysqlexec($sql);

	//code part to check weather a photo already exists
	if(mysqli_num_rows($result) == 0) {
	     // no photo for curret user, do stuff...
			$sql="INSERT INTO photos (id, cust_id, pic1, pic2, pic3, pic4) VALUES ('', '$id', '$pic1' ,'$pic2', '$pic3','$pic4')";
			// Writes the information to the database
			mysqlexec($sql);
			$sql5="UPDATE users SET photoStatus=1 WHERE id=$id";
		  	mysqlexec($sql5);
			
	} else {
	    // There is a photo for customer so up
	     $sql="UPDATE photos SET pic1 = '$pic1', pic2 = '$pic2', pic3 = '$pic3', pic4 = '$pic4' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sql);
	}

	// Writes the photo to the server
	if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['pic2']['tmp_name'], $target2)&&move_uploaded_file($_FILES['pic3']['tmp_name'], $target3)&&move_uploaded_file($_FILES['pic4']['tmp_name'], $target4))
	{

	// Tells you if its all ok
		echo "The files has been uploaded, and your information has been added to the directory";
		echo "<script> window.location=\"userhome.php?id=$id\"</script>";
	}
	else {
	// Gives and error if its not
		echo "<p style='font-size: 18;color: red;background-color: orange'>Sorry, there was a problem uploading your file</p>";
	}
*/
}//end update photo function

function updateIdPhoto($id){
	$target = "profile/". $id ."/";

	$maxDim = 400;
	if (!file_exists($target)) {
	    mkdir($target, 0777, true);
	}
	//specifying target for each file
	$target1 = $target ."front". basename( $_FILES['pic1']['name']);
	$target2 = $target ."back". basename( $_FILES['pic2']['name']);
	

	//getting the current image details
	$a=$_POST['a'];
	$apath= "profile/".$id."/".$a;
	$b=$_POST['b'];
	$bpath= "profile/".$id."/".$b;
	

	// This gets all the other information from the form
	$pic10=($_FILES['pic1']['tmp_name']);
	$pic20=($_FILES['pic2']['tmp_name']);

	$sql="SELECT id FROM photos WHERE cust_id = '$id'";
	$result = mysqlexec($sql);

		// This gets all the other information from the form
	$pic1="front".($_FILES['pic1']['name']);
	$pic2="back".($_FILES['pic2']['name']);

	//uploading the new image
	if ($_FILES['pic1']['name'] != "") {
		$sqlpic1="UPDATE photos SET id_card_front = '$pic1' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic1);

		list($width, $height, $type, $attr) = getimagesize( $pic10 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic10;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic10 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic10 );
		   		unlink($apath);
				move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upidsucss\"</script>";
		    }else{
		    	unlink($apath);
				move_uploaded_file($_FILES['pic1']['tmp_name'], $target1);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upidsucss\"</script>";
		    }

	}else{
		alert("ane mata be");
	}

	if ($_FILES['pic2']['name']!= "") {
		$sqlpic2="UPDATE photos SET id_card_back = '$pic2' WHERE cust_id=$id";
			// Writes the information to the database
		mysqlexec($sqlpic2);

		list($width, $height, $type, $attr) = getimagesize( $pic20 );
		if ( $width > $maxDim || $height > $maxDim ) {
			
		    $target_filename = $pic20;
		    $ratio = $width/$height;
		    if( $ratio > 1) {
		        $new_width = $maxDim;
		        $new_height = $maxDim/$ratio;
		    } else {
		        $new_width = $maxDim*$ratio;
		        $new_height = $maxDim;
		    }
		    $src = imagecreatefromstring( file_get_contents( $pic20 ) );
		    $dst = imagecreatetruecolor( $new_width, $new_height );
		    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
		    
		    imagepng( $dst, $pic20 );
		    	unlink($bpath);
		   		move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upidsucss\"</script>";
		    }else{
		    	unlink($bpath);
				move_uploaded_file($_FILES['pic2']['tmp_name'], $target2);
				
				echo "<script> window.location=\"userhome.php?id=$id&mes=upidsucss\"</script>";
		    }

	}

	
	
	
}//end update photo function

?>