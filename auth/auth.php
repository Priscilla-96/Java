<?php
session_start();
require_once("../includes/dbconn.php");
$userlevel=$_GET['user'];
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' AND password='$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $myusername;
	$_SESSION['id']=$id;
	//if($userlevel=='1')

	//checking if user has entered profile details
	$sql1 = "select * from users where id= '$id'";
		$result = mysqli_query($conn, $sql1);

			if($result){
				$row=mysqli_fetch_assoc($result);
				$status=$row['profilestat'];
				if ($status==1 ) {
					//checking if user has uploaded images
					$sql2 = "select * from users where id= '$id'";
					$result2 = mysqli_query($conn, $sql2);

						if($result2){
							$row=mysqli_fetch_assoc($result2);
							$uplded=$row['photoStatus'];
							if ($uplded==1 ) {
								header("location:../userhome.php?id={$row['id']}");
							}else{
								header("location:../photouploader.php?id={$row['id']}&mes=next");
							}
							
						}//end cheking for images	
					
				}else{
					header("location:../create_profile.php?id={$row['id']}&mes=next");
				}
				
			}	

		
	//else
	//	header("location:../admin.php");
}
else {
echo "Wrong Username or Password";
header('Location: ../login.php?mes=err');
}
?>