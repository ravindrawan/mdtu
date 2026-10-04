<?php
	session_start(); //To use the SESSION variable
	include "db.php"; // get the database connection
	$username=trim(htmlspecialchars($_POST["uname"]));
	$password=trim(htmlspecialchars($_POST["pwd"]));

	$sqlLogin="SELECT * FROM cp_login WHERE lg_uname='$username' AND lg_pwd='$password'";
	$rsLogin=mysqli_query($con,$sqlLogin);

	if(mysqli_num_rows($rsLogin)>0){//If
		$rows=mysqli_fetch_assoc($rsLogin);
		$logid=$rows["lg_id"];
		$offid=$rows["lg_office"];
		$pwd=$rows["lg_pwd"];	
		$uname=$rows["lg_uname"];	
		$logtype=$rows["lg_type"];

		$_SESSION['logid']=$logid;
		$_SESSION['offid']=$offid;
		$_SESSION['un']=$uname;
		$_SESSION['pwd']=$pwd;
		$_SESSION['logtype']=$logtype;

		if($logtype=="Administrator" || $logtype=="Super User"){

	?>	
		 <meta http-equiv="refresh" content="0; url=control.php" />
    <?Php  
		}
		else if($logtype=="User"){
	?>	
		 <meta http-equiv="refresh" content="0; url=usercontrolpanel.php" />
    <?Php  
		}
			
	}
	else{
	?>


<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=502685301" id="pagesheet"/>
   </head>
 <body>

  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="browser_width colelem" id="u103-4-bw">
    <div class="clearfix" id="u103-4"><!-- content -->
     <!--<p>Header</p>-->
          <?php include('homeheader.php');?>

    </div>
   </div>
   <div class="clearfix colelem" id="ppu166"><!-- group -->
    <div class="clearfix grpelem" id="pu166"><!-- group -->
     <div class="grpelem" id="u166"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u121-4"><!-- content -->
      <!--<p>Upcoming Training</p>-->
      <?php include('mdtutrainings.php');?>
     </div>
     <div class="clearfix grpelem" id="u151-4"><!-- content -->
      <!--<p>Login</p>-->
           <?php include('login.php');?>

     </div>
     <div class="clearfix grpelem" id="u127-4"><!-- content -->
      <!--<p>Training Calendar</p>-->
      <?php include('calnder.php');?>
     </div>
     <div class="clearfix grpelem" id="u157-4"><!-- content -->
      <!--<p>Foriegn schols</p>-->
      <?php include('foreignsch.php');?>
     </div>
     <div class="clearfix grpelem" id="u160-4"><!-- content -->
      <!--<p>other Trainings</p>-->
       <?php include('othertrainings.php');?>
     </div>
     <div class="clearfix grpelem" id="u154-4"><!-- content -->
      <!--<p>Menu</p>-->
      <?php include('menu.php');?>
     </div>
     <div class="clearfix grpelem" id="u163-4"><!-- content -->
      <!--<p>Birthdays</p>-->
      <?php include('bdayhome.php');?>
     </div>
    </div>
    <div class="clearfix grpelem" id="u109-4"><!-- content -->
     <!--<p>Slide Show</p>-->
     <?php include('slideshow.php');?>
    </div>
    <div class="clearfix grpelem" id="u115-4"><!-- content -->
     <!--<p>Notice</p>-->
     <?php include('newsbar.php');?>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="698" data-content-above-spacer="698" data-content-below-spacer="62"></div>
   <div class="browser_width colelem" id="u148-4-bw">
    <div class="clearfix" id="u148-4"><!-- content -->
     <!--<p>Footer</p>-->
     <?php include('footer.php');?>
    </div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=85721165" type="text/javascript" async data-main="scripts/museconfig.js?crc=436936948" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
<?Php
	}

// Logout				
	if(isset($_GET['id']) && $_GET['id']=='logout'){ //if the variable is set and is not NULL and equal to "logout"
		session_destroy();
		$_SESSION['un']="";
		session_destroy();
	}
	
?>