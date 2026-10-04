<?PHP
	session_start(); //To use the SESSION variable

	include "db.php"; // call the database connection
	if($_SESSION['logid']!=""){
		$offid=$_SESSION['offid'];
		$logtype=$_SESSION['logtype'];

	$sql="SELECT * FROM offices WHERE of_name='$offid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);
	?>
    	<table><tr><td align="left">
		<?Php echo "ආයුබෝවන් ".$offid; ?> &nbsp;&nbsp;</td>
        <td align="right"><?Php
		echo ' <a href="logout1.php">Logout</a>&nbsp;&nbsp;'; ?>
        </td></tr>
        </table>
	<?Php
    }
	else{
		echo "Enter Username and Password";
?>
		<meta http-equiv="refresh" content="0; URL=index.php">
<?php		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Transport Authority of Sabaragamuwa Provincial Council</title>
</head>

<body>
</body>
</html>

<?Php

// Logout				
	if(isset($_GET['id']) && $_GET['id']=='logout'){ //if the variable is set and is not NULL and equal to "logout"
		$_SESSION['uname']="";
		session_destroy();
	}
	
?>