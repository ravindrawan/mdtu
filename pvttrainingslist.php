<?Php

	include "db.php"; // call the database connection

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];
	$td=date("Y-m-d");

	//$sql="SELECT * FROM cp_privatetrainings where pvtt_approved='' order by pvtt_applydate ASC";
	$sql="SELECT * FROM cp_privatetrainings  order by pvtt_applydate ASC";

	$rs=mysqli_query($con,$sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/tabls.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<form name="frm" method="post" enctype="multipart/form-data" action="addtoatp.php">
<table width="100%" border="1" class="zebra">
  <tr>
    <th >අනු අංකය</th>
    <th>නිලධාරියාගේ ජා.හැ.අ.</th>
    
    <th >නම</th>
    <th >තනතුර</th>
    <th >කාර්යාලය</th>
    <th >අයදුම් කල දිනය</th>
      <th >පාඨමාලාව</th>
      <th >ආයතනය</th>
  
    <th >ආරම්භ වන දිනය</th>
    <th >කාල සීමාව</th>
    <th >ඉල්ලා සිටින මුදල</th>

    <th >&nbsp;</th>
    <th >&nbsp;</th>
    
  </tr>
	<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
				
?>
  <tr >
    <td ><?Php echo $number; ?></td>
    <td align="center"><?Php echo $rows["pvtt_nid"]; ?></td>
    <td  align="left"><?Php 
			$nid=$rows["pvtt_nid"];
			$sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
			$rsstf=mysqli_query($con,$sqlstf);
			$rowstf=mysqli_fetch_assoc($rsstf);
			echo $rowstf["stf_Name"];
		?></td>
    <td><?Php echo $rowstf["stf_desig"]; ?></td>
    <td><?Php echo $rowstf["stf_office"]; ?></td>
    <td  align="center"><?Php echo $rows["pvtt_applydate"]; ?></td>
    <td align="left"><?Php echo $rows["pvtt_cname"]; ?></td>
    <td><?Php echo $rows["pvtt_cinstitute"]; ?></td>
    <td><?Php echo $rows["pvtt_cstartdate"]; ?></td>
    <td><?Php echo $rows["pvtt_cduration"]; ?></td>
    
    <td><?Php if(is_numeric($rows["pvtt_fees"])){ echo number_format($rows["pvtt_fees"],2); } ?></td>
    <td align="center" <?Php if($rows["pvtt_approved"]=="Yes"){ ?> bgcolor="#00FF7F" <?Php }
	else if($rows["pvtt_approved"]=="No"){ ?> bgcolor="#E9967A" <?Php }
	 ?>>
    
    <a href="approvepvttrainings.php?atpid=<?Php echo $rows["pvtt_id"]; ?>"> 
	<?Php if($rows["pvtt_approved"]=="Yes"){ ?>ප්‍රතිපාදන අනුමත කර ඇත<br />වෙනස් කරන්න<?Php } 
	else if($rows["pvtt_approved"]=="No"){ ?>ප්‍රතිපාදන අනුමත කර නැත<br />වෙනස් කරන්න<?Php }
	else{ ?>අනුමත කිරීම හා ප්‍රතිපාදන ලබා දීම<?Php } ?>
    </a></td>
    <td align="center"  <?Php if($rows["pvtt_certificatesubmit"]=="Yes"){ ?> bgcolor="#00FF7F" <?Php }
	else if($rows["pvtt_certificatesubmit"]=="No"){ ?> bgcolor="#E9967A" <?Php }
	 ?> ><a href="addcertificate.php?atpid=<?Php echo $rows["pvtt_id"]; ?>" target="new">සහතිකපත් ඉදිරිපත් කිරීම</a></td>

  </tr>

<?Php
		$number=$number+1;

				}
			}
		else{
?>
  <tr>
    <td colspan="11" style="font-size:18px;font-weight:700" align="center">තොරතුරු කිසිවක් නොමැත...!</td>
  </tr>
<?Php
		}
		$con->close();
?>
</table>
  <table width="100%"><tr><td width="80%"></td><td style="padding-left:5px;background-color:#000;font-size:16px" align="center" id="menulink" height="25px" width="20%">    <?Php
	if($_SESSION['logtype']=="Administrator" || $_SESSION['logtype']=="Super User"){
	?>
    <a href="control.php">පාලන පුවරුව</a>
    <?Php
	}
	else{
	?>
    <a href="usercontrolpanel.php">පාලන පුවරුව</a>
	<?Php
	}
	?>    
</td></tr></table>
</form>
</body>
</html>