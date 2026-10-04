<?Php

	include "db.php"; // call the database connection

	$sqld="SELECT * FROM trdate where trd_id='1'";
	$rsd=mysqli_query($con,$sqld);
	$rowsd=mysqli_fetch_assoc($rsd);
	$d=$rowsd["trd_date"];
	$td=date("Y-m-d");

	$sql="SELECT * FROM cp_atp where (atp_lastdateapply>'$td' AND atp_addhome='ඔව්') AND atp_trtype='ඵලදායිතා පුහුණුවකි' order by atp_requestDate ASC";
	$rs=mysqli_query($con,$sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#marqueecontainer{
position: relative;
width: 320px; /*marquee width */
height: 145px; /*marquee height */
/*background-color: white; */
overflow: hidden;
border: 0px solid orange;
padding: 2px;
padding-left: 4px;
}
#dl{
	color:#FFF;
}
#dl a{
	text-decoration:none;	
		color:#FFF;
}
#dl a:hover{
	text-decoration:underline;	
		color:#000;

}

</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td style="font-family:'Malithi Web';color:#FFF;font-weight:500;padding:5px;background-color:#000;opacity:0.5;font-size:18px" align="center">
    ඵලදායිතා පිළිබඳ පුහුණු වැඩසටහන්</td>
  </tr>
  <tr>
    <td style="font-family:'Malithi Web';color:#000;font-weight:500;padding:5px;font-size:17px" align="justify">
    

<marquee direction="up" id="marqueecontainer" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="1">
<?php
		$number=1;
		$numberofRows= mysqli_num_rows($rs);
		if($numberofRows !=0){
			while($rows=mysqli_fetch_assoc($rs)){
				echo $rows["atp_trname"]." - ".$rows["atp_location"]." (".$rows["atp_day1"].")<br>";
			?>
            <hr style="color:#000" width="50%" align="center" />
            <?Php	
			}
		}
?>
</marquee>
 <div id="dl" align="right" style="font-size:13px"><a href="productivitytrainings.php">පැවැත්වීමට නියමිත සියළුම පුහුණු වැඩ සටහන්</a></div>
   
    </td>
  </tr>
</table>


</body>
</html>