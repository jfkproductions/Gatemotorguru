<?php

// ASSUMES $city has been set

include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";
include_once __DIR__."/gurus.php";

$pageTitle = "Gate Motor Repairs $city| GateMotorGuru";
$metaTitle = "Gate Motor Repairs in $city and Installation of Gate Motors";
$metaDescription = "Gate Motor Repairs in $city, Services, Replacements throughout South Africa. We service and repair gate motors of all major brands.";
$metaKeywords = "gate motor repairs $city,repair gate motor $city,$city gate repairs";

include_once __DIR__."/header.php";
?>

<h1>Gate Motor Repairs <?=$city?></h1>
<div style="float:right;width:380px">
<p>
    Whether it is broken sliding gate motor mechanism, lightning damage, mechanical fault we can help you service
    and repair your gate motor in <?=$city?>.
</p>

<p>
    Gate Motor Guru aims to be the number one for Gate Motor Repairs in <?=$city?> and through-out South Africa.
</p>
<p> Our <strong>Gate Motor Repair <?=$city?></strong> experts are standing buy to help you get quotes and fix your broken gates.
</p>
</div>






<br/>
<br/>
<?php include __DIR__."/tips-list-2.php"; ?>
<br/>

<?php include __DIR__."/form.php"; ?>


<br/>
<br/>
Our Gate Motor Experts in <?=$city?><br/>
<br/>

<?php
    showCityGurus($city);
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

<h2>Gate Motors Brands</h2>
<?php showBrands("repairs"); ?>



<br/>
<br/>

<h2>Gate Motor Repair <?=$city?> and elsewhere</h2>
<p>
    If you are just looking for some general information for <strong>gate motor repairs</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>gate motor repair <?=$city?></em> Experts.
    South Africa's leading Repairs and Services of Gate Motors in <?=$city?> and other cities.
</p>

<br/>
<br/>

<?php include __DIR__."/footer.php"; ?>

