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
<form name="frmsrch" method="post" action="searchfulltrdata.php">
<table width="100%" border="0">
  <tr>
    <td width="3%" align="right">&nbsp;</td>
    <td width="5%" align="right">වර්ෂය</td>
    <td width="10%" align="left"><select name="year">
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
    <td width="18%" align="left">මාසය &nbsp;&nbsp;
    	<select name="month">
        	<option></option>
        	<option value="01">ජනවාරි</option>
        	<option value="02">පෙබරවාරි</option>
        	<option value="03">මාර්තු</option>
        	<option value="04">අප්‍රේල්</option>
        	<option value="05">මැයි</option>
        	<option value="06">ජූනි</option>
        	<option value="07">ජූලි</option>
        	<option value="08">අගෝස්තු</option>
        	<option value="09">සැප්තැම්බර්</option>
        	<option value="10">ඔක්තෝබර්</option>
        	<option value="11">නොවැම්බර්</option>
        	<option value="12">දෙසැම්බර්</option>
            
        </select>
    </td>
    <td width="30%" align="right">පුහුණ වැඩ සටහන&nbsp;
    	<input type="text" name="tr" />
    
    </td>
    <td colspan="2" align="right"><input type="submit" name="submit" value="සොයන්න" /></td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td colspan="2" align="right">&nbsp;</td>
    <td width="3%" align="left">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>