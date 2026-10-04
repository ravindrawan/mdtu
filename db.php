<?php
// OpenShift MySQL Service / Pod Name එක
$servername = "mysql-db"; 

$username = "mdtunwgo_dbuser";
$password = "LsHnaTiuBg2Ih1A&";
$dbname = "mdtunwgo_mdtu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
	$conn->set_charset("utf8");
?>
