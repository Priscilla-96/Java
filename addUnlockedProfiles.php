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
                
                echo "<script> window.location=\"unlockedprofiles.php?mes=unlckd\"</script>";
            }
            else{
                echo "Error";
            }
    }
}else{
    echo "<script>alert(\"Please Select Profiles\")</script>";
    echo "<script> window.location=\"unlockedprofiles.php\"</script>";
                
}


?>
