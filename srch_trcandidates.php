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
<form name="frmsrch" method="post" action="searchcandidates.php">
<table width="100%" border="0">
  <tr>
    <td colspan="6" align="center">පුහුණු වැඩ සටහන
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
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>