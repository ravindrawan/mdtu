<?Php

	include "db.php"; // call the database connection
	$nid=$_GET["nid"];
	$edus=trim(htmlspecialchars($_POST["edus"]));
	$coursedes=trim(htmlspecialchars($_POST["coursedes"]));
	$applydate=date("Y-m-d");
	$cname=trim(htmlspecialchars($_POST["cname"]));
	$cins=trim(htmlspecialchars($_POST["cins"]));
	$csdate=trim(htmlspecialchars($_POST["csdate"]));
	$cduration=trim(htmlspecialchars($_POST["cduration"]));
	$cedate=trim(htmlspecialchars($_POST["cedate"]));
	$cfees=trim(htmlspecialchars($_POST["cfees"]));
	$crelevant=trim(htmlspecialchars($_POST["crelevant"]));
	
	$apprve="";
	$reason="";
	$chequeno="";
	$chkissuedate="1111-11-11";
	$chkdate="1111-11-11";
	$chkbank="";
	$amnt="";
	$comment="";
	$certisubmit="";
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?Php
				$sqlinsert = "insert into cp_privatetrainings(pvtt_nid,pvtt_eduq,pvtt_othercourse,pvtt_applydate,
				pvtt_cname,pvtt_cinstitute,pvtt_cstartdate,pvtt_cduration,pvtt_cenddate,pvtt_fees,pvtt_relevant,
				pvtt_approved,pvtt_reason,pvtt_chequeno,pvtt_chequeissuedate,pvtt_chequedate,pvtt_chequebank,
				pvtt_amount,pvtt_comment,pvtt_certificatesubmit)
				values('".$nid."','".$edus."','".$coursedes."','".$applydate."','".$cname."','".$cins."','".$csdate."'
				,'".$cduration."','".$cedate."','".$cfees."','".$crelevant."','".$apprve."','".$reason."','".$chequeno."'
				,'".$chkissuedate."','".$chkdate."','".$chkbank."','".$amnt."','".$comment."','".$certisubmit."')";
 						$rsinsert = mysqli_query($con,$sqlinsert);
						if(!$rsinsert){
							echo "Error : ".mysqli_error($con);	
						}
						else{
						//	echo "පාඨමාලා හැදෑරීම සඳහා ප්‍රතිපාදන ඉල්ලුම්පත්‍රය ඇතුලත් කිරීම සාර්ථකයි...";
							

		$Sqlstf="SELECT * FROM cp_staff where stf_Nid='$nid'";
		$rsstf=mysqli_query($con,$Sqlstf);
		$numberofRows= mysqli_num_rows($rsstf);
		$row=mysqli_fetch_assoc($rsstf);
		?>
     <table width="100%" border="0">
  <tr>
    <td colspan="4" align="center" style="font-size:22px" height="35">
	<u>බාහිර ආයතන මගින් පවත්වන පාඨමාලා සඳහා ප්‍රතිපාදන ලබා ගැනීමේ අයදුම්පත්‍රය</u></td>
  </tr>
  <tr>
    <td valign="top" align="right">නිලධාරියාගේ නම&nbsp;:</td>
    <td width="43%" colspan="2" align="left">&nbsp;<?Php echo $row["stf_Name"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">ජාතික හැඳුනුම්පත් අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_Nid"]; ?></td>
    </tr>
  <tr>
    <td valign="top" align="right">උපන් දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_dob"]; ?></td>
  </tr>
  <tr>
    <td  valign="top" align="right">තනතුර&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_desig"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">කාර්යාලය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_office"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">ජංගම දුරකථන අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_mobile"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">කාර්යාලීය දුරකථන අංකය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_ofstele"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">ඊමේල් ලිපිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_email"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">තනතුරෙහි ස්වභාවය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_desigtype"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">සේවය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_service"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">පන්තිය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_class"]; ?></td>
  </tr>
  <tr>
    <td valign="top" align="right">මුල් පත්වීමේ දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_firstappdate"]; ?></td>
  </tr>
  <tr>
    <td  valign="top" align="right">වර්තමාන තනතුරට පත් වූ දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $row["stf_cdesigdate"]; ?></td>
  </tr>
  <tr>
    <td width="56%" align="right">&nbsp;</td>
    <td colspan="2" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">අධ්‍යාපන සුදුසුකම්&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $edus; ?></td>
  </tr>
  <tr>
    <td align="right">හදාරා ඇති වෙනත් පාඨමාලා&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $coursedes; ?></td>
  </tr>
  <tr>
    <td align="right">ඉල්ලුම් කල දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $applydate; ?></td>
  </tr>

  <tr>
    <td align="right">පාඨමාලාවේ නම&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $cname; ?></td>
  </tr>
  <tr>
    <td align="right">ආයතනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $cins; ?></td>
  </tr>
  <tr>
    <td align="right">පාඨමාලාව ආරම්භ වන දිනය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $csdate; ?></td>
  </tr>
  <tr>
    <td align="right">කාලසීමාව&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $cduration; ?></td>
  </tr>
  <tr>
    <td align="right">අවසන් වන දිනය (ආසන්න වශයෙන්)&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $cedate; ?></td>
  </tr>
  <tr>
    <td align="right">පාඨමාලා ගාස්තුව&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo number_format($cfees,2); ?></td>
  </tr>
  <tr>
    <td align="right">වර්තමාන රාජකාරි කටයුතු වලට ඇති අදාලත්වය&nbsp;:</td>
    <td colspan="2" align="left">&nbsp;<?Php echo $crelevant; ?></td>
  </tr>
  
  </table>
	<?Php						
							
						}
   
		?>    


</body>
</html>