<?Php

	include "db.php"; // call the database connection

	$sql="SELECT * FROM trdate where trd_id='1'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/controls.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="frm" method="post" enctype="multipart/form-data" action="edtitatpreqdates.php">
<table width="100%" border="0">
  <tr>
    <td colspan="3" align="left" style="font-size:18px;font-weight:700">කාල සීමාව ඇතුලත් කරන්න</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">මෙම දිනයට පසු එවූ පුහුණු ඉල්ලීම් පමණක් පෙන්වන්න</td>
    <td align="center">&nbsp;</td>
    <td align="left"><input type="date" name="sdate" id="text1" value="<?Php echo $rows["trd_date"]; ?>" /></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="submit" value=" ඇතුල් කරන්න " /></td>
    </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>