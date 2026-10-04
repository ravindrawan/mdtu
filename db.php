<?php
// OpenShift MySQL Service / Pod Name එක
$servername = "mysql-db"; 

$username = "mdtunwgo_dbuser";
$password = "LsHnaTiuBg2Ih1A&";
$dbname = "mdtunwgo_mdtu";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Database Connection Failed: " . $con->connect_error);
}

// Variables දෙකම assign කරගනිමු
$conn = $con;

// Collation Mismatch එක විසඳීමට latin1 charset එක සෙට් කරමු
$con->set_charset("latin1");
?>
