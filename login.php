
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="frmlogin" method="post" action="logerror.php">
<table width="500" border="0" style="border-collapse:collapse">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td colspan="3" style="font-family:'Malithi Web';font-size:18px;color:#fff;font-weight:600;">වැරදි පරිශීලක නමක් හෝ මුරපදයක් ඇතුලත් කර ඇත. කරුණාකර නැවත උත්සහ කරන්න.</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" style="font-family:'Malithi Web';color:#FFF">පරිශීලක නම</td>
    <td>&nbsp;</td>
    <td align="left"><span id="sprytextfield1">
      <input type="text" name="uname" id="text1" style="height:25px" />
      <span class="textfieldRequiredMsg" style="color:#9FC">පරිශීලක නම ඇතුලත් කරන්න</span></span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" style="font-family:'Malithi Web';color:#FFF">මුර පදය</td>
    <td>&nbsp;</td>
    <td align="left" ><span id="sprypassword1">
      <input type="password" name="pwd" id="password1"  style="height:25px" />
      <span class="passwordRequiredMsg" style="color:#9FC">මුරපදය ඇතුලත් කරන්න</span></span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="submit" value=" ඇතුලත් වන්න " style="font-family:'Malithi Web';width:150px;height:30px" /></td>
    </tr>
</table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>
