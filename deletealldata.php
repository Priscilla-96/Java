<?php
  echo "<script>
  window.history.forward();
  function noback(){
     window.history.forward();
  }
</script>";
?>
<?php include_once("includes/dbconn.php");?>
<?php

if(isset($_GET["delete"]))
{

  $userid = $_GET['del'];

  //delete image folder
  if (is_dir("profile/".$userid)){
             $dir_handle = opendir("profile/".$userid);
       if (!$dir_handle)
            return false;
       while($file = readdir($dir_handle)) {
             if ($file != "." && $file != "..") {
                  if (!is_dir("profile/".$userid."/".$file))
                       unlink("profile/".$userid."/".$file);
                  else
                       delete_directory($userid.'/'.$file);
             }
       }
       closedir($dir_handle);
       rmdir("profile/".$userid);
       echo "images deleted successfully";echo "<br>";
  }
  else{
    echo "Error deleting images";echo "<br>";
  
  }

  // sql to delete partner prefs
  $sql = "DELETE FROM partnerprefs WHERE custId=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "partner prefs deleted successfully";echo "<br>";
  
  } else {
    echo "Error deleting partner prefs : " . $conn->error;echo "<br>";
  
  }

    // sql to delete photo
  $sql = "DELETE FROM photos WHERE cust_id=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "photo details deleted successfully";echo "<br>";
  
  } else {
    echo "Error deleting photo details: " . $conn->error;echo "<br>";
  
  }

   

    // sql to delete unlocked profiles my data 
  $sql = "DELETE FROM unlocked_profiles WHERE cust_id=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "unlocked profiles deleted successfully";echo "<br>";
  
  } else {
    echo "Error deleting unlocked profiles: " . $conn->error;echo "<br>";
  
  }

    // sql to delete unlocked profiles all data 
  $sql = "DELETE FROM unlocked_profiles WHERE   unlckd_pro_id=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "unlocked profiles all deleted successfully";echo "<br>";
  
  } else {
    echo "Error deleting unlocked profiles all: " . $conn->error;echo "<br>";
  
  }
   // sql to delete customer 
  $sql = "DELETE FROM customer WHERE cust_id=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "customer deleted successfully";
  } else {
    echo "Error deleting customer: " . $conn->error;
  }

  // sql to delete user 
  $sql = "DELETE FROM users WHERE id=$userid";

  if ($conn->query($sql) === TRUE) {
    echo "user deleted successfully";
  } else {
    echo "Error deleting user: " . $conn->error;
  }
  echo "<script> window.location=\"login.php\"</script>";


}
echo "<script> window.location=\"login.php\"</script>";



?>