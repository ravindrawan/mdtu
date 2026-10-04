<?Php

	include "db.php"; // call the database connection

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];
	$td=date("Y-m-d");

	$sql="SELECT * FROM cp_foreignschols where fs_closingdate>'$td' order by fs_closingdate ASC";
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
    <th width="7%" >අනු අංකය</th>
    

    <th width="28%" >විදේශ ශිෂ්‍යත්ව  වැඩ සටහන</th>
    <th width="16%" >අදාල රට</th>
    <th width="12%" >අයදුම් කල හැකි අවසාන දිනය</th>
      <th width="25%" >වෙනත් කරුණු</th>
  
    <th width="12%" ></th>
    
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
?>
  <tr >
    <td><?Php echo $number; ?></td>
    <td><?Php echo $rows["fs_name"]; ?></td>
    <td><?Php echo $rows["fs_country"]; ?></td>
    <td><?Php echo $rows["fs_closingdate"]; ?></td>
    <td><?Php echo $rows["fs_comment"]; ?></td>
    <td align="center"><a href="foriegnschols/<?Php echo $rows["fs_file"]; ?>" target="new">බාගත කරගන්න</a></td>

  </tr>

<?Php
	$number=$number+1;
			}
		}
		else{
?>
  <tr>
    <td colspan="11" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
  </tr>
<?Php
		}
		$con->close();
?>
</table>
</form>
</body>
</html>