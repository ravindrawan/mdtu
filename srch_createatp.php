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
<form name="frmsrch" method="post" action="searchcreateatp.php">
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
    <td align="right">පුහුණු අවශ්‍යතාවය</td>
    <td align="left">
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