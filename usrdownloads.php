<?Php
	session_start(); //To use the SESSION variable

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/cp.css" rel="stylesheet" type="text/css" />
<link href="css/tabpanel.css" rel="stylesheet" type="text/css" />
<script src="scripts/tabpanel.js" type="text/javascript"></script>

<title>Management Development & Training Unit - Wayamba Provincial Councilt</title>
</head>

<body>

<table width="100%" border="0" style="position:relative;border-collapse:collapse">
  <tr>
    <td><?php include('usrheader.php');?></td>
  </tr>
  <tr>
    <td>
<!-- ********************** Designations ********************************************** -->
<table width="100%" border="0">
  <tr>
    <!--<td width="20%" valign="top"><?php //include('leftmenu.php');?></td>-->
    <td width="100%" valign="top">
        <div class="tab">
        	<button class="tablinks" onclick="openCity(event, 'a1')" style="width:12.5%" ><img src="images/circular.png" height="30" /><br />චක්‍රලේක</button>
            <button class="tablinks" onclick="openCity(event, 'a2')" style="width:12.5%" ><img src="images/letter.png" height="30" /><br /> &nbsp;ලිපි&nbsp; </button>
            <button class="tablinks" onclick="openCity(event, 'a3')" style="width:12.5%" ><img src="images/tutes.png" height="30" /><br />නිබන්ධන</button>
            <button class="tablinks" onclick="openCity(event, 'a4')" style="width:12.5%" ><img src="images/papers.png" height="30" /><br />ප්‍රශ්නපත්‍ර</button>
            <button class="tablinks" onclick="openCity(event, 'a5')" style="width:12.5%" ><img src="images/photoss.png" height="30" /><br />ඡායාරූප</button>
            <button class="tablinks" onclick="openCity(event, 'a6')" style="width:12.5%" ><img src="images/form.png" height="30" /><br />ආකෘතිපත්‍ර</button>
            <button class="tablinks" onclick="openCity(event, 'a7')" style="width:12.5%" ><img src="images/applicationss.png" height="30" /><br />අයදුම්පත්‍ර</button>
            <button class="tablinks" onclick="openCity(event, 'a8')" style="width:12.5%" ><img src="images/other.png" height="30" /><br />වෙනත්</button>

            <!--<button class="tablinks" onclick="openCity(event, 'col')">Search Employees</button>-->
        </div>
                      
 		<div id="a1" class="tabcontent" style="display:block">
             <?Php require_once("circularslist.php"); ?>
        </div>
                      
        <div id="a2" class="tabcontent" style="display:none">
             <?Php require_once("letterlist.php"); ?>
        </div>
        <div id="a3" class="tabcontent" style="display:none">
             <?Php require_once("tutelist.php"); ?>
        </div>
        <div id="a4" class="tabcontent" style="display:none">
             <?Php require_once("pastpaperlist.php"); ?>
        </div>
        <div id="a5" class="tabcontent" style="display:none">
             <?Php require_once("photosslist.php"); ?>
        </div>
        <div id="a6" class="tabcontent" style="display:none">
             <?Php require_once("formlist.php"); ?>
        </div>
        <div id="a7" class="tabcontent" style="display:none">
             <?Php require_once("applicationlist.php"); ?>
        </div>
        <div id="a8" class="tabcontent" style="display:none">
             <?Php require_once("otherlist.php"); ?>
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