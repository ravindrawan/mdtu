<?Php
		$logid=$_SESSION['logid'];
		$office=$_SESSION['offid'];
		$un=$_SESSION['un'];
		$pwd=$_SESSION['pwd'];
		$ut=$_SESSION['logtype'];


	include "db.php"; // call the database connection

	$y=trim(htmlspecialchars($_POST["year"]));
	$tr=trim(htmlspecialchars($_POST["tr"]));

if($ut!="Administrator" && $y=="" && $tr==""){
	$sql="SELECT * FROM cp_trrequirements where req_addoffice='$office' order by req_training ASC";
}
else if($ut!="Administrator" && $y!=""  && $tr==""){
	$sql="SELECT * FROM cp_trrequirements where (req_addoffice='$office' AND req_adddate LIKE '%$y%') order by req_training ASC";
}
else if($ut!="Administrator" && $y==""  && $tr!=""){
	$sql="SELECT * FROM cp_trrequirements where (req_addoffice='$office' AND req_training='$tr') order by req_training ASC";
}
else if($ut!="Administrator" && $y!=""  && $tr!=""){
	$sql="SELECT * FROM cp_trrequirements where (req_addoffice='$office' AND req_adddate LIKE '%$y%') AND req_training='$tr'  order by req_training ASC";
}

else{
	$sql="SELECT * FROM cp_trrequirements order by req_training ASC";
	
}
$rs=mysqli_query($con,$sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/tabls.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<a href="excelfile_treqs.php?y="<?Php echo $y."|".$tr; ?>">Excel</a>

<table width="100%" border="1" class="zebra">
  <tr>
    <th >අනු අංකය</th>
    <th>දිනය</th>
    <th >කාර්යාලය</th>
    <th >තනතුරු නාමය</th>
    <th >පුහුණු අවශ්‍යතාවය</th>
    <th >වෙනත් කරුණු</th>

  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
?>
  <tr>
    <td><?Php echo $number; ?></td>
    <td style="font-family:Tahoma, Geneva, sans-serif"><?Php echo $rows["req_adddate"]; ?></td>
    <td><?Php echo $rows["req_addoffice"]; ?></td>
    <td><?Php echo $rows["req_post"]; ?></td>
    <td><?Php echo $rows["req_training"]; ?></td>
    <td><?Php echo $rows["req_comments"]; ?></td>

  </tr>

<?Php
	$number=$number+1;
			}
		}
		else{
?>
  <tr>
    <td colspan="8" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
  </tr>
<?Php
		}
		$con->close();
?>
</table>
    	<table width="100%"><tr><td width="80%"></td><td style="padding-left:5px;background-color:#000;font-size:16px" align="center" id="menulink" height="25px" width="20%">    <?Php
	if($_SESSION['logtype']=="Administrator"){
	?>
    <a href="control.php">පාලන පුවරුව</a>
    <?Php
	}
	else{
	?>
    <a href="usercontrolpanel.php">පාලන පුවරුව</a>
	<?Php
	}
	?>    
</td></tr></table>

</body>
</html>