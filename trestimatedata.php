<?Php
	session_start(); //To use the SESSION variable

	include "db.php"; // call the database connection

	$atpdata = explode('|',$_GET['atpid']);//get the atp id relevent to the training program
	$atpid = $atpdata[0];
	$startDtae = $atpdata[1];

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
        	<!--<button class="tablinks" onclick="openCity(event, 'London')" >තනතුරු ඇතුලත් කරන්න</button>-->
            <button class="tablinks" onclick="openCity(event, 'Paris')">වියදම් ඇස්තමේනුතුව සකස් කිරීම</button>
            <!--<button class="tablinks" onclick="openCity(event, 'col')">Search Employees</button>-->
        </div>
                      
 	<!--	<div id="London" class="tabcontent" style="display:block">
            <?Php require_once("adddesigsnations.php"); ?>
        </div>
      -->                
        <div id="Paris" class="tabcontent" style="display:block">
<?Php
	
	$sql="SELECT * FROM cp_atp where atp_day1='$startDtae' and atp_id='$atpid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);

			// No. of Support Staff
					$noofstaff=0;
					if($rows["atp_supportstaff1"]!=""){
						$noofstaff=$noofstaff+1;
					}
					if($rows["atp_supportstaff2"]!=""){
						$noofstaff=$noofstaff+1;
					}
					if($rows["atp_supportstaff3"]!=""){
						$noofstaff=$noofstaff+1;
					}
					if($rows["atp_supportstaff4"]!=""){
						$noofstaff=$noofstaff+1;
					}
					if($rows["atp_supportstaff5"]!=""){
						$noofstaff=$noofstaff+1;
					}
					if($rows["atp_supportstaff6"]!=""){
						$noofstaff=$noofstaff+1;
					}

		// No. of Resource Persons
		
					$noofresp=0;
					if($rows["atp_resourcep1"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep2"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep3"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep4"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep5"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep6"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep7"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep8"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep9"]!=""){$noofresp=$noofresp+1;}
					if($rows["atp_resourcep10"]!=""){$noofresp=$noofresp+1;}

		// No. of Participants
		
					$sqlapplicant="SELECT * FROM cp_trainingapplications WHERE (tapp_atpid='$atpid' AND tapp_trstartdate='$startDtae') AND tapp_isselected='Yes'";
					$rsapplicant=mysqli_query($con,$sqlapplicant);
					$numberofparticipant= mysqli_num_rows($rsapplicant);
		
			// No. of Drivers
					$dri=1;
					
			// Total Participants		
					$tot=$numberofparticipant+$noofstaff+$noofresp+$dri;
							
?>            

<form name="frmesti" method="post" action="printestimate.php?atpdata=<?Php echo $atpid."|".$startDtae; ?>" target="new">

