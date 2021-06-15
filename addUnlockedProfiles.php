<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php
$id=$_SESSION['id'];

if(isloggedin()){} else{
   header("location:login.php");
}
if ($_GET['data'] !="") {
   foreach ($_GET['data'] as $service) {
    $sql = "INSERT INTO unlocked_profiles (cust_id , unlckd_pro_id) VALUES ('$id', '$service')";

        $result = mysqlexec($sql);
            if ($result) {
                echo "<script>alert(\"Profile Details Unlocked\")</script>";
                echo "<script> window.location=\"unlockedprofiles.php\"</script>";
            }
            else{
                echo "Error";
            }
    }
}else{
    echo "<script>alert(\"Please Select Profiles\")</script>";
    echo "<script> window.location=\"unlockedprofiles.php\"</script>";
                
}

    

    //get passed data and filter
    /*$agemin=$_GET['amin'];
    $agemax=$_GET['amax'];
    $maritalstatus=$_GET['maritalstatus'];
    $mothertounge=$_GET['mothertounge'];
    $sex = $_GET['sex'];
    $limit = $_GET['limit'];
    
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
