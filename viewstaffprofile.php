<?Php

	session_start(); //To use the SESSION variable

	include "db.php"; // call the database connection

	$nid=trim(htmlspecialchars($_POST["nid"]));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/cp.css" rel="stylesheet" type="text/css" />
<link href="css/controls.css" rel="stylesheet" type="text/css" />
<link href="css/tabpanel.css" rel="stylesheet" type="text/css" />
<script src="scripts/tabpanel.js" type="text/javascript"></script>

<title>Management Development & Training Unit - Wayamba Provincial Council</title>
</head>

<body>

<table width="100%" border="0" style="position:relative;border-collapse:collapse">
  <tr>
    <td><?php include('usrheader.php');?></td>
  </tr>
  <tr>
    <td>
<!-- ********************** Designations ********************************************** -->
<table width="100%" border="0">
  <tr>
    <!--<td width="20%" valign="top"><?php //include('leftmenu.php');?></td>-->
    <td width="100%" valign="top">
        <div class="tab">
        	<button class="tablinks" onclick="openCity(event, 'a1')" style="width:12.5%" >කාර්යමණ්ඩලය</button>

            <!--<button class="tablinks" onclick="openCity(event, 'col')">Search Employees</button>-->
        </div>
                      
 		<div id="a1" class="tabcontent" style="display:block">
