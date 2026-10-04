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
<form name="frmsrch" method="post" action="searchuserparticipants.php">
<table width="100%" border="0">
  <tr>
    <td width="4%" align="right">&nbsp;</td>
    <td width="25%" align="left">වර්ෂය
      <select name="year">
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
    <td width="41%" align="right">
පුහුණු පාඨමාලාව
      <select name="tr">
      <option></option>
      <?Php
				$sqlt="SELECT * FROM cp_trainings order by tr_name ASC";
				$rst=mysqli_query($con,$sqlt);
				$numberofRowst= mysqli_num_rows($rst);
				if($numberofRowst !=0){
					while($rowst=mysqli_fetch_assoc($rst)){
						?>
      <option><?php echo $rowst["tr_name"]; ?></option>
      <?Php
					}
				}
			?>
    </select>    
    </td>
    <td colspan="3" align="left">&nbsp;&nbsp;
      <input type="submit" name="submit" value="සොයන්න" />
      
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td width="22%" align="left">&nbsp;</td>
    <td width="4%" align="right">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>