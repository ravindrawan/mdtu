<?Php

	include "db.php"; // call the database connection

	$atpdata = explode('|',$_GET['atpdata']);//get the atp id relevent to the training program
	$atpid = $atpdata[0];
	$startDtae = $atpdata[1];

	$sql="SELECT * FROM cp_atp where atp_day1='$startDtae' and atp_id='$atpid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);


//print report
	$myno=trim(htmlspecialchars($_POST["mno"]));

	$tname=trim(htmlspecialchars($_POST["tname"]));
	$targetgroup=trim(htmlspecialchars($_POST["targetgroup"]));
	$dates=trim(htmlspecialchars($_POST["dates"]));
	$location=trim(htmlspecialchars($_POST["location"]));
	$accm=trim(htmlspecialchars($_POST["accm"]));

	$mt=number_format((trim(htmlspecialchars($_POST["totparti"]))*trim(htmlspecialchars($_POST["unitprice"]))*trim(htmlspecialchars($_POST["noofdays"]))),2);
	$et=number_format((trim(htmlspecialchars($_POST["etparti"]))*trim(htmlspecialchars($_POST["etup"]))*trim(htmlspecialchars($_POST["etnd"]))),2);
	$lnch=number_format((trim(htmlspecialchars($_POST["lparti"]))*trim(htmlspecialchars($_POST["lup"]))*trim(htmlspecialchars($_POST["lnd"]))),2);
	$acomadation=trim(htmlspecialchars($_POST["accamnt"]));
	$hallamnt=trim(htmlspecialchars($_POST["hallamnt"]));
	$stati=trim(htmlspecialchars($_POST["stati"]));

	$hp=trim(htmlspecialchars($_POST["hp"]));
	$nd=trim(htmlspecialchars($_POST["nd"]));
	$nh=trim(htmlspecialchars($_POST["nh"]));

if($rows["atp_resourcep2"]!=""){
	$hp2=trim(htmlspecialchars($_POST["hp2"]));
	$nd2=trim(htmlspecialchars($_POST["nd2"]));
	$nh2=trim(htmlspecialchars($_POST["nh2"]));
}
if($rows["atp_resourcep3"]!=""){
	$hp3=trim(htmlspecialchars($_POST["hp3"]));
	$nd3=trim(htmlspecialchars($_POST["nd3"]));
	$nh3=trim(htmlspecialchars($_POST["nh3"]));
}
if($rows["atp_resourcep4"]!=""){
	$hp4=trim(htmlspecialchars($_POST["hp4"]));
	$nd4=trim(htmlspecialchars($_POST["nd4"]));
	$nh4=trim(htmlspecialchars($_POST["nh4"]));
}
if($rows["atp_resourcep5"]!=""){
	$hp5=trim(htmlspecialchars($_POST["hp5"]));
	$nd5=trim(htmlspecialchars($_POST["nd5"]));
	$nh5=trim(htmlspecialchars($_POST["nh5"]));
}
if($rows["atp_resourcep6"]!=""){
	$hp6=trim(htmlspecialchars($_POST["hp6"]));
	$nd6=trim(htmlspecialchars($_POST["nd6"]));
	$nh6=trim(htmlspecialchars($_POST["nh6"]));
}
if($rows["atp_resourcep7"]!=""){
	$hp7=trim(htmlspecialchars($_POST["hp7"]));
	$nd7=trim(htmlspecialchars($_POST["nd7"]));
	$nh7=trim(htmlspecialchars($_POST["nh7"]));
}
if($rows["atp_resourcep8"]!=""){
	$hp8=trim(htmlspecialchars($_POST["hp8"]));
	$nd8=trim(htmlspecialchars($_POST["nd8"]));
	$nh8=trim(htmlspecialchars($_POST["nh8"]));
}
if($rows["atp_resourcep9"]!=""){
	$hp9=trim(htmlspecialchars($_POST["hp9"]));
	$nd9=trim(htmlspecialchars($_POST["nd9"]));
	$nh9=trim(htmlspecialchars($_POST["nh9"]));
}
if($rows["atp_resourcep10"]!=""){
	$hp10=trim(htmlspecialchars($_POST["hp10"]));
	$nd10=trim(htmlspecialchars($_POST["nd10"]));
	$nh10=trim(htmlspecialchars($_POST["nh10"]));
}


	$lecamnt=($hp*$nd*$nh)+($hp2*$nd2*$nh2)+($hp3*$nd3*$nh3)+($hp4*$nd4*$nh4)+($hp5*$nd5*$nh5)
	+($hp6*$nd6*$nh6)+($hp7*$nd7*$nh7)+($hp8*$nd8*$nh8)+($hp9*$nd9*$nh9)+($hp10*$nd10*$nh10);
	
