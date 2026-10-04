<?php
// OpenShift MySQL Service / Pod Name එක
$servername = "mysql-db"; 

$username = "mdtunwgo_dbuser";
$password = "LsHnaTiuBg2Ih1A&";
$dbname = "mdtunwgo_mdtu";

// Variable එක $con ලෙස සාදන්න
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Database Connection Failed: " . $con->connect_error);
}

// compatibility එක සඳහා $conn එකටද assign කරමු
$conn = $con;

$con->set_charset("utf8");
?>
