<?Php
	include "db.php"; // call database connection

	$appliedtrainings = explode('|',$_POST['trs']);//get the atp id relevent to the training program
	$atpid = $appliedtrainings[0];
	$atpsdate = $appliedtrainings[1];
	$nid=$appliedtrainings[2];


	$sqla="SELECT * FROM cp_atp where atp_id='$atpid' AND atp_day1='$atpsdate'";
	$rsa=mysqli_query($con,$sqla);
	$rowsa=mysqli_fetch_assoc($rsa);

	$sqls="SELECT * FROM cp_staff where stf_Nid='$nid'";
	$rss=mysqli_query($con,$sqls);
	$rowss=mysqli_fetch_assoc($rss);

	$dt=date("Y-m-d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management Development & Training Unit - North Western Provincial Council</title>
</head>

<body>
<center>


        <table width="850" class="letter_fonts">
           	<tr><td width="82">&nbsp;</td><td width="725"  style="background-image:url(images/letterheadtop.jpg);width:800px;height:290px;background-repeat:no-repeat" valign="bottom" align="right">
<img src="images/letterheadtop.jpg" width="800" height="290"  />
<?php echo $dt; ?>

</td><td width="27">&nbsp;</td></tr>
           	<tr>
           	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
            <td>&nbsp;</td>
           	  <td>
					<?Php
						$off=$rowss["stf_office"];
	$sqlof="SELECT * FROM offices where of_name='$off'";
	$rsof=mysqli_query($con,$sqlof);
	$rowsof=mysqli_fetch_assoc($rsof);

	echo $rowsof["of_headdesig"]." මගින්,"; 

					?>
              </td>
              <td>&nbsp;</td>
       	  </tr>
        	<tr>
           	  <td>&nbsp;</td><td><?php echo $rowss["stf_Name"]; ?> මයා/මිය/මෙය</td><td>&nbsp;</td>
       	  </tr>			
           	<tr>
           	  <td>&nbsp;</td><td><?php echo $rowsof["of_name"]; ?></td><td>&nbsp;</td>
       	  </tr>
   
           	<tr>
           	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
           	  <td>&nbsp;</td>
           	  <td ><font size="+2"><?php echo $rowsa["atp_trname"]; ?> පිළිබඳ පුහුණු වැඩමුළුව </font></td><td>&nbsp;</td>
       	  </tr>
           	<tr>
           	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
           	  <td>&nbsp;</td><td>
				වයඹ පළාත් ප්‍රධාන ලේකම් කාර්යාලයීය කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකයේ මෙහෙයවීමෙන්  වයඹ පළාත් රාජ්‍ය සේවයේ <?php echo $rowsa["atp_targetgroup"]; ?>
				නිලධාරින් සඳහා <?php echo $rowsa["atp_trname"]; ?> පිළිබඳ පුහුණු වැඩමුළුවක්  පැවැත්වීමට අවශ්‍ය  කටයුතු සංවිධානය කර ඇත. 
				
			</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
            <td>&nbsp;</td>
           	  <td>
              	<ul>
                	<li>දිනය/දිනයන් - <?php
					 echo $rowsa["atp_day1"];
			  if($rowsa["atp_day2"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day2"];
			  }
			  if($rowsa["atp_day3"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day3"];
			  }
			  if($rowsa["atp_day4"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day4"];
			  }
			  if($rowsa["atp_day5"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day5"];
			  }
			  if($rowsa["atp_day6"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day6"];
			  }
			  if($rowsa["atp_day7"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day7"];
			  }
			  if($rowsa["atp_day8"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day8"];
			  }
			  if($rowsa["atp_day9"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day9"];
			  }
			  if($rowsa["atp_day10"]!="1111-11-11"){
				  echo ', '.$rowsa["atp_day10"];
			  }


					 ?></li>
                	<li>වේලාව - <?php echo $rowsa["atp_stime"]; ?> සිට <?php echo $rowsa["atp_etime"]; ?> දක්වා</li>
					<li>ස්ථානය -	<?php echo $rowsa["atp_location"]; ?></li>
					<li>පුහුණු පහසුකම් -	ලිපි ද්‍රව්‍ය , උදේ  සවස සැහැල්ලු ආහාර සමග තේ</li>

                </ul>
              </td>
              <td>&nbsp;</td>
       	  </tr>
           	<tr>
           	  <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
            	<td>&nbsp;</td>
           	  <td align="justify">මෙම පුහුණු වැඩමුළුව සඳහා ඔබ අමාත්‍යංශය / දෙපාර්තමේන්තුව / ආයතනයේ  ඉහත නම් සඳහන් නිලධාරියා / නිලධාරිණිය තෝරාගෙන ඇති බැවින් අදාල දිනයන්හි නියමිත වේලාවට වැඩමුළුව සඳහා සහභාගී කරවන මෙන් කාරුණිකව  දන්වමි. 

</td><td>&nbsp;</td>
       	  </tr>
           	<tr>
            <td>&nbsp;</td>
           	  <td align="justify">
 <br>
සැ.යු. වැඩමුළුව සඳහා පැමිණිම අනිවාර්ය වන අතර නොවැලැක්විය හැකි හේතුවක් මත වැඩමුළුව සඳහා නොපැමිණෙන්නේ නම් ඒ බව සම්බන්ධීකරණ නිලධාරියා වෙත දැනුවත් කළ යුතුවේ. නොදන්වා නොපැමිණීම ඔබව අසාදු ලේඛනගත කිරීමට හේතුවේ.

              </td>
              <td>&nbsp;</td>
       	  </tr>
           	<tr>
           	  <td>&nbsp;</td>
           	  <td>&nbsp;</td>
           	  <td >&nbsp;</td>
       	  </tr>
          	<?Php
			if($rowsa["atp_specialfinletter"]=="ඔව්"){
			?>
           	<tr>
           	  <td>&nbsp;</td>
           	  <td align="justify"><u><?php echo $rowsa["atp_specialfacts"]; ?></u>


              </td>
           	  <td >&nbsp;</td>
       	  </tr>
          	<?Php
			}
			?>
           	<tr>
           	  <td>&nbsp;</td><td>&nbsp;</td><td >&nbsp;</td>
       	  </tr>
           	<tr>
            	<td>&nbsp;</td>
           	  <td>

එස්.එම්.පෙත්තාවඩු,<br>
නියෝජ්‍ය ප්‍රධාන ලේකම් (පුහුණු),<br>
වයඹ ප්‍රධාන ලේකම් වෙනුවට.
</td>
<td>&nbsp;</td>
       	  </tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>පිටපත -  අධ්‍යක්ෂ <?php echo $rowsa["atp_location"]; ?> -  නිලධාරින්<?php echo $rowsa["atp_noofparticipants"]; ?> දෙනෙකු සදහා අවශ්‍ය පුහුණු පහසුකම් සැපයීම සඳහා</td>
<td>&nbsp;</td>
</tr>
           	<tr>
           	  <td>&nbsp;</td><td align="center"><br><font size="-1">(මෙම ලිපිය පරිගණක වැඩ සටහනක් මගින් මුද්‍රණය වන බැවින් අත්සන අවශ්‍ය නොවේ)</font></td><td>&nbsp;</td>
       	  </tr>
<tr>
<td>&nbsp;</td>
<td   style="background-image:url(images/letterheadfooter.jpg);width:800px;height:70px;background-repeat:no-repeat" valign="bottom" align="center">
<img src="images/letterheadfooter.jpg" width="800" height="70"  />
</td>
<td>&nbsp;</td>
</tr>
        </table>
</center>
</body>
</html>