<?Php

	$Sql="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rs=mysqli_query($con,$Sql);
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows ==0){
		?>
        <div style="font-size:24px" align="center"><br />
        <?Php	
			echo "ඔබ ඇතුලත් කල ".$nid." දරණ ජාතික හැඳුනුම්පත් අංකය මෙම පද්ධතිය තුල නොමැත. කරුණාකර ඔබගේ කාර්යාලයේ පුහුණු විෂය භාර නිලධාරියා මගින් ඔබගේ තොරතුරු ඇතුලත් කරන්න";	
          ?>
          <br />
          </div>
          <?Php  
		}
		else if($numberofRows>=1){
			$row=mysqli_fetch_assoc($rs);
		?>
     <table width="100%" border="0">
  <tr>
    <td colspan="4" align="center" >
        <?Php
			$day=date("Y-m-d");
			$sqlTr="select * from cp_trainingapplications where (tapp_officerNid='$nid' and tapp_trstartdate>='$day') and tapp_isselected='Yes'";
			$rsstr=mysqli_query($con,$sqlTr);
			$nrtrs= mysqli_num_rows($rsstr);
			if($nrtrs !=0){
			?>
    		<form name="frm" method="post" action="printappletter.php" target="new">
    			ඔබව තෝරාගෙන ඇති පහත සඳහන් පුහුණු වැඩමුළු සඳහා ඔබගේ කැඳවීම් ලිපිය මුද්‍රණය කරන්න<br />
        		<select name="trs">
            
            <?Php	
				while($rowrsstr=mysqli_fetch_assoc($rsstr)){

		?>
        	<option value="<?Php echo $rowrsstr["tapp_atpid"].'|'.$rowrsstr["tapp_trstartdate"].'|'.$nid; ?>"><?Php echo $rowrsstr["tapp_trname"]; ?></option>
         <?Php
				}
		?>		
        </select>
        &nbsp;<input type="submit" name="submit" value=" මුද්‍රණය කරන්න " />
        <?Php
					}
		 ?>   

    </form>
    <br />
    </td>
  </tr>
  <tr>
    <td colspan="4" align="center" style="font-size:22px;color:#FFF;background-color:#000" height="35"><?Php echo $row["stf_Name"]; ?></td>
    </tr>
  <tr>
    <td width="15%" rowspan="13" valign="top"><?Php if($row["stf_Photo"]!=""){ ?>
    <img src="staff/<?Php echo $row["stf_Photo"]; ?>" width="150" /> <?Php } ?></td>
    <td width="36%" align="right">ජාතික හැඳුනුම්පත් අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_Nid"]; ?></td>
    </tr>
  <tr>
    <td align="right">උපන් දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_dob"]; ?></td>
  </tr>
  <tr>
    <td align="right">ස්ත්‍රී පුරුෂ භාවය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_sex"]; ?></td>
  </tr>
  <tr>
    <td align="right">තනතුර&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_desig"]; ?></td>
  </tr>
  <tr>
    <td align="right">කාර්යාලය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_office"]; ?></td>
  </tr>
  <tr>
    <td align="right">ජංගම දුරකථන අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_mobile"]; ?></td>
  </tr>
  <tr>
    <td align="right">කාර්යාලීය දුරකථන අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_ofstele"]; ?></td>
  </tr>
  <tr>
    <td align="right">ඊමේල් ලිපිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_email"]; ?></td>
  </tr>
  <tr>
    <td align="right">තනතුරෙහි ස්වභාවය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_desigtype"]; ?></td>
  </tr>
  <tr>
    <td align="right">සේවය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_service"]; ?></td>
  </tr>
  <tr>
    <td align="right">පන්තිය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_class"]; ?></td>
  </tr>
  <tr>
    <td align="right">මුල් පත්වීමේ දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_firstappdate"]; ?></td>
  </tr>
  <tr>
    <td align="right">වර්තමාන තනතුරට පත් වූ දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_cdesigdate"]; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td colspan="2" align="left">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4">
    <!--******** Participated trainings**************** -->
        <table width="100%" border="1">
          <tr>
            <td colspan="6" style="font-size:18px;color:#FFF;background-color:#000" height="30">සහභාගී වූ පුහුණු වැඩ සටහන්</td>
            </tr>
          <tr bgcolor="#CCCCCC">
            <td width="5%">අනු අංකය</td>
            <td width="8%" align="center">වර්ෂය</td>
            <td width="11%" align="center">පුහුණුව ආරම්භ වූ දිනය</td>
            <td width="26%">පුහුණු වැඩ සටහන</td>
            <td width="17%">පැවැත්වූ ස්ථානය</td>
            <td width="33%">පුහුණුවේ අන්තර්ගතය</td>
          </tr>
          <?Php
		  	$sqlptr="SELECT * FROM cp_trainingattendance where tratt_empnid='$nid' AND tratt_isparti='Yes' order by tratt_startdate ASC";
			$rsptr=mysqli_query($con,$sqlptr);
			$numberptr=1;
			$numberofRowsptr= mysqli_num_rows($rsptr);
			if($numberofRowsptr !=0){
				while($rowptr=mysqli_fetch_assoc($rsptr)){
			

		  ?>
          <tr>
            <td><?Php echo $numberptr; ?></td>
            <td align="center"><?Php echo substr($rowptr["tratt_startdate"],0,4); ?></td>
            <td align="center"><?Php echo $rowptr["tratt_startdate"]; ?></td>
            <td><?Php echo $rowptr["tratt_atpname"]; ?></td>
            <td>
			<?Php 
				$atpid=$rowptr["tratt_atpid"];
				$sqlatp="SELECT * FROM cp_atp where atp_id='$atpid'";
				$rsatp=mysqli_query($con,$sqlatp);
				$rowatp=mysqli_fetch_assoc($rsatp);
				echo $rowatp["atp_location"];
			
			?>
            </td>
            <td><?Php echo $rowatp["atp_content"]; ?></td>
          </tr>
          <?Php
			$numberptr=$numberptr+1;
		  
				}
			}
		  ?>
        </table>

    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="46%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
  </tr>
            <?Php
		  	$sqlpvt="SELECT * FROM cp_privatetrainings where pvtt_nid='$nid' AND pvtt_approved='Yes' order by pvtt_cstartdate ASC";
			$rspvt=mysqli_query($con,$sqlpvt);
			$numberpvt=1;
			$numberofRowspvt= mysqli_num_rows($rspvt);
			if($numberofRowspvt !=0){
	?>
  <tr>
    <td colspan="4" style="font-size:18px;color:#FFF;background-color:#000" height="30">කාර්යාලීය ප්‍රතිපාදන වලින් සහභාගී වී ඇති වෙනත් පාඨමාලා</td>
    </tr>
  <tr>
    <td colspan="4">
    <!--****************** Private Trainings **********************-->

        <table width="100%" border="1">
          <tr bgcolor="#CCCCCC">
            <td width="4%">අනු අංකය</td>
            <td width="6%" align="center">වර්ෂය</td>
            <td width="9%" align="center">පුහුණුව ආරම්භ වන දිනය</td>
            <td width="9%" align="center">පුහුණුව අවසන් වන දිනය</td>
            <td width="9%" align="center">කාල සීමාව</td>

            <td width="26%">පුහුණු වැඩ සටහන</td>
            <td width="23%">ආයතනය</td>
            <td width="14%" align="center">පාඨමාලා ගාස්තු</td>
          </tr>
          <?Php
				while($rowpvt=mysqli_fetch_assoc($rspvt)){
			

		  ?>
          <tr>
            <td><?Php echo $numberpvt; ?></td>
            <td align="center"><?Php echo substr($rowpvt["pvtt_cstartdate"],0,4); ?></td>
            <td align="center"><?Php echo $rowpvt["pvtt_cstartdate"]; ?></td>
            <td align="center"><?Php echo $rowpvt["pvtt_cenddate"]; ?></td>
            <td align="center"><?Php echo $rowpvt["pvtt_cduration"]; ?></td>
            <td><?Php echo $rowpvt["pvtt_cname"]; ?></td>
            <td><?Php echo $rowpvt["pvtt_cinstitute"]; ?></td>
            <td align="right"><?Php echo number_format($rowpvt["pvtt_fees"],2); ?></td>
            
          </tr>
          <?Php
			$numberpvt=$numberpvt+1;
		  
				}
			}
		  ?>
        </table>
    
    
    
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?Php
      
		  	$sqlpvt="SELECT * FROM cp_foriegnscholars where sch_nid='$nid' order by sch_depaturedate ASC";
			$rspvt=mysqli_query($con,$sqlpvt);
			$numberpvt=1;
			$numberofRowspvt= mysqli_num_rows($rspvt);
			if($numberofRowspvt !=0){

  ?>
  <tr>
    <td colspan="4"  style="font-size:18px;color:#FFF;background-color:#000" height="30">සහභාගී වී ඇති විදේශ ශිෂ්‍යත්ව වැඩ සටහන්</td>
    </tr>
  <tr>
    <td colspan="4">
      <!-- ****************************Foriegn Scholarships *********************-->
      
      <table width="100%" border="1">
        <tr bgcolor="#CCCCCC">
          <td width="4%">අනු අංකය</td>
          <td width="6%" align="center">වර්ෂය</td>
          <td width="9%" align="center">සහභාගී වූ දිනය</td>
          <td width="9%" align="center">නැවත පැමිණි දිනය</td>
          <td width="9%" align="center">කාල සීමාව</td>
          
          <td width="26%">විදේශ ශිෂ්‍යත්වය</td>
          <td width="23%">රට</td>
          <td width="14%" align="center">ආයතනය දැරූ වියදම</td>
          <td >වෙනත් විස්තර</td>

          </tr>
          <?Php
				while($rowpvt=mysqli_fetch_assoc($rspvt)){
			

		  ?>
        <tr>
          <td><?Php echo $numberpvt; ?></td>
          <td align="center"><?Php echo substr($rowpvt["sch_depaturedate"],0,4); ?></td>
          <td align="center"><?Php echo $rowpvt["sch_depaturedate"]; ?></td>
          <td align="center"><?Php echo $rowpvt["sch_arrivedate"]; ?></td>
          <td align="center"><?Php echo $rowpvt["sch_duration"]; ?></td>
          <td><?Php echo $rowpvt["sch_name"]; ?></td>
          <td><?Php echo $rowpvt["sch_country"]; ?></td>
          <td align="right"><?Php echo number_format($rowpvt["sch_spendamnt"],2); ?></td>
          <td align="right"><?Php echo $rowpvt["sch_comment"]; ?></td>
          
          </tr>
        <?Php
			$numberpvt=$numberpvt+1;
		  
				}
			}
		  ?>
        </table>
      
      
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     </table>
   
        
        <?Php	
		}


?>
        </div>
                      

   
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