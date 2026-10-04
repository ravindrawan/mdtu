<?Php

	include "db.php"; // call the database connection

	$atpdata = explode('|',$_GET['atpid']);//get the atp id relevent to the training program
	$atpid = $atpdata[0];
	$startDtae = $atpdata[1];


	$vote=trim(htmlspecialchars($_POST["vote"]));
	$participant=trim(htmlspecialchars($_POST["participant"]));
	$noofparti=trim(htmlspecialchars($_POST["noofparti"]));
	$supstaff=trim(htmlspecialchars($_POST["supstaff"]));
	$noofstaff=trim(htmlspecialchars($_POST["noofstaff"]));
	$respersons=trim(htmlspecialchars($_POST["respersons"]));
	$noofresp=trim(htmlspecialchars($_POST["noofresp"]));
	$drivers=trim(htmlspecialchars($_POST["drivers"]));
	$noofdrv=trim(htmlspecialchars($_POST["noofdrv"]));
	$totstf=$noofparti+$noofstaff+$noofresp+$noofdrv;
	

	$topic2=trim(htmlspecialchars($_POST["topic2"]));

	$f1=trim(htmlspecialchars($_POST["f1"]));
	$totfd1=trim(htmlspecialchars($_POST["totfd1"]));
	$nodates1=trim(htmlspecialchars($_POST["nodates1"]));

	$f2=trim(htmlspecialchars($_POST["f2"]));
	$totfd2=trim(htmlspecialchars($_POST["totfd2"]));
	$nodates2=trim(htmlspecialchars($_POST["nodates2"]));

	$f3=trim(htmlspecialchars($_POST["f3"]));
	$totfd3=trim(htmlspecialchars($_POST["totfd3"]));
	$nodates3=trim(htmlspecialchars($_POST["nodates3"]));

	$f4=trim(htmlspecialchars($_POST["f4"]));
	$totfd4=trim(htmlspecialchars($_POST["totfd4"]));
	$nodates4=trim(htmlspecialchars($_POST["nodates4"]));

	$f5=trim(htmlspecialchars($_POST["f5"]));
	$totfd5=trim(htmlspecialchars($_POST["totfd5"]));
	$nodates5=trim(htmlspecialchars($_POST["nodates5"]));

	$f6=trim(htmlspecialchars($_POST["f6"]));
	$totfd6=trim(htmlspecialchars($_POST["totfd6"]));
	$nodates6=trim(htmlspecialchars($_POST["nodates6"]));

	$f7=trim(htmlspecialchars($_POST["f7"]));
	$totfd7=trim(htmlspecialchars($_POST["totfd7"]));
	$nodates7=trim(htmlspecialchars($_POST["nodates7"]));

	$trans=trim(htmlspecialchars($_POST["trans"]));
	$accomm=trim(htmlspecialchars($_POST["accomm"]));

	$respamnt=trim(htmlspecialchars($_POST["respamnt"]));
	$hrs=trim(htmlspecialchars($_POST["hrs"]));
	$rpdays=trim(htmlspecialchars($_POST["rpdays"]));

	$coodamnt=trim(htmlspecialchars($_POST["coodamnt"]));
	$cooddays=trim(htmlspecialchars($_POST["cooddays"]));

	$clariamnt=trim(htmlspecialchars($_POST["clariamnt"]));
	$claridays=trim(htmlspecialchars($_POST["claridays"]));

	$kksamnt=trim(htmlspecialchars($_POST["kksamnt"]));
	$kksdays=trim(htmlspecialchars($_POST["kksdays"]));

	$typeamnt=trim(htmlspecialchars($_POST["typeamnt"]));
	$ronioamnt=trim(htmlspecialchars($_POST["ronioamnt"]));

	$stationaryamnt=trim(htmlspecialchars($_POST["stationaryamnt"]));

	$fualamnt=trim(htmlspecialchars($_POST["fualamnt"]));
	$fualdates=trim(htmlspecialchars($_POST["fualdates"]));

	$otherexpence=trim(htmlspecialchars($_POST["otherexpence"]));
	$claim=trim(htmlspecialchars($_POST["claim"]));

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
<center>
<table width="100%" border="0" style="position:relative;border-collapse:collapse">
  <tr>
    <td>
