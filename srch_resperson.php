<?Php

	include "db.php"; // call the database connection
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="frmsrch" method="post" action="searchresourcepersons.php">
<table width="100%" border="0">
  <tr>
    <td align="right">පළමු විෂය ක්ෂේත්‍රය</td>
    <td align="left">
<?Php
	$sqld="SELECT * FROM cp_trfields order by tf_name ASC";
	$rsd=mysqli_query($con,$sqld);

?>
    <select name="trfield1">
    	<option></option>
    
    	<?Php
		$numberofRowsd= mysqli_num_rows($rsd);
		if($numberofRowsd !=0){
			while($rowsd=mysqli_fetch_assoc($rsd)){
		?>
        		<option><?Php echo $rowsd["tf_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
    <td align="right">දෙවන විෂය ක්ෂේත්‍රය</td>
    <td align="left">
<?Php
	$sqld2="SELECT * FROM cp_trfields order by tf_name ASC";
	$rsd2=mysqli_query($con,$sqld2);

?>
    
    <select name="trfield2">
    	<option></option>
    
    	<?Php
		$numberofRowsd2= mysqli_num_rows($rsd2);
		if($numberofRowsd2 !=0){
			while($rowsd2=mysqli_fetch_assoc($rsd2)){
		?>
        		<option><?Php echo $rowsd2["tf_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
    <td align="right">තුන්වන විෂය ක්ෂේත්‍රය</td>
    <td align="left">
    <?Php
	$sqld3="SELECT * FROM cp_trfields order by tf_name ASC";
	$rsd3=mysqli_query($con,$sqld3);

	?>

    <select name="trfield3">
    	<option></option>
    	<?Php
		$numberofRowsd3= mysqli_num_rows($rsd3);
		if($numberofRowsd3 !=0){
			while($rowsd3=mysqli_fetch_assoc($rsd3)){
		?>
        		<option><?Php echo $rowsd3["tf_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
  </tr>
  <tr>
    <td align="right">සිව්වන විෂය ක්ෂේත්‍රය</td>
    <td align="left">
    <?Php
	$sqld4="SELECT * FROM cp_trfields order by tf_name ASC";
	$rsd4=mysqli_query($con,$sqld4);

	?>
    
    <select name="trfield4">
    	<option></option>
    
    	<?Php
		$numberofRowsd4= mysqli_num_rows($rsd4);
		if($numberofRowsd4 !=0){
			while($rowsd4=mysqli_fetch_assoc($rsd4)){
		?>
        		<option><?Php echo $rowsd4["tf_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    
    </td>
    <td align="right">පස්වන විෂය ක්ෂේත්‍රය</td>
    <td align="left">
    <?Php
	$sqld5="SELECT * FROM cp_trfields order by tf_name ASC";
	$rsd5=mysqli_query($con,$sqld5);

	?>
    
    <select name="trfield5">
        	<option></option>

    	<?Php
		$numberofRowsd5= mysqli_num_rows($rsd5);
		if($numberofRowsd5 !=0){
			while($rowsd5=mysqli_fetch_assoc($rsd5)){
		?>
        		<option><?Php echo $rowsd5["tf_name"]; ?></option>
        <?Php		
			}
		}
		?>
    </select>
    
    </td>
    <td align="right">සම්පත්දායකයාගේ නම</td>
    <td align="left"><input type="text" name="resname" /></td>
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