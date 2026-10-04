<?Php

	include "db.php"; // call the database connection

	$y=trim(htmlspecialchars($_POST["year"]));

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];

	$sql="SELECT * FROM cp_completedtrainings where SUBSTRING(ct_day1,1,4)='$y'";
	$rs=mysqli_query($con,$sql);

	$sqlp="SELECT * FROM cp_privatetrainings where (SUBSTRING(pvtt_cstartdate,1,4)='$y' AND pvtt_approved='Yes')";
	$rsp=mysqli_query($con,$sqlp);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/tabls.css" rel="stylesheet" type="text/css" />
<title>Management Development & Training Unit - Central Provincial Council</title>
</head>

<body>
<center>
<div style="font-size:20px;font-family:'Malithi Web';font-weight:600" align="center">පිරිස් හා පුහුණු කාර්යාලය විසින් <?Php echo $y; ?> වර්ෂය තුල පවත්වා නිම කරන ලද පාඨමාලා</div>
<hr color="#000000" size="3" width="50%" />
<table width="80%" border="1" style="border-collapse:collapse">
  <tr>
    <th >වර්ෂය</th>
    <th >වැඩමුළු ප්‍රමාණය</th>
    <th >අපේක්ෂිත සහභාගීත්වය</th>
    <th >සත්‍ය සහභාගීත්වය</th>
    <th >ඇස්තමේන්තුගත වියදම (රු)</th>
      <th >සත්‍ය වියදම (රු)</th>

  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
			$ep=0; $ap=0; $ec=0; $ac=0;

		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
					$ep=$ep+$rows["ct_noofparticipant"];
					$ap=$ap+$rows["ct_noofactualparticipant"];
					$ec=$ec+$rows["ct_estimate"];
					$ac=$ac+$rows["ct_actualexpenditure"];
					$number=$number+1;

			}
		}
				
?>
  <tr >
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $y; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $numberofRows; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $ep; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $ap; ?></td>
    <td align="right" style="font-family:Verdana, Geneva, sans-serif"><?Php echo number_format($ec,2); ?></td>
    <td align="right" style="font-family:Verdana, Geneva, sans-serif"><?Php echo number_format($ac,2); ?></td>

  </tr>


</table>
<br /><br />

<div style="font-size:20px;font-family:'Malithi Web';font-weight:600" align="center">පිරිස් හා පුහුණු කාර්යාලය විසින් <?Php echo $y; ?> වර්ෂය තුල ප්‍රතිපාදන සපයන ලද පාඨමාලා</div>
<hr color="#000000" size="3"  width="50%" />
<table width="80%" border="1" style="border-collapse:collapse">
  <tr>
    <th >වර්ෂය</th>
    <th >වැඩමුළු ප්‍රමාණය</th>
    <th >පාඨමාලා ගාස්තුව (රු)</th>
      <th >අනුමත කල මුදල (රු)</th>

  </tr>
	<?php
		$numberp=1;
		$numberofRowsp= mysqli_num_rows($rsp);
			 $cf=0; $aa=0;

		if($numberofRowsp !=0){
			while($rowsp=mysqli_fetch_assoc($rsp)){
					$cf=$cf+$rowsp["pvtt_fees"];
					$aa=$aa+$rowsp["pvtt_amount"];
					$numberp=$numberp+1;

			}
		}
				
?>
  <tr >
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $y; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $numberofRowsp; ?></td>
    <td align="right" style="font-family:Verdana, Geneva, sans-serif"><?Php echo number_format($cf,2); ?></td>
    <td align="right" style="font-family:Verdana, Geneva, sans-serif"><?Php echo number_format($aa,2); ?></td>

  </tr>


</table>
</center>


</body>
</html>