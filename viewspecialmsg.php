<?Php
	include "db.php"; // call the database connection

	$nid=trim(htmlspecialchars($_POST["nid"]));
	$trid=trim(htmlspecialchars($_POST["uptr"]));
	

	
	
//	echo $trid;
//	$uptr = explode('|',$tr);//get the atp id relevent to the training program
//	$id = $uptr[0];

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/cp.css" rel="stylesheet" type="text/css" />
<link href="css/tabpanel.css" rel="stylesheet" type="text/css" />
<script src="scripts/tabpanel.js" type="text/javascript"></script>

<title>Management Development & Training Unit - Wayamba Provincial Council</title>
</head>

<body>

<table width="100%" border="0" style="position:relative;border-collapse:collapse">
  <tr>
    <td><?php include('header.php');?></td>
  </tr>
  <tr>
    <td>
<!-- ********************** Designations ********************************************** -->
<table width="100%" border="0">
  <tr>
    <td width="20%" valign="top"><?php include('leftmenu.php');?></td>
    <td width="80%" valign="top">
        <div class="tab">
        	<button class="tablinks" onclick="openCity(event, 'London')" >පුහුණු වැඩ සටහන් සඳහා අයදුම් කරන්න</button>
            <!--<button class="tablinks" onclick="openCity(event, 'Paris')">සියළුම පුහුණු අවශ්‍යතා</button>
            <button class="tablinks" onclick="openCity(event, 'col')">Search Employees</button>-->
        </div>
                      
 		<div id="London" class="tabcontent" style="display:block" align="center">
        <?Php
	$sqls="SELECT * FROM cp_staff where stf_Nid='$nid' order by stf_office ASC";
	$rss=mysqli_query($con,$sqls);
	$numberofRows= mysqli_num_rows($rss);
	
	if($numberofRows>=1){
		$rowstaff=mysqli_fetch_assoc($rss);
	
	$sql="SELECT * FROM cp_atp where atp_id='$trid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);
			if($rowstaff["stf_blacklisted"]=="Yes"){
			?>
            <div style="font-size:18px;color:#F00" align="center">
            <br /><br />
            <?Php	
				echo $nid." දරණ ජාතික හැඳුනුම්පත් අංකය හිමි ".$rowstaff["stf_Name"]. " අසාදුලේඛණගත වී ඇත.";
			?>
            <br /><br />
            </div>
            <?Php	
			}
			else if(($rows["atp_specialfacts"]!="") && ($rows["atp_showspecialfacts"]=="ඔව්")){
		?>
                <table width="80%" border="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center" style="font-size:18px">විශේෂ කරුණු (<?Php echo $rows["atp_trname"]; ?>)</td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center" style="color:#F00;font-weight:800"><?Php echo $rows["atp_specialfacts"]; ?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" align="center" style="font-size:16px;">ඔබ මෙම කොන්දේසි වලට එකඟ වන්නේ නම් පමණක් අයදුම් කරන්න</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center"><a href="applyfortrs.php?did=<?Php echo $trid."|".$nid; ?>">අයදුම් කිරීම තහවුරු කරන්න</a></td>
                    <td>&nbsp;</td>
                    <td align="center"><a href="control.php">අයදුම් කිරීම අවලංගු කරන්න</a></td>
                  </tr>
                </table>

		<?Php
			}
			else
			{
		?>
					<meta http-equiv="refresh" content="0; url=applyfortrs.php?did=<?Php echo $trid."|".$nid; ?>" />
        
        <?Php
			}
	}// NID No. Exist
	else{
		?>
				<table width="80%" border="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-size:18px" align="center">

						<?php echo $nid;?> දරණ ජාතික හැඳුනුම්පත් අංකය හිමි අයදුම්කරු පිළිබඳ විස්තර මෙම පද්ධතියට ඇතුලත් කර නොමැත. කරුණාකර එම තොරතුරු 
                        ඇතුලත් කිරීමෙන් පසු පුහුණු වැඩ සටහන සඳහා අයදුම් කිරීම සිදු කරන්න<br /><br />
                        
                            <?Php
	if($_SESSION['logtype']=="Administrator"){
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

                        
                    
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                 </table>        
        <?Php
	}
		?>
        </div>
                      
     <!--   <div id="Paris" class="tabcontent" style="display:none">
             <?Php require_once("treqlist.php"); ?>
        </div>
        -->
   
    </td>
  </tr>
</table>

<!-- ********************** End of User accounts ********************************************** -->
    </td>
  </tr>
  <tr>
    <td style="background-color:#000"><?php include('footer.php');?></td>
  </tr>

</table>

</body>
</html>