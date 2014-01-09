<?php
@include_once __DIR__."/trackheader.php";
@include_once __DIR__."/track.php";

include_once __DIR__."/globalsettings.php";
mb_internal_encoding('UTF-8');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pageTitle ?></title>
<meta name="title" content="<?=$metaTitle?>"/> 
<meta name="description" content="<?=$metaDescription?>"/>
<meta name="keywords" content="<?=$metaKeywords?>"/>
<meta name="sitecode" 	 content="za" />
<meta name="google-site-verification" content="rEYxlssLo6V7XRTEI-Rgyr-6SdwWGq20m4usELt-qlY" />

<link href="css/general.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17118895-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>

<?php
    if (isset($city)) $altText = "Gate Motor Guru in $city";
    else $altText = "Gate Motor Repairs, Installations";
?>

<?php
function style($style)
{

    $fullname = $_SERVER['SCRIPT_FILENAME'];
    $current = basename($_SERVER['SCRIPT_FILENAME']);



    if (
            ($style=="HOME" && $current=="index.php" && !strstr($fullname, "forum" )) ||
            ($style=="FORUM" && strstr($fullname, "forum" )) ||
            ($style=="ABOUTUS" && $current=="about-us.php") ||
            ($style=="PRODUCTS" && $current=="buy-gate-motor.php") ||
            ($style=="SERVICES" && $current=="gate-motor-services.php")
        ) {
        //We matched a link
        return 'style="color:red"';
    }
    else
        return ""; //Not matched return no style
}
?>


<body>
<div style="width:900px;margin: 0 auto">

        <div style="position:relative;left:360px;top:182px;width:550px;text-align: center">
            <span class ="TopNav">
                <a href="/" <?=style("HOME");?> >HOME</a> &nbsp; | &nbsp;
                <a href="/about-us.php" <?=style("ABOUTUS")?> >ABOUT US</a> &nbsp; | &nbsp;
                <a href="/buy-gate-motor.php" <?=style("PRODUCTS")?> >PRODUCTS</a> &nbsp; | &nbsp;
                <a href="/gate-motor-services.php" <?=style("SERVICES")?> >SERVICES</a> &nbsp; | &nbsp;
                <a href="/forum/" <?=style("FORUM")?> >DISCUSSION FORUM</a>

            </span>
            
        </div>
            <div class="banner"><img src="images/Header.jpg" width="900" height="207" alt="<?=$altText?>"/></div>


<?php
    $phpIncludePath = __DIR__;
    include_once "$phpIncludePath/officeHours.php";
    if ($IsOfficeHours) { //Only show contact details in header during office hours
?>
    <div style="z-index:500;position: absolute;left:750px;top:20px; background-color: none;color: navy; border: none; padding:5px">
        <span style="font-size: larger"><b>Call us now on 079 613 7845</b></span> <br/>
        <?php /* <u>Gate Motors</u>, <u>Automatic Garage Doors</u>, <u>Intercoms</u>, <u>Electric Fences</u>  <br/>
         *
         */ ?>
        We are open 8am - 5pm
    </div>
<?php
    }
?>