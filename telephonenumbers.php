<?Php

	include "db.php"; // call the database connection

	$atpid=$_GET["atpid"];
	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];
	$td=date("Y-m-d");

	$sql="SELECT * FROM cp_trainingapplications where (tapp_trstartdate>'$td' and tapp_atpid='$atpid') AND tapp_isselected='Yes' order by tapp_office ASC";
	$rs=mysqli_query($con,$sql);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management Development & Training Unit - Central Provincial Council</title>
</head>

<body>
<center>
<div align="center" style="font-size:18px;font-family:'Malithi Web'">පුහුණු ලාභීන්ගේ ජංගම දුරකථන අංක
</div>
<hr width="50%" color="#000000" size="3" />
<table border="1" style="border-collapse:collapse;font-family:Verdana, Geneva, sans-serif" width="75%">
	<tr>
    	<td>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			$m="";$f="";$e="";$v="";
			$male="";$female="";
			while($rows=mysqli_fetch_assoc($rs)){
				$nid=$rows["tapp_officerNid"];

	$sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rsstf=mysqli_query($con,$sqlstf);
	$rowsstf=mysqli_fetch_assoc($rsstf);
			echo $rowsstf["stf_mobile"].","; 
			}
		}
?>
        
        </td>
    </tr>
</table>
<br /><br />


<div align="center" style="font-size:18px;font-family:'Malithi Web'">අදාල කාර්යාල වල පුහුණු විෂය භාර නිලධාරීන්ගේ ජංගම දුරකථන අංක
</div>
<hr width="50%" color="#000000" size="3" />
<table border="1" style="border-collapse:collapse;font-family:Verdana, Geneva, sans-serif" width="75%">
	<tr>
    	<td>
	<?php
	$sqlt="SELECT * FROM cp_trainingapplications where (tapp_trstartdate>'$td' and tapp_atpid='$atpid') AND tapp_isselected='Yes' order by tapp_office ASC";
	$rst=mysqli_query($con,$sqlt);
	
		$numbert=1;
		$numberofRowst= mysqli_num_rows($rst);
		if($numberofRowst !=0){
			while($rowst=mysqli_fetch_assoc($rst)){
				$offt=$rowst["tapp_office"];

	$sqlstft="SELECT * FROM cp_trainingofficers where tro_office='$offt'";
	$rsstft=mysqli_query($con,$sqlstft);
	$rowsstft=mysqli_fetch_assoc($rsstft);
			echo $rowsstft["tro_mobile"].","; 
			}
		}
?>
        
        </td>
    </tr>
</table>

</center>
</body>
</html>