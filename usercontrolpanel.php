<?Php
	session_start(); //To use the SESSION variable

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/cp.css" rel="stylesheet" type="text/css" />
<title>Management Development & Training Unit - Central Provincial Council</title>
</head>

<body>

<table width="100%" border="0" style="position:relative;border-collapse:collapse">
  <tr>
    <td><?php include('header.php');?></td>
  </tr>
  <tr>
    <td>
<!-- ********************** Control Panel Icons ********************************************** -->
<table width="100%" border="0">
  <tr id="imglink">
    <td width="6%" valign="middle" align="right" style="background-color:#198064"><img src="images/employees.png" width="50" height="50" alt="employees" /></td>
    <td width="20%" valign="middle" style="background-color:#198064">&nbsp;කාර්යමණ්ඩලය</td>
    <td align="center"><a href="staffs.php"><img src="images/addemployee.png" width="50" height="50" alt="add employee" /></a><a href="designations.php"></a></td>
    <td align="center"><a href="addtrainingofficers.php"><img src="images/subjectofficers.png" width="50" height="50" alt="subject officers" /></a></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr valign="top" id="normallink">
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td width="14%" align="center"><a href="staffs.php">කාර්යමණ්ඩලය ඇතුලත් කිරීම</a><a href="designations.php"></a></td>
    <td width="12%" align="center"><a href="addtrainingofficers.php">පුහුණු විෂයභාර නිලධාරීන්	</a></td>
    <td width="12%" align="center">&nbsp;</td>
    <td width="12%" align="center">&nbsp;</td>
    <td width="12%" align="center">&nbsp;</td>
    <td width="12%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="background-color:#198064"><hr /></td>
  </tr>
  <tr>
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr id="imglink">
    <td align="right" style="background-color:#198064"><img src="images/trainingplan.png" width="50" height="50" alt="Training plan" /></td>
    <td style="background-color:#198064">&nbsp; පුහුණු සැලැස්ම</td>
    <td align="center"><a href="trneeds.php"><img src="images/trainingrequirements.png" width="50" height="50" alt="training requirements" /></a></td>
    <td align="center"><a href="applytrs.php"><img src="images/applytr.png" width="50" height="50" alt="apply for trainings" /></a><a href="trd.php"></a></td>
    <td align="center"><a href="searchcandidates.php"> <img src="images/selected.png" width="50" height="50" alt="selected officers" /></a></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr valign="top" id="normallink">
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td align="center"><a href="trneeds.php">පුහුණු අවශ්‍යතා</a></td>
    <td align="center"><a href="applytrs.php">පුහුණු වැඩ සටහන් සඳහා අයදුම් කිරීම</a><a href="trd.php"></a></td>
    <td align="center"><a href="searchcandidates.php"> පුහුණු වැඩමුළු සඳහා තෝරාගත් නිලධාරීන්</a></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="background-color:#198064"><hr /></td>
    </tr>
  <tr>
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr  id="imglink">
    <td align="right" style="background-color:#198064"><img src="images/reports.png" width="50" height="50" alt="reports" /></td>
    <td style="background-color:#198064">&nbsp; වාර්තා</td>
    <td align="center"><a href="annualtrainingplan.php"  target="new"><img src="images/antrpl.png" width="50" height="50" alt="annual training plan" /></a></td>
    <td align="center"><a href="officetrainingneeds.php">
    <img src="images/treq.png" width="50" height="50" alt="training needs" /></a></td>
    <td align="center"><a href="officetrapplications.php"><img src="images/applications.png" width="50" height="50" alt="training applications" /></a></td>
    <td align="center"><a href="userparticipatedemps.php"><img src="images/participatedemps.png" width="50" height="50" alt="participated employees" /></a></td>
    <td align="center"><a href="printtrainingprograms.php"  target="new"><img src="images/trlist.png" width="50" height="50" alt="training list" /></a></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr valign="top"  id="normallink">
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td align="center"><a href="annualtrainingplan.php"  target="new">වාර්ෂික පුහුණු සැලැස්ම</a></td>
    <td align="center"><a href="officetrainingneeds.php">පුහුණු ඉල්ලීම්</a></td>
    <td align="center"><a href="officetrapplications.php">පුහුණු අයදුම්පත්</a></td>
    <td align="center"><a href="userparticipatedemps.php">	පුහණු වැඩ සටහන් සඳහා සහභාගී වූ නිලධාරීන්</a></td>
    <td align="center"><a href="printtrainingprograms.php"  target="new">සියළුම පුහුණු වැඩ සටහන් මුද්‍රණය කරන්න</a></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="background-color:#198064">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
<!-- ********************** End of Control Panel Icons ********************************************** -->
    </td>
  </tr>
  <tr>
    <td style="background-color:#000"><?php include('footer.php');?></td>
  </tr>

</table>

</body>
</html>