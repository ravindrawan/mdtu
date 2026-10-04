<?Php

	include "db.php"; // call the database connection

	$sql="SELECT * FROM cp_foreignschols order by fs_closingdate ASC";
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
    <th>ශීෂ්‍යත්වය</th>

    <th >අදාල රට</th>
    <th >අයදුම් කල යුතු අවසන් දිනය</th>
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
    <td><?Php echo $rows["fs_name"]; ?></td>
    <td><?Php echo $rows["fs_country"]; ?></td>
    <td><?Php echo $rows["fs_closingdate"]; ?></td>
    <td><?Php echo $rows["fs_comment"]; ?></td>

    <td align="center"><a href="editforiegnschols.php?did=<?Php echo $rows["fs_id"]; ?>"><img src="images/edit.png" width="20" height="20" alt="edit" /></a></td>
    <td align="center"><a href="deleteforiegnschs.php?did=<?Php echo $rows["fs_id"]; ?>"><img src="images/delete.png" width="20" height="20" alt="delete" /></a></td>
  </tr>

<?Php
	$number=$number+1;
			}
		}
		else{
?>
  <tr>
    <td colspan="7" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
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