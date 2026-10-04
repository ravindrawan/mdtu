<?Php
	include "db.php"; // call database connection

	$appliedtrainings = explode('|',$_GET['atpdetails']);//get the atp id relevent to the training program
	$atpid = $appliedtrainings[0];
	$atpsdate = $appliedtrainings[1];

	$sqlct="SELECT * FROM cp_completedtrainings where ct_atpid='$atpid' AND ct_day1='$atpsdate' order by ct_day1 DESC";
	$rsct=mysqli_query($con,$sqlct);
	$rowsct=mysqli_fetch_assoc($rsct);

//training attendence
	$sqlat="SELECT * FROM cp_trainingattendance where tratt_atpid='$atpid' AND tratt_startdate='$atpsdate' order by tratt_startdate DESC";
	$rsat=mysqli_query($con,$sqlat);
	$rowsat=mysqli_fetch_assoc($rsat);
	
//atp
	$sqlatp="SELECT * FROM cp_atp where atp_id='$atpid' AND atp_day1='$atpsdate' order by atp_day1 DESC";
	$rsatp=mysqli_query($con,$sqlatp);
	$rowsatp=mysqli_fetch_assoc($rsatp);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management Development & Training Unit - Central Provincial Council</title>
</head>

<body>
<center>
<table width="80%" border="0" style="border-collapse:collapse;font-family:'Malithi Web'">
  <tr>
    <td colspan="3" align="center" style="font-size:20px"><?Php echo $rowsct["ct_trname"]." (".$rowsct["ct_fileno"].")";  ?>
    <hr width="25%" />
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top">වැඩමුළුව පැවැත්වූ දිනය/දිනයන්</td>
    <td valign="top">:</td>
    <td align="left"  style="font-family:Verdana, Geneva, sans-serif">
    <?Php
    	if($rowsct["ct_day1"]!="1111-11-11"){ echo $rowsct["ct_day1"]; }
	if($rowsct["ct_day2"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day2"]; } 
	if($rowsct["ct_day3"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day3"]; } 
	if($rowsct["ct_day4"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day4"]; } 
	if($rowsct["ct_day5"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day5"]; } 
	if($rowsct["ct_day6"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day6"]; } 
	if($rowsct["ct_day7"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day7"]; } 
	if($rowsct["ct_day8"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day8"]; } 
	if($rowsct["ct_day9"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day9"]; } 
	if($rowsct["ct_day10"]!="1111-11-11"){ echo "<br>".$rowsct["ct_day10"]; } 
		
	?>
    </td>
  </tr>
  <tr>
    <td align="right">වැඩමුළුව පැවැත්වූ ස්ථානය</td>
    <td>:</td>
    <td align="left"><?Php echo $rowsct["ct_location"]; ?></td>
  </tr>
  <tr>
    <td align="right">වැඩමුළුවේ අරමුණ</td>
    <td>:</td>
    <td align="left"><?Php echo $rowsct["ct_trpurpose"]; ?></td>
  </tr>
  <tr>
    <td align="right">වැඩමුළුවේ අන්තර්ගතය</td>
    <td>:</td>
    <td align="left"><?Php echo $rowsct["ct_trcontent"]; ?></td>
  </tr>
  <tr>
    <td align="right">ඉලක්කගත කණ්ඩායම</td>
    <td>:</td>
    <td align="left"><?Php echo $rowsct["ct_trtargetgroup"]; ?></td>
  </tr>
  <tr>
    <td align="right">වැඩමුළුවේ දින ගණන</td>
    <td>:</td>
    <td align="left"  style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowsct["ct_noofdays"]; ?></td>
  </tr>
  <tr>
    <td align="right">සහභාගී කරවීමට අපේක්ෂිත සංඛ්‍යාව</td>
    <td>:</td>
    <td align="left"  style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowsct["ct_noofparticipant"]; ?></td>
  </tr>
  <tr>
    <td align="right">සහභාගී වූ සංඛ්‍යාව</td>
    <td>:</td>
    <td align="left"  style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowsct["ct_noofactualparticipant"]; ?></td>
  </tr>
  <tr>
    <td align="right" valign="top">සම්පත් දායකයන්</td>
    <td valign="top">:</td>
    <td align="left"><?Php echo $rowsatp["atp_resourcep1"]; 
		if($rowsatp["atp_resourcep2"]!=""){ echo "<br>".$rowsatp["atp_resourcep2"]; } 
		if($rowsatp["atp_resourcep3"]!=""){ echo "<br>".$rowsatp["atp_resourcep3"]; } 
		if($rowsatp["atp_resourcep4"]!=""){ echo "<br>".$rowsatp["atp_resourcep4"]; } 
		if($rowsatp["atp_resourcep5"]!=""){ echo "<br>".$rowsatp["atp_resourcep5"]; } 
		if($rowsatp["atp_resourcep6"]!=""){ echo "<br>".$rowsatp["atp_resourcep6"]; } 
		if($rowsatp["atp_resourcep7"]!=""){ echo "<br>".$rowsatp["atp_resourcep7"]; } 
		if($rowsatp["atp_resourcep8"]!=""){ echo "<br>".$rowsatp["atp_resourcep8"]; } 
		if($rowsatp["atp_resourcep9"]!=""){ echo "<br>".$rowsatp["atp_resourcep9"]; } 
		if($rowsatp["atp_resourcep10"]!=""){ echo "<br>".$rowsatp["atp_resourcep10"]; } 

	?></td>
  </tr>
  <tr>
    <td align="right">මූල්‍ය ප්‍රභවය</td>
    <td>:</td>
    <td align="left"><?Php echo $rowsct["ct_fundsource"]; ?></td>
  </tr>
  <tr>
    <td align="right">ඇස්තමේන්තුගත වියදම රුපියල්</td>
    <td>:</td>
    <td align="left" style="font-family:Verdana, Geneva, sans-serif"><?Php echo number_format($rowsct["ct_estimate"],2); ?></td>
  </tr>
  <tr>
    <td align="right">සත්‍ය වියදම රුපියල්</td>
    <td>:</td>
    <td align="left" style="font-family:Verdana, Geneva, sans-serif"><?Php if($rowsct["ct_actualexpenditure"]!=""){echo number_format($rowsct["ct_actualexpenditure"],2); } ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="left">වැඩමුළුව සඳහා සහභාගී වූ නිලධාරීන්</td>
  </tr>
  <tr>
    <td colspan="3" align="left">
    <?Php
	$sqlpo="SELECT * FROM cp_trainingattendance where (tratt_atpid='$atpid' AND tratt_startdate='$atpsdate') AND tratt_isparti='Yes' order by tratt_startdate DESC";
	$rspo=mysqli_query($con,$sqlpo);

	$number=1;
		$numberofRows= mysqli_num_rows($rspo);
		if($numberofRows !=0){
		?>
<table width="100%" border="1" style="border-collapse:collapse;font-family:'Malithi Web'">
  <tr>
    <th  width="4%" >අනු අංකය</th>
    <th  width="12%" >ජා.හැ.අ.</th>
    <th  width="22%" >නම</th>
    <th  width="22%" >තනතුර</th>
    <th  width="22%" >කාර්යාලය</th>
    <th  width="17%" >වෙනත් විස්තර</th>
  </tr>
        <?Php	
			while($rowspo=mysqli_fetch_assoc($rspo)){
	?>
  <tr >
    <td><?Php echo $number; ?></td>
    <td style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowspo["tratt_empnid"]; ?></td>
    <td>
		<?Php 
		
			$nid=$rowspo["tratt_empnid"];
	$sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rsstf=mysqli_query($con,$sqlstf);
	$rowsstf=mysqli_fetch_assoc($rsstf);	
	echo $rowsstf["stf_Name"];
		?>
    </td>
    <td><?Php echo $rowsstf["stf_desig"]; ?></td>
    <td><?Php echo $rowsstf["stf_office"]; ?></td>
    <td><?Php echo $rowspo["tratt_comnt"]; ?></td>
    
</tr>    
    <?Php
		$number=$number+1;
			}
	?>
    </table>        

    <?Php		
		}
	?>
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
    <?Php
	$sqlpo="SELECT * FROM cp_trainingattendance where (tratt_atpid='$atpid' AND tratt_startdate='$atpsdate') AND (tratt_isparti='' OR tratt_isparti='No')  order by tratt_startdate DESC";
	$rspo=mysqli_query($con,$sqlpo);

	$number=1;
		$numberofRows= mysqli_num_rows($rspo);
		if($numberofRows !=0){
		?>
  <tr>
    <td colspan="3" align="left">වැඩමුළුව සඳහා සහභාගී නොවූ නිලධාරීන්</td>
    </tr>
  <tr>
    <td colspan="3" align="left">
       
<table width="100%" border="1" style="border-collapse:collapse;font-family:'Malithi Web'">
  <tr>
    <th  width="4%" >අනු අංකය</th>
    <th  width="12%" >ජා.හැ.අ.</th>
    <th  width="22%" >නම</th>
    <th  width="22%" >තනතුර</th>
    <th  width="22%" >කාර්යාලය</th>
    <th  width="17%" >වෙනත් විස්තර</th>
  </tr>
        <?Php	
			while($rowspo=mysqli_fetch_assoc($rspo)){
	?>
  <tr >
    <td><?Php echo $number; ?></td>
    <td style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowspo["tratt_empnid"]; ?></td>
    <td>
		<?Php 
		
			$nid=$rowspo["tratt_empnid"];
	$sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rsstf=mysqli_query($con,$sqlstf);
	$rowsstf=mysqli_fetch_assoc($rsstf);	
	echo $rowsstf["stf_Name"];
		?>
    </td>
    <td><?Php echo $rowsstf["stf_desig"]; ?></td>
    <td><?Php echo $rowsstf["stf_office"]; ?></td>
    <td><?Php echo $rowspo["tratt_comnt"]; ?></td>
    
</tr>    
    <?Php
			$number=$number+1;

			}
	?>
    </table>        

    <?Php		
		}
	?>
    
    </td>
    </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">වෙනත් විස්තර</td>
    <td valign="top">:</td>
    <td align="left"><?Php echo $rowsct["ct_comments"]; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>