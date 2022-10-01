<?php
/* Local Database*/

$servername = "localhost";
$username = "u625980665_store";
$password = "8010840514@sS";
$dbname = "u625980665_store";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 