/*	$accamnt=trim(htmlspecialchars($_POST["accamnt"]));
	$hallamnt=trim(htmlspecialchars($_POST["hallamnt"]));
	$stati=trim(htmlspecialchars($_POST["stati"]));
*/	
	$maint=trim(htmlspecialchars($_POST["maint"]));
	$mdays=trim(htmlspecialchars($_POST["mdays"]));
	$mparti=trim(htmlspecialchars($_POST["mparti"]));
	
	$maincost=$maint*$mdays*$mparti;
	
	$coord=trim(htmlspecialchars($_POST["coord"]));
	$inspect=trim(htmlspecialchars($_POST["inspect"]));
	$clari=trim(htmlspecialchars($_POST["clari"]));
	$labor=trim(htmlspecialchars($_POST["labor"]));
	$photocopy=trim(htmlspecialchars($_POST["photocopy"]));
	$offex=trim(htmlspecialchars($_POST["offex"]));

	$resp=trim(htmlspecialchars($_POST["resp"]));
	$awin=trim(htmlspecialchars($_POST["awin"]));
	$vatamnt=trim(htmlspecialchars($_POST["vatamnt"]));
	$multi=trim(htmlspecialchars($_POST["multi"]));
	$asstlec=trim(htmlspecialchars($_POST["asstlec"]));
	$internetamnt=trim(htmlspecialchars($_POST["internetamnt"]));
	$atheramnt=trim(htmlspecialchars($_POST["atheramnt"]));


	$des=trim(htmlspecialchars($_POST["des"]));



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
    <td><?php //include('header.php');?></td>
  </tr>
  <tr>
    <td>
<!-- ********************** Designations ********************************************** -->
<table width="100%" border="0">
  <tr>
    <td width="5%" valign="top"><?php //include('leftmenu.php');?></td>
    <td width="95%" valign="top">

<form name="frmesti" method="post" action="">

<table width="100%" border="0">
  <tr>
    <td colspan="4" align="center"  style="font-size:15px;font-weight:bold;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"  style="font-size:15px;font-weight:bold;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"  style="font-size:18px;font-weight:bold;">
    <u>කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය <br />වයඹ පළාත
               </u>
    </td>
    </tr>
  <tr style="font-weight:bold">
    <td width="3%">&nbsp;</td>
    <td width="35%" align="right">මගේ අංකය</td>
    <td width="1%">&nbsp;</td>
    <td width="61%"><?Php echo $myno; ?></td>
  </tr>
  <tr>
    <td align="left">1</td>
    <td align="left">පුහුණූ වැඩ සටහනේ නම</td>
    <td>:</td>
    <td align="left"><?Php echo $tname; ?></td>
  </tr>
  <tr>
    <td align="left">2</td>
    <td align="left">පුහුණුව ලබන්නේ කවුරුන්ද</td>
    <td>:</td>
    <td align="left"><?Php echo $targetgroup; ?></td>
  </tr>
  <tr>
    <td align="left">3</td>
    <td align="left">පුහුණුව පැවැත්වෙන දිනය/දිනයන්</td>
    <td>:</td>
    <td align="left"><?Php echo $dates; ?></td>
  </tr>
  <tr>
    <td align="left">4</td>
    <td align="left">පුහුණුව පැවැත්වෙන ස්ථානය</td>
    <td>:</td>
    <td align="left"><?Php echo $location; ?></td>
  </tr>
  <tr>
    <td align="left">5</td>
    <td align="left">නේවාසිකද යන වග</td>
    <td>:</td>
    <td align="left"><?Php echo $accm; ?></td>
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
    <td align="left">(
  සම්පූර්ණ සහභාගීත්වය <?Php echo trim(htmlspecialchars($_POST["totparti"])); ?> 
  X ඒකක මිළ රු.  <?Php if(is_numeric($_POST["unitprice"])){ echo number_format(trim(htmlspecialchars($_POST["unitprice"])),2); } ?>  
  X දින  <?Php echo trim(htmlspecialchars($_POST["noofdays"])); ?> 
  ) &nbsp;
  <?Php 
  echo $tt=number_format((trim(htmlspecialchars($_POST["totparti"]))*trim(htmlspecialchars($_POST["unitprice"]))*trim(htmlspecialchars($_POST["noofdays"]))),2);
  ?>
    </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;සවස තේ</td>
    <td>:</td>
    <td align="left">(
  සම්පූර්ණ සහභාගීත්වය <?Php echo trim(htmlspecialchars($_POST["etparti"])); ?> 
  X ඒකක මිළ රු.  <?Php if(is_numeric($_POST["etup"])){ echo number_format(trim(htmlspecialchars($_POST["etup"])),2); } ?>  
  X දින <?Php echo trim(htmlspecialchars($_POST["etnd"])); ?> )
