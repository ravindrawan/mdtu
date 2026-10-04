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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="scripts/tabpanel.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<title>Management Development & Training Unit - Central Provincial Council</title>
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
        	<button class="tablinks" onclick="openCity(event, 'London')" >ව්‍යාපෘති වාර්තාව සඳහා අවශ්‍ය තොරතුරු ඇතුලත් කරන්න</button>
            <!--<button class="tablinks" onclick="openCity(event, 'col')">Search Employees</button>-->
        </div>
                      
 		<div id="London" class="tabcontent" style="display:block">
            <form name="frm" method="post" enctype="multipart/form-data" 
            action="printprojectreport.php?atpid=<?Php echo $atpid."|".$startDtae; ?>" target="new">
            
<?Php
	
	$sql="SELECT * FROM cp_atp where atp_day1='$startDtae' and atp_id='$atpid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);

?>            
			<table width="100%" border="0" style="font-family:Verdana, Geneva, sans-serif;font-size:12px">
           <!--   <tr>
                <td width="2%">&nbsp;</td>
                <td width="31%">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2" align="left">
                	මගේ අංකය සීපීසී/සීඑස්/2/21/TRP-1/18<br />
                	මධ්‍යම පළාත් ප්‍රධාන ලේකම් කාර්යාලය<br />
                    පිරිස් හා පුහුණු අංශය<br />
                    පල්ලෙකැලේ<br />
                    <?Php echo date("Y.m."); ?><br /><br />
                </td>
              </tr> -->
              <tr>
                <td>&nbsp;</td>
                <td colspan="5" align="center" style="font-size:15px;font-weight:bold;">
                <u>කළමනාකරණ සංවර්ධන පුහුණු ආයතනය - වයඹ පළාත් සභාව<br />
                පුහුණු වැඩ සටහන් සඳහා වියදම් ඇස්තමේන්තුව - <?Php echo date("Y"); ?></u>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td width="8%">&nbsp;</td>
                <td width="28%">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">වැඩමුළුවේ නම</td>
                <td width="7%" align="right">-&nbsp;</td>
                <td colspan="3" align="left"><?Php echo $rows["atp_trname"]; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">කාල සීමාව</td>
                <td align="right">-&nbsp;</td>
                <td colspan="3" align="left">
                  <?Php 
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
						
					?>                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">ස්ථානය</td>
                <td align="right">-&nbsp;</td>
                <td colspan="3" align="left"><?Php echo $rows["atp_location"]; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">වැය ශීර්ෂය</td>
                <td align="right">-&nbsp;</td>
                <td colspan="3" align="left"><span id="sprytextfield1">
                  <input type="text" name="vote" id="text1" />
                  <span class="textfieldRequiredMsg">වැය ශීර්ෂය ඇතුලත් කරන්න</span></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">&nbsp;</td>
                <td colspan="2" align="right">&nbsp;</td>
                <td colspan="2" align="left">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5" align="left">
                
                
                <table width="100%" border="1" style="border-collapse:collapse">
                  <tr style="font-weight:bold">
                    <td width="14%" align="center">අනු අංකය</td>
                    <td width="65%" align="center">සහභාගීවන්නන්</td>
                    <td width="21%" align="center">සංඛ්‍යාව</td>
                  </tr>
                  <tr>
                    <td align="center">1</td>
                    <td>
                    <?Php
					$sqlapplicant="SELECT * FROM cp_trainingapplications WHERE (tapp_atpid='$atpid' AND tapp_trstartdate='$startDtae') AND tapp_isselected='Yes'";
					$rsapplicant=mysqli_query($con,$sqlapplicant);
					$numberofparticipant= mysqli_num_rows($rsapplicant);
					?>
                    <input type="text" name="participant" value="<?Php echo $rows["atp_targetgroup"]; ?>" size="100"  />
                    </td>
                    <td align="center"><input type="text" name="noofparti" value="<?Php echo $numberofparticipant; ?>" size="25" style="text-align:center"  /></td>
                  </tr>
                  <tr>
                    <td align="center">2</td>
                    <td><input type="text" name="supstaff" value="පිරිස් හා පුහුණු අංශයේ කාර්යමණ්ඩලය" size="100"  /></td>
                    <td align="center">
                    <?Php
					$noofstaff="";
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

					?>
                    <input type="text" name="noofstaff" value="<?Php echo $noofstaff; ?>" size="25" style="text-align:center"  />
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td><input type="text" name="respersons" value="සම්පත්දායකයින්" size="100"  /></td>
                    <td align="center">
                    
                    <?Php
					$noofresp="";
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

					?>
                    <input type="text" name="noofresp" value="<?Php echo $noofresp; ?>" size="25" style="text-align:center"   />
                    
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td>
                    <td><input type="text" name="drivers" value="රියදුරන්" size="100"  /></td>
                    <td align="center">
                    <input type="text" name="noofdrv" value="1" size="25" style="text-align:center"  />
