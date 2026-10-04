<?Php

	include "db.php"; // call the database connection
	$td=date("Y-m-d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="frmsrch" method="post" action="searchtrainingapplications.php">
<table width="100%" border="0">
  <tr>
    <td width="4%" align="right"><!--කාර්යාලය--></td>
    <td width="51%" align="right" style="font-weight:bold">
   
  <?Php
	$sqld="SELECT * FROM offices order by of_name ASC";
	$rsd=mysqli_query($con,$sqld);

?>
      <select name="office" style="visibility:hidden">
        <option></option>
        
        <?Php
		$numberofRowsd= mysqli_num_rows($rsd);
		if($numberofRowsd !=0){
			while($rowsd=mysqli_fetch_assoc($rsd)){
		?>
        <option><?Php //echo $rowsd["of_name"]; ?></option>
        <?Php		
			}
		}
		?>
        </select>
     පුහුණු ලාභීන් තෝරා ගැනීම සඳහා අදාල පුහුණු වැඩ සටහන තෝරන්න &nbsp; ->
      </td>
    <td colspan="4" align="left">&nbsp;පුහුණු වැඩ සටහන
      <?Php
	$sqld2="SELECT * FROM cp_atp where atp_day1>'$td' AND atp_addhome='ඔව්' order by atp_trname ASC";
	$rsd2=mysqli_query($con,$sqld2);

?>
      
      <select name="trname">
        <option></option>
        
        <?Php
		$numberofRowsd2= mysqli_num_rows($rsd2);
		if($numberofRowsd2 !=0){
			while($rowsd2=mysqli_fetch_assoc($rsd2)){
		?>
        <option value="<?Php echo $rowsd2["atp_id"]; ?>"><?Php echo $rowsd2["atp_trname"]; ?></option>
        <?Php		
			}
		}
		?>
      </select>    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td colspan="4" align="center"><input type="submit" name="submit" value="සොයන්න" /></td>
    <td width="10%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td width="22%" align="right">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="9%" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>