&nbsp;
  <?Php 
  echo $tet=number_format((trim(htmlspecialchars($_POST["etparti"]))*trim(htmlspecialchars($_POST["etup"]))*trim(htmlspecialchars($_POST["etnd"]))),2);
  ?>
    
    </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;&nbsp;දිවා ආහාරය</td>
    <td>:</td>
    <td align="left">
    
  ( සම්පූර්ණ සහභාගීත්වය  <?Php echo trim(htmlspecialchars($_POST["lparti"])); ?>
  X ඒකක මිළ රු. <?Php if(is_numeric($_POST["lup"])){ echo number_format(trim(htmlspecialchars($_POST["lup"])),2); } ?>   
  X දින <?Php echo trim(htmlspecialchars($_POST["lnd"])); ?> )
 &nbsp;
  <?Php 
  echo $tl=number_format((trim(htmlspecialchars($_POST["lparti"]))*trim(htmlspecialchars($_POST["lup"]))*trim(htmlspecialchars($_POST["lnd"]))),2);
  ?>
   
    
    </td>
  </tr>
  <tr>
    <td align="left">6.2</td>
    <td align="left">නවාතැන් ගාස්තු</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($acomadation)){ echo number_format($acomadation,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.3</td>
    <td align="left">ශාලා ගාස්තු</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($hallamnt)){ echo number_format($hallamnt,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.4</td>
    <td align="left">ලිපි ද්‍රව්‍ය</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($stati)){ echo number_format($stati,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.5</td>
    <td align="left">දේශන ගාස්තු</td>
    <td>:</td>
    <td align="left"><!--(<?Php //echo $hp." X ".$nh." X ".$nd; ?>) රු. <?Php //echo number_format($lecamnt,2); ?> --></td>
  </tr>
  <tr>
    <td align="left"></td>
    <td align="right">පළමු සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp." X ".$nh." X ".$nd; ?>) රු. <?Php echo number_format(($hp*$nh*$nd),2); ?></td>
  </tr>
    <?Php
	if($rows["atp_resourcep2"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">දෙවන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp2." X ".$nh2." X ".$nd2; ?>) රු. <?Php echo number_format(($hp2*$nh2*$nd2),2); ?></td>
  </tr>
	<?Php
	}
	?>
    <?Php
	if($rows["atp_resourcep3"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">තෙවන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp3." X ".$nh3." X ".$nd3; ?>) රු. <?Php echo number_format(($hp3*$nh3*$nd3),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep4"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">සිව්වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp4." X ".$nh4." X ".$nd4; ?>) රු. <?Php echo number_format(($hp4*$nh4*$nd4),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep5"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">පස්වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp5." X ".$nh5." X ".$nd5; ?>) රු. <?Php echo number_format(($hp5*$nh5*$nd5),2); ?></td>
  </tr>
	<?Php
	}
	?>
    <?Php
	if($rows["atp_resourcep6"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">සය වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp6." X ".$nh6." X ".$nd6; ?>) රු. <?Php echo number_format(($hp6*$nh6*$nd6),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep7"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">සත් වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp7." X ".$nh7." X ".$nd7; ?>) රු. <?Php echo number_format(($hp7*$nh7*$nd7),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep8"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">අට වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp8." X ".$nh8." X ".$nd8; ?>) රු. <?Php echo number_format(($hp8*$nh8*$nd8),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep9"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">නව වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp9." X ".$nh9." X ".$nd9; ?>) රු. <?Php echo number_format(($hp9*$nh9*$nd9),2); ?></td>
  </tr>
	<?Php
	}
	?>

    <?Php
	if($rows["atp_resourcep10"]!=""){
	?>
  <tr>
    <td align="left"></td>
    <td align="right">දස වන සම්පත්දායකයා</td>
    <td>:</td>
    <td align="left">(<?Php echo $hp10." X ".$nh10." X ".$nd10; ?>) රු. <?Php echo number_format(($hp10*$nh10*$nd10),2); ?></td>
  </tr>
	<?Php
	}
	?>


  <tr>
    <td align="left">6.6</td>
    <td align="left">උපකරණ හා නඩත්තු ගාස්තු</td>
    <td>:</td>
    <td align="left">රු. <?Php echo number_format($maint*$mdays*$mparti,2); ?></td>
  </tr>
  <tr>
    <td align="left">6.7</td>
    <td align="left">සමායෝජක දීමනා</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($coord)){ echo number_format($coord,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.8</td>
    <td align="left">වැඩමුළු අධීක්ෂණ දීමනාව</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($inspect)){ echo number_format($inspect,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.9</td>
    <td align="left">ලිපිකරු සහාය දීමනාව</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($clari)){ echo number_format($clari,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.10</td>
    <td align="left">කම්කරු සහාය දීමනා</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($labor)){ echo number_format($labor,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.11</td>
    <td align="left">ඡායා පිටපත්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($photocopy)){ echo number_format($photocopy,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.12</td>
    <td align="left">කාර්යාල පොදු වියදම්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($offex)){ echo number_format($offex,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.13</td>
    <td align="left">බැහැර සම්පත්දායක ගමන් වියදම්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($resp)){ echo number_format($resp,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.14</td>
    <td align="left">අවිනිශ්චිත වියදම්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($awin)){ echo number_format($awin,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.15</td>
    <td align="left">වැට්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($vatamnt)){ echo number_format($vatamnt,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.16</td>
    <td align="left">මල්ටිමීඩියා/ප්‍රොජෙක්ටර්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($multi)){ echo number_format($multi,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.17</td>
    <td align="left">සහාය දේශන ගාස්තු</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($asstlec)){ echo number_format($asstlec,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.18</td>
    <td align="left">අන්තර්ජාල පහසුකම්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($internetamnt)){ echo number_format($internetamnt,2); } ?></td>
  </tr>
  <tr>
    <td align="left">6.19</td>
    <td align="left">වෙනත්</td>
    <td>:</td>
    <td align="left">රු. <?Php if(is_numeric($atheramnt)){ echo number_format($atheramnt,2); } ?></td>
  </tr>
  
  <?Php 
$a=2;
$b="";


  
  

  ?>
  
  <tr style="font-size:16px;font-weight:700">
    <td align="left">&nbsp;</td>
    <td align="center">එකතුව</td>
    <td>&nbsp;</td>
    <td align="left">රු. <?Php 


	$mt=trim(htmlspecialchars($_POST["totparti"]))*trim(htmlspecialchars($_POST["unitprice"]))*trim(htmlspecialchars($_POST["noofdays"]));
	$et=trim(htmlspecialchars($_POST["etparti"]))*trim(htmlspecialchars($_POST["etup"]))*trim(htmlspecialchars($_POST["etnd"]));
	$lnch=trim(htmlspecialchars($_POST["lparti"]))*trim(htmlspecialchars($_POST["lup"]))*trim(htmlspecialchars($_POST["lnd"]));

$esti= $mt+$et+$lnch+$acomadation+$hallamnt+$stati+$lecamnt+$maincost+$coord+$inspect+$clari+$labor+$photocopy+$offex+$resp+$awin+$vatamnt+$multi+$asstlec+$internetamnt+$atheramnt;
	
	echo number_format($esti,2); ?></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="justify"><?Php echo $des; ?>
    </td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">
      <table width="80%" border="0">
        <tr>
          <td>&nbsp;</td>
          <td align="center">නිර්දේශ කරමි</td>
          <td align="center">අනුමත කරමි</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr valign="top">
          <td align="center">..........................................<br />සම්බන්ධීකරණ නිලධාරී</td>
          <td align="center">..........................................<br />සහකාර ප්‍රධාන ලේකම් <br /> පුහුණු</td>
          <td align="center">..........................................<br />නියෝජ්‍ය ප්‍රධාන ලේකම් <br />(පුහුණු)<br />වයඹ පළාත් <br />ප්‍රධාන ලේකම් වෙනුවට</td>
          </tr>
        </table>
      
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
    <td align="left">&nbsp;</td>
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
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>


</form>
   
    </td>
  </tr>
</table>

<!-- ********************** End of User accounts ********************************************** -->
    </td>
  </tr>
  <tr>
    <td style="background-color:#000"><?php //include('footer.php');?></td>
  </tr>

</table>
<?Php

//add to completed trainings

	$sql="SELECT * FROM cp_atp where atp_day1='$startDtae' and atp_id='$atpid'";
	$rs=mysqli_query($con,$sql);
	$rows=mysqli_fetch_assoc($rs);


  
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





?>
</body>
</html>