<?Php

	include "db.php"; // call the database connection
	
	$trfield1=trim(htmlspecialchars($_POST["trfield1"]));
	$trfield2=trim(htmlspecialchars($_POST["trfield2"]));
	$trfield3=trim(htmlspecialchars($_POST["trfield3"]));
	$trfield4=trim(htmlspecialchars($_POST["trfield4"]));
	$trfield5=trim(htmlspecialchars($_POST["trfield5"]));

	$name=trim(htmlspecialchars($_POST["resname"]));
	
if($trfield1!="" && $trfield2=="" && $trfield3=="" && $trfield4=="" && $trfield5==""){
		$sql="SELECT * FROM cp_resourcepersons where rp_fld1='$trfield1' order by rp_fld1 ASC";

}
else if($trfield1!="" && $trfield2!="" && $trfield3=="" && $trfield4=="" && $trfield5==""){
		$sql="SELECT * FROM cp_resourcepersons where rp_fld1='$trfield1' AND rp_fld2='$trfield2' order by rp_fld1 ASC";

}
else if($trfield1!="" && $trfield2!="" && $trfield3!="" && $trfield4=="" && $trfield5==""){
		$sql="SELECT * FROM cp_resourcepersons where rp_fld1='$trfield1' AND (rp_fld2='$trfield2' AND rp_fld3='$trfield3') order by rp_fld1 ASC";

}
else if($trfield1!="" && $trfield2!="" && $trfield3!="" && $trfield4!="" && $trfield5==""){
		$sql="SELECT * FROM cp_resourcepersons where (rp_fld1='$trfield1' AND rp_fld2='$trfield2') AND (rp_fld3='$trfield3' AND rp_fld4='$trfield4') order by rp_fld1 ASC";

}
else if($trfield1!="" && $trfield2!="" && $trfield3!="" && $trfield4!="" && $trfield5!=""){
		$sql="SELECT * FROM cp_resourcepersons where ((rp_fld1='$trfield1' AND rp_fld2='$trfield2') AND (rp_fld3='$trfield3' AND rp_fld4='$trfield4')) AND rp_fld5='$trfield5'  order by rp_fld1 ASC";

}
else if($trfield1=="" && $trfield2=="" && $trfield3=="" && $trfield4=="" && $trfield5=="" && $name!=""){
		$sql="SELECT * FROM cp_resourcepersons where rp_name LIKE '%$name%'  order by rp_fld1 ASC";

}

else{
	$sql="SELECT * FROM cp_resourcepersons order by rp_fld1 ASC";
	
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
    <th>අනු අංකය</th>
    <th>ජා.හැ. අංකය</th>

    <th>නම</th>
    <th  >තනතුර</th>
    <th >කාර්යාලය</th>
    <th >ජංගම දුරකතන අංකය</th>
    <th  >ඊමේල් ලිපිනය</th>
    <th  >ප්‍රධාන විෂය ක්ෂේත්‍රය</th>
    
    <th width="5%">&nbsp;</th>
    <th width="5%">&nbsp;</th>
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
?>
  <tr>
    <td><?Php echo $number; ?></td>

    <td><?Php echo $rows["rp_nid"]; ?></td>
    <td><?Php echo $rows["rp_name"]; ?></td>
    <td><?Php echo $rows["rp_desig"]; ?></td>
    <td><?Php echo $rows["rp_office"]; ?></td>

    <td ><?Php echo $rows["rp_mobile"]; ?></td>
    <td><?Php echo $rows["rp_email"]; ?></td>
    <td><?Php echo $rows["rp_fld1"]; ?></td>

    <td align="center"><a href="editrespersons.php?did=<?Php echo $rows["rp_id"]; ?>"><img src="images/edit.png" width="20" height="20" alt="edit" /></a></td>
    <td align="center"><a href="deleteresperson.php?did=<?Php echo $rows["rp_id"]; ?>"><img src="images/delete.png" width="20" height="20" alt="delete" /></a></td>
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
	if($_SESSION['logtype']=="Administrator" || $_SESSION['logtype']=="Super User"){
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