</td>
                  </tr>
                  <tr style="font-weight:bold">
                    <td align="center">&nbsp;</td>
                    <td>එකතුව</td>
                    <td align="center" style="border-bottom:double;border-top:thick">
                    <?Php
					$tot=$numberofparticipant+$noofstaff+$noofresp+1;
					?>
                    <input type="text" name="totstf" value="<?Php echo $tot; ?>" size="25" style="text-align:center" /></td>
                  </tr>
                </table>
                
                
                
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5"><input type="text" name="topic2" value="(02) <?Php echo $rows["atp_location"]; ?> මගින් අනුමත කර ඇති සංග්‍රහ වියදම්" size="140" style="border:none" /></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5">
                
                <!--*************** Food and Beverages ************************************-->
                
                <table width="100%" border="1" style="border-collapse:collapse">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>එකතුව</td>
                  </tr>
                  <tr>
                    <td colspan="3">දිනය - 
                    <?Php
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
					?>
                    </td>
                    </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u><b>පෙරවරු තේ</b></u></td>
                    </tr>
                  <tr>
                    <td>
                    <?Php
					$sqlf1="SELECT * FROM cp_food order by fd_price";
					$rsf1=mysqli_query($con,$sqlf1);
					
					$norowsf1= mysqli_num_rows($rsf1);
					if($norowsf1 !=0){
					?>
                    	<select name="f1">
                        	<option></option>
                    <?Php	
						while($rowf1=mysqli_fetch_assoc($rsf1)){
					?>
                    		<option value="<?Php echo $rowf1["fd_id"]; ?>"><?Php echo $rowf1["fd_name"]." - රු.".$rowf1["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    </td>
                    <td>
					<input type="text" name="totfd1" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates1" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>දිවා ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf2="SELECT * FROM cp_food order by fd_price";
					$rsf2=mysqli_query($con,$sqlf2);
					
					$norowsf2= mysqli_num_rows($rsf2);
					if($norowsf2 !=0){
					?>
                    	<select name="f2">
                        	<option></option>
                    <?Php	
						while($rowf2=mysqli_fetch_assoc($rsf2)){
					?>
                    		<option value="<?Php echo $rowf2["fd_id"]; ?>"><?Php echo $rowf2["fd_name"]." - රු.".$rowf2["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd2" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates2" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>උදෑසන ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf3="SELECT * FROM cp_food order by fd_price";
					$rsf3=mysqli_query($con,$sqlf3);
					
					$norowsf3= mysqli_num_rows($rsf3);
					if($norowsf3 !=0){
					?>
                    	<select name="f3">
                        	<option></option>
                    <?Php	
						while($rowf3=mysqli_fetch_assoc($rsf3)){
					?>
                    		<option value="<?Php echo $rowf3["fd_id"]; ?>"><?Php echo $rowf3["fd_name"]." - රු.".$rowf3["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd3" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates3" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>රාත්‍රී ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf4="SELECT * FROM cp_food order by fd_price";
					$rsf4=mysqli_query($con,$sqlf4);
					
					$norowsf4= mysqli_num_rows($rsf4);
					if($norowsf4 !=0){
					?>
                    	<select name="f4">
                        	<option></option>
                    <?Php	
						while($rowf4=mysqli_fetch_assoc($rsf4)){
					?>
                    		<option value="<?Php echo $rowf4["fd_id"]; ?>"><?Php echo $rowf4["fd_name"]." - රු.".$rowf4["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd4" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates4" value="<?Php echo $rows["atp_noofdays"]-1; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>පස්වරු තේ</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf5="SELECT * FROM cp_food order by fd_price";
					$rsf5=mysqli_query($con,$sqlf5);
					
					$norowsf5= mysqli_num_rows($rsf5);
					if($norowsf5 !=0){
					?>
                    	<select name="f5">
                        	<option></option>
                    <?Php	
						while($rowf5=mysqli_fetch_assoc($rsf5)){
					?>
                    		<option value="<?Php echo $rowf5["fd_id"]; ?>"><?Php echo $rowf5["fd_name"]." - රු.".$rowf5["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd5" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates5" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>
                    
                    <?Php
					$sqlf6="SELECT * FROM cp_food order by fd_price";
					$rsf6=mysqli_query($con,$sqlf6);
					
					$norowsf6= mysqli_num_rows($rsf6);
					if($norowsf6 !=0){
					?>
                    	<select name="f6">
                        	<option></option>
                    <?Php	
						while($rowf6=mysqli_fetch_assoc($rsf6)){
					?>
                    		<option value="<?Php echo $rowf6["fd_id"]; ?>"><?Php echo $rowf6["fd_name"]." - රු.".$rowf6["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd6" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates6" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf7="SELECT * FROM cp_food order by fd_price";
					$rsf7=mysqli_query($con,$sqlf7);
					
					$norowsf7= mysqli_num_rows($rsf7);
					if($norowsf7 !=0){
					?>
                    	<select name="f7">
                        	<option></option>
                    <?Php	
						while($rowf7=mysqli_fetch_assoc($rsf7)){
					?>
                    		<option value="<?Php echo $rowf7["fd_id"]; ?>"><?Php echo $rowf7["fd_name"]." - රු.".$rowf7["fd_price"]; ?></option>
                    <?Php		
						}
					?>
						</select>
					<?Php	
					}
					
					?>
                    
                    
                    </td>
                    <td>
					<input type="text" name="totfd7" value="<?Php echo $tot; ?>" style="text-align:center" size="10" />
                    &nbsp; X &nbsp; දින
                    <input type="text" name="nodates7" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>

                  <tr>
                    <td>ප්‍රවාහන වියදම්</td>
                    <td>
                    රු. <input type="text" name="trans"  style="text-align:center" size="10" />
                    
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  </table>
                
                
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>(03) නේවාසික පහසුකම්</td>
                <td colspan="2">&nbsp;</td>
                <td align="right">රු.&nbsp;</td>
                <td>                    <input type="text" name="accomm" style="text-align:center" size="20" />
</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5">
                
                	<table>
                    	<tr>
                        	<td valign="top">(04)</td>
                            <td align="justify">මධ්‍යම පළාත් ආණ්ඩුකාර ලේකම්ගේ අංක සීපීසී/02/01/33 දිනැති 2010.08.09 හා 2011.05.31 දිනැති ලිපි මගින් මධ්‍යම පළාත් ගරු ආණ්ඩුකාරතුමාගේ අනුමැතිය ලැබී ඇති සම්පත්දායක දීමනා ඇතුළු අනෙකුත් ගෙවීම්
                            </td>
                        </tr>
                    </table>
                
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5">
                
                <table width="100%" border="1" style="border-collapse:collapse">
                  <tr>
                    <td>සම්පත්දායක දීමනා</td>
                    <td>
                    රු. <input type="text" name="respamnt" size="10" style="text-align:center" />
                    X පැය <input type="text" name="hrs" size="10" value="6" style="text-align:center" />
                    X දින <input type="text" name="rpdays" size="10" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" />
                    
                    </td>
                  </tr>
                  <tr>
                    <td>සම්බන්ධීකරණ දීමනාව</td>
                    <td>
                    රු. <input type="text" name="coodamnt" size="10" style="text-align:center" />
                    
                    X දින <input type="text" name="cooddays" size="10" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" />
                    
                    </td>
                  </tr>
                  <tr>
                    <td>ලිපිකරු දීමනාව</td>
                    <td>
                    රු. <input type="text" name="clariamnt" size="10" style="text-align:center" />
                    
                    X දින <input type="text" name="claridays" size="10" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" />
                    
                    </td>
                  </tr>
                  <tr>
                    <td>කා.කා.ස. දීමනාව</td>
                    <td>
                    රු. <input type="text" name="kksamnt" size="10" style="text-align:center" />
                    
                    X දින <input type="text" name="kksdays" size="10" value="<?Php echo $rows["atp_noofdays"]; ?>" style="text-align:center" />
                    
                    </td>
                  </tr>
                  <tr>
                    <td>කඩදාසි යතුරු ලියනය</td>
                    <td>
                    රු. <input type="text" name="typeamnt" size="10" style="text-align:center" />
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>කඩදාසි රෝනියෝ කිරීම</td>
                    <td>
                    රු. <input type="text" name="ronioamnt" size="10" style="text-align:center" />
                    
                    </td>
                  </tr>
                </table>
                
                
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5">(05) වෙනත් වියදම්</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="5">
                
                
                 <table width="100%" border="1" style="border-collapse:collapse">
                  <tr>
                    <td>වැඩමුළුව සඳහා අවශ්‍ය ලිපි ද්‍රව්‍ය</td>
                    <td>
                    රු. <input type="text" name="stationaryamnt" size="10" style="text-align:center" />
                    
                    </td>
                  </tr>
                  <tr>
                    <td>ඉන්ධන</td>
                    <td>
                    දින <input type="text" name="fualdates" value="<?Php echo $rows["atp_noofdays"]; ?>" size="10" style="text-align:center" />
                    රු. <input type="text" name="fualamnt" size="10" style="text-align:center" />
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>වෙනත් වියදම්</td>
                    <td>
                    රු. <input type="text" name="otherexpence" size="10" style="text-align:center" />
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>සංයුක්ත දීමනා</td>
                    <td>
                      රු. <input type="text" name="claim" size="10" style="text-align:center" />
                      
                      
                      </td>
                  </tr>
                  </table>

                
                
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2" align="center"><input type="submit" name="submit" value=" ඇතුලත් කරන්න " /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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