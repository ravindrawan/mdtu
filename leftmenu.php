<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/cp.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" style="font-size:12px">
  <tr>
    <td style="padding-left:5px;background-color:#000;font-size:16px" align="center" id="menulink" height="25px">
    <?Php
	if($_SESSION['logtype']=="Administrator"  || $_SESSION['logtype']=="Super User"){
	?>
        <?Php
	if($_SESSION['logtype']=="Administrator"  || $_SESSION['logtype']=="Super User"){
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
  <?Php
  if($_SESSION['logtype']=="Administrator"){
  ?>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="designations.php">තනතුරු</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="offices.php">කාර්යාල</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="useraccounts.php">පරිශීලක ගිණුම්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="trainingprograms.php">පුහුණු වැඩ සටහන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="trainingfields.php">විෂය ක්ෂේත්‍රයන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="slideshowimages.php">මුල් පිටුවේ ඡායාරූප වෙනස් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="treqdays.php">පුහුණු ඉල්ලීම් ඇතුලත් කරන කාල සීමාව</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="downloads.php">බාගතකිරීම් ඇතුලත් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="usercomments.php">අදහස් හා යෝජනා</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="services.php">සේවාවන් ඇතුලත් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="trainingcenters.php">පුහුණු මධ්‍යස්ථාන ඇතුලත් කිරීම</a><hr /></td>
  </tr>
   <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="fundsources.php">මූල්‍ය ප්‍රභවයන් අතුලත් කිරීම</a><hr /></td>
  </tr>
   <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="food.php">ආහාර පාන ඇතුලත් කිරීම</a><hr /></td>
  </tr>
 
  <tr>
    <td style="padding-left:5px">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="trneeds.php">පුහුණු අවශ්‍යතා</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="createatp.php">පුහුණු සැලැස්ම සැකසීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="editatp.php">පුහුණු සැලැස්ම වෙනස් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="applytrs.php">පුහුණු වැඩ සටහන් සඳහා අයදුම් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="trapplications.php">ඉදිරිපත් කර ඇති අයදුම්පත්‍</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="upcomingtrainings.php">පැවැත්වීමට නියමිත පුහුණු වැඩ සටහන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="trcandidates.php">පුහුණු වැඩමුළු සඳහා තෝරාගත් නිලධාරීන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="finishedtrainings.php">පුහුණු වැඩ සටහන් අවසන් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="appliedprivatetranings.php">
    පුද්ගලික පුහුණු පාඨමාලා සඳහා ප්‍රතිපාදන ලබා දීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="staffs.php">කාර්යමණ්ඩලය ඇතුලත් කිරීම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px" id="leftmenu"><a href="resourcepersons.php">සම්පත්දායක සංචිතය</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="blackliststaff.php">අසාදුලේඛන ගතවූ නිලධාරීන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="addtrainingofficers.php">පුහුණු විෂයභාර නිලධාරීන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="annualtrainingplan.php"  target="new">වාර්ෂික පුහුණු සැලැස්ම</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="completedtrainings.php">පවත්වන ලද පුහුණු වැඩ සටහන්</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="reportpvttrns.php">ප්‍රතිපාදන සපයන ලද පුද්ගලික පුහුණු පාඨමාලා</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="fulldetailsoftrainings.php">පුහුණු වැඩ සටහන් පිළිබඳ විස්තර</a><hr /></td>
  </tr>
  <tr>
    <td style="padding-left:5px"  id="leftmenu"><a href="trsummary.php">පාඨමාලා සාරාංශය</a><hr /></td>
  </tr>
  <?Php
  }
  ?>
</table>

</body>
</html>