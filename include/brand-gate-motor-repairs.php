<?php
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";

$brandUC = ucwords($brand);

$pageTitle = "$brandUC Gate Motor Repairs | GateMotorGuru";
$metaTitle = "$brandUC Gate Motor Repairs and Installation of Gate Motors";
$metaDescription = "$brandUC Gate Motor Repairs, Services, Replacements throughout South Africa. GateMotorGuru supply,install and repair gate motors of all major brands. ";
$metaKeywords = "$brandUC gate motor repairs,$brand repair gate motor,$brandUC gate repairs";

include_once __DIR__."/header.php";
?>

<h1><?=$brandUC?> Gate Motor Repairs</h1>
<div style="float:right;width:380px">
<p>
    Whether it is broken sliding gate motor mechanism, lightning damage, mechanical fault we can help you service
    and repair your <?=$brandUC?> gate motor.
</p>

<p>
    Gate Motor Guru aims to be the number one for <?=$brandUC?> Gate Motor Repairs in South Africa.
</p>
<p> Our <strong><?=$brandUC?> Gate Motor Repair</strong> experts are standing buy to help you get quotes and fix your broken gate motors.
</p>
</div>



<br/>

Find the
<h2 style ="margin-left:20px"><?=$brandUC?> Gate Motor Repair and Service Expert</h2>
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
    include_once __DIR__."/gurus.php";
    showHomePageGurus();
?>



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
    If you are just looking for some general information for <strong><?=$brandUC?> gate motor repairs</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em><?=$brandUC?> gate motor repair</em> Experts.
    South Africa's leading Repairs and Services of <?=$brandUC?> and other brands of Gate Motors Web Site.
</p>

<br/>
<br/>

<?php include __DIR__."/footer.php"; ?>

