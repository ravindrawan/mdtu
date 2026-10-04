<?Php

	include "db.php"; // call the database connection
			$off=$_SESSION['offid'];
		$logtype=$_SESSION['logtype'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/controls.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<form name="frmsrch" method="post" action="searchcompletetrainings.php">
<table width="100%" border="0">
  <tr>
    <td width="5%" align="right">වර්ෂය</td>
    <td width="14%" align="left"><select name="year">
      <option></option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
      <option>2026</option>
      <option>2027</option>
      <option>2028</option>
      <option>2029</option>
      <option>2030</option>
    </select></td>
    <td width="7%" align="right">&nbsp;</td>
    <td width="38%" align="left">&nbsp;කාර්තුව &nbsp; <input type="date" name="frm" />
    <input type="date" name="to" />
    </td>
    <td colspan="2" align="right"><input type="submit" name="submit" value="සොයන්න" /></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td width="26%" align="right">&nbsp;</td>
    <td width="10%" align="left">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>