<?Php

	include "db.php"; // call the database connection

		$off=$_SESSION['offid'];
		$logtype=$_SESSION['logtype'];
if($logtype=="Administrator"){
	$sql="SELECT * FROM cp_trainingofficers order by tro_office ASC";
}
else{
	$sql="SELECT * FROM cp_trainingofficers where tro_office='$off' order by tro_office ASC";
	
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
<table width="100%" border="1" class="zebra">
  <tr>
    <th width="3%">අනු අංකය</th>
    <th width="8%">ජා.හැ. අංකය</th>

    <th width="13%">නම</th>
    <th width="10%" >තනතුර</th>
    <th width="17%" >කාර්යාලය</th>
    <th width="11%" >ජංගම දුරකතන අංකය</th>
    <th width="13%" >ඊමේල් ලිපිනය</th>
    <th width="5%">ඉවත් කරන්න</th>
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
?>
  <tr>
    <td ><?Php echo $number; ?></td>
    <td><?Php echo $rows["tro_nid"]; ?></td>
    <td><?Php echo $rows["tro_name"]; ?></td>
    <td><?Php echo $rows["tro_desig"]; ?></td>
    <td><?Php echo $rows["tro_office"]; ?></td>

    <td ><?Php echo $rows["tro_mobile"]; ?></td>
    <td><?Php echo $rows["tro_email"]; ?></td>
    <td align="center"><a href="deletetrofficer.php?did=<?Php echo $rows["tro_id"]; ?>"><img src="images/delete.png" width="20" height="20" alt="delete" /></a></td>
  </tr>

<?Php
	$number=$number+1;
			}
		}
		else{
?>
  <tr>
    <td colspan="10" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
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