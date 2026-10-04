<?Php

	include "db.php"; // call the database connection

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];

	$sql="SELECT * FROM cp_atp where atp_requestDate>'$d' AND atp_isinatp='Yes' order by atp_requestDate ASC";
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
<form name="frm" method="post" enctype="multipart/form-data" action="addtoatp.php">
<table width="100%" border="1" class="zebra">
  <tr>
    <th width="7%">අනු අංකය</th>
    <th >ඉල්ලුම් කල දිනය</th>
    <th >පුහුණු වැඩ සටහන</th>
    <th >ඉලක්කගත කණ්ඩායම</th>
    <th >සහභාගී වන්නන් සංඛ්‍යාව</th>
      <th >පුහුණුවේ ආරම්භක දිනය</th>
      <th >පැවැත්වෙන ස්ථානය</th>
  
    <th width="5%">වෙනස් කරන්න</th>
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
?>
  <tr >
    <td><?Php echo $number; ?></td>
    <td><?Php echo $rows["atp_requestDate"]; ?></td>
    <td><?Php echo $rows["atp_trname"]; ?></td>
    <td><?Php echo $rows["atp_targetgroup"]; ?></td>
    <td><?Php echo $rows["atp_noofparticipants"]; ?></td>
    <td><?Php if($rows["atp_day1"]!="1111-11-11"){ echo $rows["atp_day1"]; } else{ echo"තීරණය කර නොමැත";} ?></td>
    <td><?Php echo $rows["atp_location"]; ?></td>

    <td align="center" ><a href="editatpdataview.php?did=<?Php echo $rows["atp_id"]; ?>"><img src="images/edit.png" width="20" height="20" alt="edit" /></a></td>
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
	if($_SESSION['logtype']=="Administrator"  || $_SESSION['logtype']=="Super User"){
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