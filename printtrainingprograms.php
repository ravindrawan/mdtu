<?Php

	include "db.php"; // call the database connection
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management Development & Training Unit - Wayamba Provincial Council</title>
</head>

<body>
<div style="font-size:24px;font-family:'Malithi Web'">
වයඹ පළාත් පුහුණු ඒකකය මගින් පවත්වන පුහුණ වැඩ සටහන්
<br /><br />
</div>
<table>
            <?Php
				$sqlt="SELECT * FROM cp_trainings order by tr_name ASC";
				$rst=mysqli_query($con,$sqlt);
				$numberofRowst= mysqli_num_rows($rst);
				if($numberofRowst !=0){
					$number=1;
					while($rowst=mysqli_fetch_assoc($rst)){
						?>
                        <tr>
                        <td><?Php echo $number; ?></td>
                        <td><?php echo $rowst["tr_name"]; ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><hr /></td>
                         </tr>      
                <?Php
				$number=$number+1;
					}
				}
			?>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</body>
</html>