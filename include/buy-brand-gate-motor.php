<?php
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";
include_once __DIR__."/gurus.php";

$brandUC = ucwords($brand);

$pageTitle = "Buy $brandUC Gate Motor and have it expert Installed | GateMotorGuru";
$metaTitle = "$brandUC Gate Motor Sales, Installs, Services and Installation of Gate Motors";
$metaDescription = "Buy $brandUC Gate Motor and let our experts help you with all your Installs, Services, Replacement needs throughout South Africa. All major brands.";
$metaKeywords = "buy $brandUC gate motor,$brandUC gate motor sales,buy new $brandUC gate motor";

include_once __DIR__."/header.php";
?>

<h1>Buy <?=$brandUC?> Gate Motor</h1>
<div style="float:right;width:380px">
<p>
    We can supply you with all major brands like <?=$brandUC?> Gate Motors and help you install your new gate motor.
</p>

<p>
    Gate Motor Guru aims to be the number one for <?=$brandUC?> Gate Motor Sales in South Africa.
</p>
<p> <strong>Buy a <?=$brandUC?> Gate Motor</strong> today! Our experts are standing buy to help you get quotes and assist you with all your installation and supply needs.
</p>
</div>



<br/>

Find the
<h2 style ="margin-left:20px"><?=$brandUC?> Gate Motor Supplier and Service Expert</h2>
<span style="margin-left:160px">closest to you!</span>
<br/>
<br/>
<p style="position:relative;left:-20px">
    <u>Select your area:</u>
</p>

<?php
    showAllAreasInSA();
?>

<br/>
<br/>
<br/>

<?php include __DIR__."/form.php"; ?>


<br/>
<br/>
Featured Gate Motor Experts<br/>
<br/>

<?php
    showHomePageGurus();
?>

<div style="clear:both"></div>
<br/>
For buying advice, speak to one of our experts, or use the form above.
<br/>
<br/>

<?php
    if ($brand=="centurion") include(__DIR__."/centurion-models-info.php");
    if ($brand=="gemini") include(__DIR__."/gemini-models-info.php");
    if ($brand=="hansa") include(__DIR__."/hansa-models-info.php");
?>

<br/>
<div style="clear:both"></div>
<br/>
<br/>
<div style="float:right">
    Are you a Gate Motor Expert?<br/>
    &nbsp;&nbsp; ...looking for more business?<br/>
    <div style="text-align: center">
        <a href="partner-signup.php" style="text-decoration: none"><img src="images/join.jpg" alt="Join our Approved Gate Motor Gurus"/></a>
    </div>
    <div style="display:block;position:relative;left:30px">
        <img src="images/become-a-partner.gif"/>
    </div>
</div>

<div style="clear:both"/>

<br/>
<br/>



<br/>
<br/>

<p>
    If you are just looking for some general information for <strong><?=$brandUC?> gate motors</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em><?=$brandUC?> gate motor sales</em> Experts.
    South Africa's leading Supplier of Gate Motor products and services Web Site. Request a quote and shop for the right motor today!
</p>

<br/>
<br/>

<?php include __DIR__."/footer.php"; ?>
