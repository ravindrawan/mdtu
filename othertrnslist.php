<?Php

	include "db.php"; // call the database connection

	$sql="SELECT * FROM cp_othertrns order by otr_sdate DESC";
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
    <th width="6%">අනු අංකය</th>
    <th >කාර්යාලය/ආයතනය</th>
    <th >පාඨමාලාව</th>
    <th  >ආරම්භ වූ දිනය</th>
    
    <th >වැඩමුළු සංඛ්‍යාව</th>
    <th >මුදල</th>
     <th >වෙනත් විස්තර</th>

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
    <td><?Php echo $rows["otr_office"]; ?></td>
    <td><?Php echo $rows["otr_trns"]; ?></td>
    <td align="center"><?Php echo $rows["otr_sdate"]; ?></td>
    <td><?Php echo $rows["otr_nooftrns"]; ?></td>
    <td><?Php echo $rows["otr_amount"]; ?></td>
    <td><?Php echo $rows["otr_comments"]; ?></td>
    
    <td align="center"><a href="editothertrs.php?did=<?Php echo $rows["otr_id"]; ?>"><img src="images/edit.png" width="20" height="20" alt="edit" /></a></td>
    <td align="center"><a href="deleteothertrns.php?did=<?Php echo $rows["otr_id"]; ?>"><img src="images/delete.png" width="20" height="20" alt="delete" /></a></td>
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