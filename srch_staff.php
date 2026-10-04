<?Php

	include "db.php"; // call the database connection
			$off=$_SESSION['offid'];
		$logtype=$_SESSION['logtype'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="frmsrch" method="post" action="searchstaff.php">
<table width="100%" border="0">
  <tr>
    <td align="right">කාර්යාලය</td>
    <td align="left">
<?Php
	$sqlo="SELECT * FROM offices order by of_name ASC";
	$rso=mysqli_query($con,$sqlo);

?>
    <select name="office">
    	<?Php
		if($logtype=="Administrator"){
		?>			
    	<option></option>
    	<?Php
		$numberofRowso= mysqli_num_rows($rso);
		if($numberofRowso !=0){
			
				while($rowso=mysqli_fetch_assoc($rso)){
		?>
        		<option><?Php echo $rowso["of_name"]; ?></option>
        <?Php		
			}
		}
		}else{
		?>
        <option><?Php echo $off; ?></option>
        <?Php	
		}
		?>
    </select>
    
    </td>
    <td align="right">තනතුර</td>
    <td align="left">
<?Php
	$sqld="SELECT * FROM cp_desigs order by des_name ASC";
	$rsd=mysqli_query($con,$sqld);

?>
    
    <select name="desig">
    	<option></option>
    	<?Php
		$numberofRowsd= mysqli_num_rows($rsd);
		if($numberofRowsd !=0){
			while($rowsd=mysqli_fetch_assoc($rsd)){
		?>
        		<option><?Php echo $rowsd["des_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
    <td align="right">සේවය</td>
    <td align="left">
    <?Php
	$sqls="SELECT * FROM cp_services order by ser_name ASC";
	$rss=mysqli_query($con,$sqls);

	?>

    <select name="service">
    	<option></option>
    	<?Php
		$numberofRowss= mysqli_num_rows($rss);
		if($numberofRowss !=0){
			while($rowss=mysqli_fetch_assoc($rss)){
		?>
        		<option><?Php echo $rowss["ser_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
  </tr>
  <tr>
    <td align="right">ජා.හැ. අංකය</td>
    <td align="left">
    
<input type="text" name="nid" />    
    
    </td>
    <td align="right">නම</td>
    <td align="left">
    	<input type="text" name="name" />
    </td>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
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