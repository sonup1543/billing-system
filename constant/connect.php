<?php 
// DB credentials.
$localhost = "localhost";
$username = "u625980665_store";
$password = "8010840514@sS";
$dbname = "u625980665_store";
//$store_url = "http://localhost/phpinventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
?>