<table width="100%" border="0">
  <tr>
    <td colspan="4" align="center"  style="font-size:15px;font-weight:bold;">
    <u>කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය <br />වයඹ පළාත
               </u>
    </td>
    </tr>
  <tr>
    <td width="3%">&nbsp;</td>
    <td width="25%" align="right">මගේ අංකය</td>
    <td width="1%">&nbsp;</td>
    <td width="71%"><input type="text" name="mno" value="NWP/CS/T/" /></td>
  </tr>
  <tr>
    <td align="left">1</td>
    <td align="left">පුහුණූ වැඩ සටහනේ නම</td>
    <td>:</td>
    <td align="left"><input type="text" name="tname" value="<?Php echo $rows["atp_trname"]; ?>" size="100%" /></td>
  </tr>
  <tr>
    <td align="left">2</td>
    <td align="left">පුහුණුව ලබන්නේ කවුරුන්ද</td>
    <td>:</td>
    <td align="left"><input type="text" name="targetgroup" value="<?Php echo $rows["atp_targetgroup"]; ?>" size="100%" /></td>
  </tr>
  <tr>
    <td align="left">3</td>
    <td align="left">පුහුණුව පැවැත්වෙන දිනය/දිනයන්</td>
    <td>:</td>
    <td align="left"><input type="text" name="dates" value="<?Php 
				  		echo $rows["atp_day1"]; 
						if($rows["atp_day2"]!="1111-11-11"){echo ", ".$rows["atp_day2"];}
						if($rows["atp_day3"]!="1111-11-11"){echo ", ".$rows["atp_day3"];}
						if($rows["atp_day4"]!="1111-11-11"){echo ", ".$rows["atp_day4"];}
						if($rows["atp_day5"]!="1111-11-11"){echo ", ".$rows["atp_day5"];}
						if($rows["atp_day6"]!="1111-11-11"){echo ", ".$rows["atp_day6"];}
						if($rows["atp_day7"]!="1111-11-11"){echo ", ".$rows["atp_day7"];}
						if($rows["atp_day8"]!="1111-11-11"){echo ", ".$rows["atp_day8"];}
						if($rows["atp_day9"]!="1111-11-11"){echo ", ".$rows["atp_day9"];}
						if($rows["atp_day10"]!="1111-11-11"){echo ", ".$rows["atp_day10"];}
	
	
	 ?>" size="100%"  readonly="readonly"/></td>
  </tr>
  <tr>
    <td align="left">4</td>
    <td align="left">පුහුණුව පැවැත්වෙන ස්ථානය</td>
    <td>:</td>
    <td align="left"><input type="text" name="location" value="<?Php echo $rows["atp_location"]; ?>" size="100%" /></td>
  </tr>
  <tr>
    <td align="left">5</td>
    <td align="left">නේවාසිකද යන වග</td>
    <td>:</td>
    <td align="left"><input type="text" name="accm" value="නැත" size="100%" /></td>
  </tr>
  <tr>
    <td align="left">6</td>
    <td align="left" style="font-weight:700">වියදම් ඇස්තමේන්තුව</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">6.1</td>
    <td align="left">ආහාර පාන</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;උදෑසන තේ</td>
    <td>:</td>
    <td align="left">
  සම්පූර්ණ සහභාගීත්වය <input type="text" name="totparti" value="<?Php echo $tot; ?>" size="10" style="text-align:center" /> 
  X ඒකක මිළ <input type="text" name="unitprice"  size="10"  style="text-align:center" /> 
  X දින <input type="text" name="noofdays" value="<?Php echo $rows["atp_noofdays"]; ?>" size="10"  style="text-align:center" />
    </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;සවස තේ</td>
    <td>:</td>
    <td align="left">
  සම්පූර්ණ සහභාගීත්වය <input type="text" name="etparti" value="<?Php echo $tot; ?>" size="10" style="text-align:center" /> 
  X ඒකක මිළ <input type="text" name="etup"  size="10"  style="text-align:center" /> 
  X දින <input type="text" name="etnd" value="<?Php echo $rows["atp_noofdays"]; ?>" size="10"  style="text-align:center" />
    
    </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;දිවා ආහාරය</td>
    <td>:</td>
    <td align="left">
    
  සම්පූර්ණ සහභාගීත්වය <input type="text" name="lparti" value="<?Php echo $noofstaff+$noofresp+$dri; ?>" size="10" style="text-align:center" /> 
  X ඒකක මිළ <input type="text" name="lup"  size="10"  style="text-align:center" /> 
  X දින <input type="text" name="lnd" value="<?Php echo $rows["atp_noofdays"]; ?>" size="10"  style="text-align:center" />
    
    
    </td>
  </tr>
  <tr>
    <td align="left">6.2</td>
    <td align="left">නවාතැන් ගාස්තු</td>
    <td>:</td>
    <td align="left"><input type="text" name="accamnt"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.3</td>
    <td align="left">ශාලා ගාස්තු</td>
    <td>:</td>
    <td align="left"><input type="text" name="hallamnt"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.4</td>
    <td align="left">ලිපි ද්‍රව්‍ය</td>
    <td>:</td>
    <td align="left"><input type="text" name="stati"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.5</td>
    <td align="left">දේශන ගාස්තු</td>
    <td>:</td>
    <td align="left">
  </tr>
  <tr>
    <td align="left"></td>
    <td align="right">පළමු සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">
    <input type="text" name="hp" value="800" size="5" /> X 
    <input type="text" name="nd" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh" value="6" size="5" /> </td>
  </tr>

      <?Php
	if($rows["atp_resourcep2"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">දෙවන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp2" value="800" size="5" /> X 
    <input type="text" name="nd2" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh2" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>
    
      <?Php
	if($rows["atp_resourcep3"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">තෙවන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp3" value="800" size="5" /> X 
    <input type="text" name="nd3" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh3" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

       <?Php
	if($rows["atp_resourcep4"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">සිව්වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp4" value="800" size="5" /> X 
    <input type="text" name="nd4" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh4" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep5"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">පස්වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp5" value="800" size="5" /> X 
    <input type="text" name="nd5" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh5" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep6"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">සය වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp6" value="800" size="5" /> X 
    <input type="text" name="nd6" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh6" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep7"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">සත්වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp7" value="800" size="5" /> X 
    <input type="text" name="nd7" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh7" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep8"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">අට වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp8" value="800" size="5" /> X 
    <input type="text" name="nd8" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh8" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep9"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">නව වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp9" value="800" size="5" /> X 
    <input type="text" name="nd9" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh9" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>

      <?Php
	if($rows["atp_resourcep10"]!=""){
	?>

  <tr>
    <td align="left">&nbsp;</td>
    <td align="right">දස වන සම්පත්දායකයා</td>
    <td>&nbsp;</td>
    <td align="left">

    <input type="text" name="hp10" value="800" size="5" /> X 
    <input type="text" name="nd10" value="<?Php echo $rows["atp_noofdays"];?>" size="5" /> X 
    <input type="text" name="nh10" value="6" size="5" /> </td>
    
    </td>
  </tr>
  
      <?Php
	}
	?>
 
  <tr>
    <td align="left">6.6</td>
    <td align="left">උපකරණ හා නඩත්තු ගාස්තු</td>
    <td>:</td>
    <td align="left"><input type="text" name="maint"  size="5" style="text-align:right" value="125.00" /> X දින ගණන
    <input type="text" name="mdays"  size="5" style="text-align:right" value="<?Php echo $rows["atp_noofdays"];?>" /> X සහභාගි වන්නන් ගණන 
    <input type="text" name="mparti"  size="5" style="text-align:right" value="<?Php echo $numberofparticipant; ?>" />
    </td>
  </tr>
  <tr>
    <td align="left">6.7</td>
    <td align="left">සමායෝජක දීමනා</td>
    <td>:</td>
    <td align="left"><input type="text" name="coord"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.8</td>
    <td align="left">වැඩමුළු අධීක්ෂණ දීමනාව</td>
    <td>:</td>
    <td align="left"><input type="text" name="inspect"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.9</td>
    <td align="left">ලිපිකරු සහාය දීමනාව</td>
    <td>:</td>
    <td align="left"><input type="text" name="clari"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.10</td>
    <td align="left">කම්කරු සහාය දීමනා</td>
    <td>:</td>
    <td align="left"><input type="text" name="labor"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.11</td>
    <td align="left">ඡායා පිටපත්</td>
    <td>:</td>
    <td align="left"><input type="text" name="photocopy"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.12</td>
    <td align="left">කාර්යාල පොදු වියදම්</td>
    <td>:</td>
    <td align="left"><input type="text" name="offex"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.13</td>
    <td align="left">බැහැර සම්පත්දායක ගමන් වියදම්</td>
    <td>:</td>
    <td align="left"><input type="text" name="resp"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.14</td>
    <td align="left">අවිනිශ්චිත වියදම්</td>
    <td>:</td>
    <td align="left"><input type="text" name="awin"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.15</td>
    <td align="left">වැට්</td>
    <td>:</td>
    <td align="left"><input type="text" name="vatamnt"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.16</td>
    <td align="left">මල්ටිමීඩියා/ප්‍රොජෙක්ටර්</td>
    <td>:</td>
    <td align="left"><input type="text" name="multi"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.17</td>
    <td align="left">සහාය දේශන ගාස්තු</td>
    <td>:</td>
    <td align="left"><input type="text" name="asstlec"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.18</td>
    <td align="left">අන්තර්ජාල පහසුකම්</td>
    <td>:</td>
    <td align="left"><input type="text" name="internetamnt"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">6.19</td>
    <td align="left">වෙනත්</td>
    <td>:</td>
    <td align="left"><input type="text" name="atheramnt"  size="30" style="text-align:right" /></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="justify"><textarea style="width:100%" name="des">ඉහත පාඨමාලාව නියමිත දිනවල පැවැත්වීමටත්, ඒ සඳහා ඇස්තමේන්තුගත වියදම පළාත් සභා අරමුදලින් ලබාගෙන වියදම් දැරීමටත් අනුමැතිය පතමි. මෙම පාඨමාලාවේ සමායෝජක ලෙස එම්.ඒ.ආර්. සුදර්ශනී මිය කටයුතු කරනු ඇත.
  </textarea>
    </td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><input type="submit" name="submit" value=" මුද්‍රණය කරන්න " style="color:#FFF;background-color:#000;font-family:'Malithi Web';height:50px;width:40%;" /></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>


</form>
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