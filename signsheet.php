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
<link href="css/tabls.css" rel="stylesheet" type="text/css" />
<title>Management Development & Training Unit - North Western Provincial Council</title>
</head>

<body>
<?Php
	$sqlstp="SELECT * FROM cp_atp where atp_id='$atpid'";
	$rsatp=mysqli_query($con,$sqlstp);
	$rowsatp=mysqli_fetch_assoc($rsatp);
?>
<form name="frm" method="post" enctype="multipart/form-data" action="addapplicants.php">
<div align="center" style="font-size:20px;font-weight:800;font:'Malithi Web'">සහභාගී වන්නන්ගේ නාම ලේඛණය<br /></div>
<div style="font-size:16px;font-weight:800;font:'Malithi Web'" align="left">

පුහුණු වැඩ සටහන - <?Php echo $rowsatp["atp_trname"]; ?><br />
පැවැත්‍ෙවන ස්ථානය - <?Php echo $rowsatp["atp_location"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ආරම්භක දිනය - <?Php echo $rowsatp["atp_day1"]; ?><br /><br />
</div>
<table width="100%" border="1" style="border-collapse:collapse;font-size: 12px">
  <tr>
    <th width="3%">අනු අංකය</th>
    <th width="7%" >ඉල්ලුම් කල නිලධාරියාගේ ජා.හැ.අ.</th>
    
    <th width="13%" >නිලධාරියාගේ නම</th>
    
    <th width="10%" >තනතුරු නාමය</th>
    <th width="13%" >කාර්යාලය</th>
    <th width="10%" >ජංගම දුරකථන අංකය</th>
    

<!--    <th width="6%" >ආහාර වර්ගය</th> -->
 <?Php 
 if($rowsatp["atp_day1"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day1"]; ?></th> <?Php } 
 if($rowsatp["atp_day2"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day2"]; ?></th> <?Php } 
 if($rowsatp["atp_day3"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day3"]; ?></th> <?Php } 
 if($rowsatp["atp_day4"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day4"]; ?></th> <?Php } 
 if($rowsatp["atp_day5"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day5"]; ?></th> <?Php } 
 if($rowsatp["atp_day6"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day6"]; ?></th> <?Php } 
 if($rowsatp["atp_day7"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day7"]; ?></th> <?Php } 
 if($rowsatp["atp_day8"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day8"]; ?></th> <?Php } 
 if($rowsatp["atp_day9"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day9"]; ?></th> <?Php } 
 if($rowsatp["atp_day10"]!="1111-11-11"){ ?> <th width="10%" ><?Php echo $rowsatp["atp_day10"]; ?></th> <?Php } 
 
 ?>  
  </tr>
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
				
?>
  <tr >
    <td><?Php echo $number; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rows["tapp_officerNid"]; ?></td>

    <td><?Php echo $rowsstf["stf_Name"]; ?></td>
    <td><?Php echo $rowsstf["stf_desig"]; ?></td>
    <td><?Php echo $rowsstf["stf_office"]; ?></td>
    <td align="center" style="font-family:Verdana, Geneva, sans-serif"><?Php echo $rowsstf["stf_mobile"]; ?></td>
  
<!--    <td align="center"><?Php echo $rows["tapp_diet"]; 
	if($rows["tapp_diet"]=="මස්"){$m=$m+1;}
	if($rows["tapp_diet"]=="මාළු"){$f=$f+1;}
	if($rows["tapp_diet"]=="බිත්තර"){$e=$e+1;}
	if($rows["tapp_diet"]=="එළවළු"){$v=$v+1;}
	
	if($rows["tapp_accomodation"]=="ඔව්"){
		if($rowsstf["stf_sex"]="පුරුෂ"){$male=$male+1;}
		else if($rowsstf["stf_sex"]="ස්ත්‍රී"){$female=$female+1;}
	}
	
	?></td>
    -->
 <?Php 
 if($rowsatp["atp_day1"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day2"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day3"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day4"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day5"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day6"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day7"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day8"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day9"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 if($rowsatp["atp_day10"]!="1111-11-11"){ ?> <td >&nbsp;</td> <?Php } 
 
 ?>  

  </tr>

<?Php
	$number=$number+1;
			}
	?>
  <?Php		
		}
		else{
?>
  <tr>
    <td colspan="12" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
  </tr>
<?Php
		}
		$con->close();
?>
</table>
</form>
</body>
</html>