<!-- ********************** Designations ********************************************** -->
<table width="80%" border="0">
  <tr>
    <td  valign="top" align="center">
                      
            <form name="frm" method="post" enctype="multipart/form-data" 
            action="" target="new">
            
<?Php
	
	$sql="SELECT * FROM cp_atp where atp_day1='$startDtae' and atp_id='$atpid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);

?>            
			<table width="100%" border="0" style="font-family:Verdana, Geneva, sans-serif;font-size:12px">
              <tr>
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
              </tr>
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
                <td width="2%">&nbsp;</td>
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
                <td colspan="3" align="left">
                  <?Php echo $vote; ?>
                  </td>
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
                    <td> <?Php echo $participant; ?></td>
                    <td align="center"><?Php echo $noofparti; ?></td>
                  </tr>
                  <tr>
                    <td align="center">2</td>
                    <td><?Php echo $supstaff; ?></td>
                    <td align="center">
                    <?Php echo $noofstaff; ?>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td><?Php echo $respersons; ?></td>
                    <td align="center">
                    	<?Php echo $noofresp; ?>
                    
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td>
                    <td><?Php echo $drivers; ?></td>
                    <td align="center">
                   	<?Php echo $noofdrv; ?>
					</td>
                  </tr>
                  <tr style="font-weight:bold">
                    <td align="center">&nbsp;</td>
                    <td>එකතුව</td>
                    <td align="center" style="border-bottom:double;border-top:thick">
                    <?Php echo $totstf; ?>
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
                <td colspan="5"><?Php echo $topic2; ?></td>
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
                    <td align="center">එකතුව</td>
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
					                    
					$sqlf1="SELECT * FROM cp_food where fd_id='$f1'";
					$rsf1=mysqli_query($con,$sqlf1);
					$rowf1=mysqli_fetch_assoc($rsf1);

					echo $rowf1["fd_name"]; 
					
					 ?>
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf1["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd1; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates1; ?>
                    </td>
                    <td align="right">රු. <?Php echo number_format(($rowf1["fd_price"]*$totfd1*$nodates1),2); 
									$f1t=$rowf1["fd_price"]*$totfd1*$nodates1;
					?></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>දිවා ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf2="SELECT * FROM cp_food where fd_id='$f2'";
					$rsf2=mysqli_query($con,$sqlf2);
					$rowf2=mysqli_fetch_assoc($rsf2);

					echo $rowf2["fd_name"]; 
					?>

                    
                    
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf2["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd2; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates2; ?>
                    
                    </td>
                    <td align="right">රු. <?Php echo number_format(($rowf2["fd_price"]*$totfd2*$nodates2),2); 
										$f2t=$rowf2["fd_price"]*$totfd2*$nodates2;
					?></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>උදෑසන ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    <?Php
					$sqlf3="SELECT * FROM cp_food where fd_id='$f3'";
					$rsf3=mysqli_query($con,$sqlf3);
					$rowf3=mysqli_fetch_assoc($rsf3);

					echo $rowf3["fd_name"]; 
					?>
					
                    
                    
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf3["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd3; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates3; ?>
                    
                    </td>
                    <td align="right">රු. <?Php echo $f3t=number_format(($rowf3["fd_price"]*$totfd3*$nodates3),2); 
										$f3t=$rowf3["fd_price"]*$totfd3*$nodates3;
					?></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>රාත්‍රී ආහාරය</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf4="SELECT * FROM cp_food where fd_id='$f4'";
					$rsf4=mysqli_query($con,$sqlf4);
					$rowf4=mysqli_fetch_assoc($rsf4);

					echo $rowf4["fd_name"]; 
					?>
                    
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf4["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd4; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates4; ?>
                    
                    </td>
                    <td align="right">රු. <?Php echo number_format(($rowf4["fd_price"]*$totfd4*$nodates4),2); 
							$f4t=$rowf4["fd_price"]*$totfd4*$nodates4;
					?></td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-weight:bold"><u>පස්වරු තේ</u></td>
                    </tr>
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf5="SELECT * FROM cp_food where fd_id='$f5'";
					$rsf5=mysqli_query($con,$sqlf5);
					$rowf5=mysqli_fetch_assoc($rsf5);

					echo $rowf5["fd_name"]; 
					?>
                    
                    
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf5["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd5; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates5; ?>
                    
                    
                    </td>
                    <td align="right">රු. <?Php echo number_format(($rowf5["fd_price"]*$totfd5*$nodates5),2); 
									$f5t=$rowf5["fd_price"]*$totfd5*$nodates5;
					?></td>
                  </tr>

                  <tr>
                    <td>
                    
                    <?Php
					$sqlf6="SELECT * FROM cp_food where fd_id='$f6'";
					$rsf6=mysqli_query($con,$sqlf6);
					$rowf6=mysqli_fetch_assoc($rsf6);

					echo $rowf6["fd_name"]; 
					?>
                    
                    
                    </td>
                    <td>
                    රු.
                    <?Php echo number_format($rowf6["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd6; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates6; ?>
                    
                    </td>
                    <td align="right">රු. <?Php echo number_format(($rowf6["fd_price"]*$totfd6*$nodates6),2); 
								$f6t=$rowf6["fd_price"]*$totfd6*$nodates6;
					?></td>
                  </tr>
                  
                  <tr>
                    <td>
                    
                    <?Php
					$sqlf7="SELECT * FROM cp_food where fd_id='$f7'";
					$rsf7=mysqli_query($con,$sqlf7);
					$rowf7=mysqli_fetch_assoc($rsf7);
					if($rowf7["fd_name"]!==""){
					echo $rowf7["fd_name"]; 
					}
					?>
                    
                    
                    </td>
                    <td>
                    <?Php
					if($rowf7["fd_name"]!=""){
					?>
                    රු.
                    <?Php echo number_format($rowf7["fd_price"],2); ?>
                    &nbsp; X &nbsp;
					<?Php echo $totfd7; ?>
                    &nbsp; X &nbsp; දින
                    <?Php echo $nodates7; 
					
					}
					?>
                    
                    </td>
                    <td align="right">
                    <?Php
					if($rowf7["fd_name"]!=""){
					?>
                    රු. <?Php echo number_format(($rowf7["fd_price"]*$totfd7*$nodates7),2); 
					$f7t=$rowf7["fd_price"]*$totfd7*$nodates7;
					}
					else{
					$f7t=0;	
					}
					?>
                    
                    </td>
                  </tr>

                  <tr>
                    <td>ප්‍රවාහන වියදම්</td>
                    <td>&nbsp;
                    
                    
                    </td>
                    <td align="right">
                    <?Php
					if($trans!="" && is_numeric($trans)){
					?>
                    රු. <?Php echo $f8t=number_format($trans,2); 
											$f8t=$trans;
					}
					else{
						$f8t=0;
					}
					?></td>
                  </tr>
                  <tr style="font-weight:bold">
                    <td colspan="2" align="center">එකතුව</td>
                    <td align="right">රු. <?Php echo $fst=number_format(($f1t+$f2t+$f3t+$f4t+$f5t+$f6t+$f7t+$f8t),2); 
								$fst=$f1t+$f2t+$f3t+$f4t+$f5t+$f6t+$f7t+$f8t;
					?></td>
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
                <td align="right">&nbsp;</td>
                <td align="right">                 
                 <?Php 
				if($accomm!="" && is_numeric($accomm)){
				?>
                 රු.&nbsp; 
                <?Php
				echo number_format($accomm,2); 
				}
				?> 
                
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
                    <td width="44%">සම්පත්දායක දීමනා</td>
                    <td width="37%">
                    රු. <?Php if($respamnt!="" && is_numeric($respamnt)){echo number_format($respamnt,2);} ?>
                    X පැය <?Php echo $hrs; ?>
                    X දින <?Php echo $rpdays;?>
                    
                    </td>
                    <td width="19%" align="right">
                    <?Php
						if($respamnt!="" || $hrs!="" || $rpdays!=""){
							if(is_numeric($respamnt) && is_numeric($hrs) && is_numeric($rpdays)){
							?>
                            රු. 
                            <?Php
								echo number_format(($respamnt*$hrs*$rpdays),2);
								$rt1=$respamnt*$hrs*$rpdays;
							}
							else{
								echo "වැරදි දත්ත ඇතුලත් කර ඇත";	
							}
						}
					?>
                    </td>
                  </tr>
                  <tr>
                    <td>සම්බන්ධීකරණ දීමනාව</td>
                    <td>
                    රු. <?Php if($coodamnt!="" && is_numeric($coodamnt)){echo number_format($coodamnt,2);} ?>
                    X දින <?Php echo $cooddays;?>
                    
                    </td>
                    <td align="right">
                    <?Php
						if($coodamnt!="" || $cooddays!=""){
							if(is_numeric($coodamnt) && is_numeric($cooddays)){
							?>
                            රු. 
                            <?Php
								echo number_format(($coodamnt*$cooddays),2);
								$rt2=$coodamnt*$cooddays;
							}
							else{
								echo "වැරදි දත්ත ඇතුලත් කර ඇත";	
							}
						}
					?>
                    
                    </td>
                  </tr>
                  <tr>
                    <td>ලිපිකරු දීමනාව</td>
                    <td>
                    රු. <?Php if($clariamnt!="" && is_numeric($clariamnt)){echo number_format($clariamnt,2);} ?>
                    X දින <?Php echo $claridays;?>
                    
                    </td>
                    <td align="right">
                    <?Php
						if($clariamnt!="" || $claridays!=""){
							if(is_numeric($clariamnt) && is_numeric($claridays)){
							?>
                            රු. 
                            <?Php
								echo number_format(($clariamnt*$claridays),2);
								$rt3=$clariamnt*$claridays;
							}
							else{
								echo "වැරදි දත්ත ඇතුලත් කර ඇත";	
							}
						}
					?>
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>කා.කා.ස. දීමනාව</td>
                    <td>
                    රු. <?Php if($kksamnt!="" && is_numeric($kksamnt)){echo number_format($kksamnt,2);} ?>
                    X දින <?Php echo $kksdays;?>
                    
                    </td>
                    <td align="right">
                    <?Php
						if($kksamnt!="" || $kksdays!=""){
							if(is_numeric($kksamnt) && is_numeric($kksdays)){
							?>
                            රු. 
                            <?Php
								echo number_format(($kksamnt*$kksdays),2);
								$rt4=$kksamnt*$kksdays;
							}
							else{
								echo "වැරදි දත්ත ඇතුලත් කර ඇත";	
							}
						}
					?>
                    
                    </td>
                  </tr>
                  <tr>
                    <td>කඩදාසි යතුරු ලියනය</td>
                    <td align="left">
                    රු. <?Php if($typeamnt!="" && is_numeric($typeamnt)){echo number_format($typeamnt,2);} ?>
                    
                    
                    </td>
                    <td align="right">රු. <?Php if($typeamnt!="" && is_numeric($typeamnt)){echo number_format($typeamnt,2);
												$rt5=$typeamnt;
					} ?></td>
                  </tr>
                  <tr>
                    <td>කඩදාසි රෝනියෝ කිරීම</td>
                    <td  align="left">
                    රු. <?Php if($ronioamnt!="" && is_numeric($ronioamnt)){echo number_format($ronioamnt,2);} ?>
                    
                    </td>
                    <td  align="right">රු. <?Php if($typeamnt!="" && is_numeric($typeamnt)){echo number_format($typeamnt,2);
										$rt6=$typeamnt;
					} ?></td>
                  </tr>
                  <tr style="font-weight:bold">
                    <td colspan="2" align="center">එකතුව</td>
                    <td  align="right">රු. <?Php echo number_format(($rt1+$rt2+$rt3+$rt4+$rt5+$rt6),2); ?></td>
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
                    <td width="45%">වැඩමුළුව සඳහා අවශ්‍ය ලිපි ද්‍රව්‍ය</td>
                    <td width="36%">
                    රු. <?Php if($stationaryamnt!="" && is_numeric($stationaryamnt)){echo number_format($stationaryamnt,2);} ?>
                    
                    </td>
                    <td width="19%" align="right">රු. <?Php if($stationaryamnt!="" && is_numeric($stationaryamnt)){echo number_format($stationaryamnt,2);
					$ot1=$stationaryamnt;
					} ?></td>
                  </tr>
                  <tr>
                    <td>ඉන්ධන</td>
                    <td>
                    රු. <?Php if($fualamnt!="" && is_numeric($fualamnt)){echo number_format($fualamnt,2);} ?>
                    X දින <?Php echo $fualdates;?>
                    
                    
                    </td>
                    <td align="right">
                    <?Php
						if($fualamnt!="" || $fualdates!=""){
							if(is_numeric($fualamnt) && is_numeric($fualdates)){
							?>
                            රු. 
                            <?Php
								echo number_format(($fualamnt*$fualdates),2);
								$ot2=$fualamnt*$fualdates;
							}
							else{
								echo "වැරදි දත්ත ඇතුලත් කර ඇත";	
							}
						}
					?>
                    
                    </td>
                  </tr>
                  <tr>
                    <td>වෙනත් වියදම්</td>
                    <td>
                    රු. <?Php if($otherexpence!="" && is_numeric($otherexpence)){echo number_format($otherexpence,2);} ?>
                    
                    
                    </td>
                    <td align="right">රු. <?Php if($otherexpence!="" && is_numeric($otherexpence)){
						echo number_format($otherexpence,2);
						$ot3=$otherexpence;
						} ?></td>
                  </tr>
                  <tr>
                    <td>සංයුක්ත දීමනා</td>
                    <td>
                      රු. <?Php if($claim!="" && is_numeric($claim)){echo number_format($claim,2);} ?>
                      
                      
                      </td>
                    <td align="right">රු. <?Php if($claim!="" && is_numeric($claim)){
						echo number_format($claim,2);
						$ot4=$claim;
						} ?></td>
                  </tr>
                  <tr style="font-weight:bold">
                    <td colspan="2" align="center">එකතුව</td>
                    <td align="right">
                    රු. 
                    <?Php 
					echo number_format(($ot1+$ot2+$ot3+$ot4),2);
					?>
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
                <td colspan="5"><table width="100%" border="0">
                  <tr>
                    <td colspan="4" style="font-weight:bold">වියදම් සාරාංශය</td>
                    </tr>
                  <tr>
                    <td width="9%" align="center">(1)</td>
                    <td width="68%" align="left">ආහාරපාන සඳහා</td>
                    <td width="4%" align="center">රු.</td>
                    <td width="19%" align="right"><?Php echo number_format($fst,2); ?></td>
                  </tr>
                  <tr>
                    <td align="center">(2)</td>
                    <td align="left">නේවාසික/ශාලා ගාස්තු</td>
                    <td align="center">රු.</td>
                    <td align="right">
                 <?Php 
				if($accomm!="" && is_numeric($accomm)){
				echo number_format($accomm,2); 
				}
				?> 
					
                    </td>
                  </tr>
                  <tr>
                    <td align="center">(3)</td>
                    <td align="left">සම්පත්දායක හා කාර්යමණ්ඩල දීමනා</td>
                    <td align="center">රු.</td>
                    <td align="right"><?Php echo number_format(($rt1+$rt2+$rt3+$rt4+$rt5+$rt6),2); 
					$trp=$rt1+$rt2+$rt3+$rt4+$rt5+$rt6;
					?></td>
                  </tr>
                  <tr>
                    <td align="center">(4)</td>
                    <td align="left">වෙනත් වියදම්</td>
                    <td align="center">රු.</td>
                    <td align="right">
 					<?Php 
					echo number_format(($ot1+$ot2+$ot3+$ot4),2);
					$top=$ot1+$ot2+$ot3+$ot4;
					?>                    
                    </td>
                  </tr>
                  <tr style="font-size:14px;font-weight:bold">
                    <td align="center">&nbsp;</td>
                    <td align="left">මුළු වියදම</td>
                    <td align="center">රු.</td>
                    <td align="right" style="border-bottom:double;border-top:thin">
                    <?Php echo number_format(($top+$trp+$accomm+$fst),2); ?>
                    </td>
                  </tr>
                </table></td>
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
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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
                <td>සකස් කලේ - ........................................</td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2">පරීක්ෂා කලේ - .....................................</td>
                </tr>
              <tr align="center">
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;සංවර්ධන නිලධාරී</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;සංවර්ධන නිලධාරී</td>
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
                <td colspan="5" align="justify">මෙම වැඩ මුළුව පැවැත්වීම සඳහා ඉහත සඳහන් ආකාරයට රු. <?Php echo number_format(($top+$trp+$accomm+$fst),2); ?> ඇස්තමේන්තු කර ඇති බවත්, එය පුහුණු වැඩ සටහන් පැවැත්වීම සම්බන්ධයෙන් වූ චක්‍රලේඛ හා උපදෙස් අනුව සකස් කර ඇති බවත් සහතික කරමි. මෙම ඇස්තමේන්තුවේ සඳහන් වියදම් වෙනස් වීමටද ඉඩ ඇත.</td>
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
                <td><?Php echo date("Y.m.")." ....."; ?></td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">.....................................</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">සංවර්ධන නිලධාරී</td>
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
                <td colspan="5">ඉහත පුහුණු වැඩමුළුව පැවැත්වීම සඳහා රු. <?Php echo number_format(($top+$trp+$accomm+$fst),2); ?> ක ඇස්තමේන්තුව නිර්දේශ කරන අතර, සහකාර ප්‍රධාන ලේකම් (පිරිසි හා පුහුණු) ආර්.එම්.එස්.එන්. රත්නායක මහතා වෙත රු. 
                <?Php echo number_format((($top+$trp+$accomm+$fst)/2),2); ?> ක අත්තිකාරම්
                මුදලක් ලබා දීම නිර්දේශ කරමි.</td>
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
                <td><?Php echo date("Y.m.")." ....."; ?></td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">........................................</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">ආර්.එම්.එස්.එන්. රත්නායක<br />
                සහකාර ප්‍රධාන ලේකම් (පිරිසි හා පුහුණු)
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
                <td colspan="5" align="justify">ඇස්තමේන්තුව හා අත්තිකාරම් මුදල අනුමත කරමි/නොකරමි.</td>
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
                <td><?Php echo date("Y.m.")." ....."; ?></td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">........................................</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td align="center">ඩබ්.එම්. වික්‍රමරත්න<br />නියෝජ්‍ය ප්‍රධාන ලේකම්<br />මධ්‍යම පළාත් ප්‍රධාන ලේකම් වෙනුවට</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              </table>

            </form>
            
  <?Php
  
    $esti=($top+$trp+$accomm+$fst);

  
  $trname=$rows["atp_trname"];
  $fileno=$rows["atp_fileno"];
  $subno=$rows["atp_subjctno"];
  $purpose=$rows["atp_purpose"];
  $content=$rows["atp_content"];
  $targetgroup=$rows["atp_targetgroup"];
  $noofdays=$rows["atp_noofdays"];
  $noofparti=$rows["atp_noofparticipants"];
  $location=$rows["atp_location"];
  $day1=$rows["atp_day1"];
  $day2=$rows["atp_day2"];
  $day3=$rows["atp_day3"];
  $day4=$rows["atp_day4"];
  $day5=$rows["atp_day5"];
  $day6=$rows["atp_day6"];
  $day7=$rows["atp_day7"];
  $day8=$rows["atp_day8"];
  $day9=$rows["atp_day9"];
  $day10=$rows["atp_day10"];

  $fundsource=$rows["atp_fundsource"];
  $respersons=$rows["atp_resourcep1"];
  if($rows["atp_resourcep2"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep2"]; }
  if($rows["atp_resourcep3"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep3"]; }
  if($rows["atp_resourcep4"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep4"]; }
  if($rows["atp_resourcep5"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep5"]; }
  if($rows["atp_resourcep6"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep6"]; }
  if($rows["atp_resourcep7"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep7"]; }
  if($rows["atp_resourcep8"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep8"]; }
  if($rows["atp_resourcep9"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep9"]; }
  if($rows["atp_resourcep10"]!=""){$respersons=$respersons.", ".$rows["atp_resourcep10"]; }
  
  $cashoffname=$rows["atp_cashofficername"];
  $cashoffdesig=$rows["atp_cashofficerdesig"];
  $cashoffdetails=$rows["atp_cashofficerotherdetails"];
  
  $supstaff1=$rows["atp_supportstaff1"];
  $supstaff2=$rows["atp_supportstaff2"];
  $supstaff3=$rows["atp_supportstaff3"];
  $supstaff4=$rows["atp_supportstaff4"];
  $supstaff5=$rows["atp_supportstaff5"];
  $supstaff6=$rows["atp_supportstaff6"];

  $trtype=$rows["atp_trtype"];
  $actualparticipant="";
  $atpestimate=$esti;
  $actualexpenditure="";
  $comnt="";

 
 				$sqlinsert = "insert into cp_completedtrainings(ct_atpid,ct_trname,ct_fileno,ct_subjno,ct_trpurpose,
				ct_trcontent,ct_trtargetgroup,ct_noofdays,ct_noofparticipant,ct_location,ct_day1,ct_day2,ct_day3,
				ct_day4,ct_day5,ct_day6,ct_day7,ct_day8,ct_day9,ct_day10,ct_fundsource,ct_resourcepersons,
				ct_cashofficername,ct_cashofficerdesig,ct_cashofficerdetails,ct_suportstaffnid1,ct_suportstaffnid2,
				ct_suportstaffnid3,ct_suportstaffnid4,ct_suportstaffnid5,ct_suportstaffnid6,ct_trtype,
				ct_noofactualparticipant,ct_estimate,ct_actualexpenditure,ct_comments)
				values('".$atpid."','".$trname."','".$fileno."','".$subno."','".$purpose."','".$content."','".$targetgroup."'
				,'".$noofdays."','".$noofparti."','".$location."','".$day1."','".$day2."'
				,'".$day3."','".$day4."','".$day5."','".$day6."','".$day7."','".$day8."','".$day9."','".$day10."'
				,'".$fundsource."','".$respersons."','".$cashoffname."','".$cashoffdesig."','".$cashoffdetails."',
				'".$supstaff1."','".$supstaff2."','".$supstaff3."','".$supstaff4."','".$supstaff5."','".$supstaff6."'
				,'".$trtype."','".$actualparticipant."','".$atpestimate."','".$actualexpenditure."','".$comnt."')";
 						$rsinsert = mysqli_query($con,$sqlinsert);
			/*			if(!$rsinsert){
							echo "Error : ".mysqli_error($con);	
						}
						else{
							echo "කාර්යාලය ඇතුලත් කිරීම සාර්ථකයි...නව කාර්යාලයක් ඇතුලත් කරන්න";
						}

  */
  
						
  ?>   
                      
   
    </td>
  </tr>
</table>

<!-- ********************** End of User accounts ********************************************** -->
    </td>
  </tr>

</table>
</center>
</body>
</html>