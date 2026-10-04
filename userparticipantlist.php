<?Php

	include "db.php"; // call the database connection

			$off=$_SESSION['offid'];
		$logtype=$_SESSION['logtype'];
		
		//echo $off;

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];
	$td=date("Y-m-d");

	$sql="SELECT * FROM cp_trainingattendance where tratt_isparti='Yes' order by tratt_startdate ASC";
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
<form name="frm" method="post" enctype="multipart/form-data" action="addapplicants.php">
<table width="100%" border="1" class="zebra">
  <tr>
    <th width="7%">අනු අංකය</th>
    <th width="19%" >පුහුණු වැඩ සටහන</th>
    <th width="13%" >පුහුණු වැඩ සටහන අාරම්භ වන දිනය</th>
    <th width="14%" >ඉල්ලුම් කල නිලධාරියාගේ ජා.හැ.අ.</th>
    
    <th width="15%" >නිලධාරියාගේ නම</th>
    
    <th width="15%" >තනතුරු නාමය</th>
    <th width="9%" >ජංගම දුරකථන අංකය</th>
    <th width="8%" >වෙනත්</th>

    
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
				$nid=$rows["tratt_empnid"];

	$sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rsstf=mysqli_query($con,$sqlstf);
	$rowsstf=mysqli_fetch_assoc($rsstf);
				if($off==$rowsstf["stf_office"]){
?>
  <tr >
    <td <?Php if($rowsstf["stf_blacklisted"]=="Yes"){ ?> bgcolor="#FF0000" <?Php } ?>><?Php echo $number; ?></td>
    <td align="left"><?Php echo $rows["tratt_atpname"]; ?></td>
    <td align="center"><?Php echo $rows["tratt_startdate"]; ?></td>
    <td align="center"><?Php echo $rows["tratt_empnid"]; ?></td>
    <td align="left" ><?Php echo $rowsstf["stf_Name"]; ?></td>

    <td><?Php echo $rowsstf["stf_desig"]; ?></td>
    <td><?Php echo $rowsstf["stf_mobile"]; ?></td>

    <td align="left"><?Php echo $rows["tratt_comnt"]; ?></td>

  </tr>

<?Php
				}
	$number=$number+1;
			}
		}
		else{
?>
  <tr>
    <td colspan="12" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
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
</form>
</body>
</html>