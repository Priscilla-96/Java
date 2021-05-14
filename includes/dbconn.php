
<?php 
$server = '127.0.0.1';
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="matromani"; // Database name 

// Connect to server and select databse.
 //$conn=mysqli_connect("$host", "$username", "$password"); //or die("cannot connect");

//mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$conn = mysqli_connect($host, $username, " ", $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; 
?>