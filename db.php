<?php
// $servername = "localhost";
// $username = "mdtunwgo_dbuser";
// $password = "LsHnaTiuBg2Ih1A&";
// $dbname = "mdtunwgo_mdtu";

// $con = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($con->connect_error) {
//     die("Connection failed: " . $con->connect_error);
// } 
// $con->set_charset("utf8");

// OpenShift MySQL Service Name එක
$servername = "mysql"; 

// OpenShift MySQL Database එක හදන විට ඔබ ලබා දුන් Credentials
$username = "mdtunwgo_dbuser"; 
$password = "LsHnaTiuBg2Ih1A&"; 
$dbname = "mdtunwgo_mdtu";

// Connection එක සාදා ගැනීම
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection එක පරීක්ෂා කිරීම
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
	$conn->set_charset("utf8");
?>
