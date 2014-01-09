<?php
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$pageTitle = "Gate Motor Installations | GateMotorGuru";
$metaTitle = "Gate Motor Installs, Services and Installation of Gate Motors";
$metaDescription = "Gate Motor Installs, Services, Replacements throughout South Africa. All major brands. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor installs,installation of gate motors,install gate motor";

include_once "include/header.php";
?>

<h1>Gate Motor Installation</h1>
<div style="float:right;width:380px">
<p>
    We can supply you with new or replacement Gate Motors and help you install your gate motor.
</p>

<p>
    Gate Motor Guru aims to be the number one for Gate Motor Installs in South Africa.
</p>
<p> Our <strong>Gate Motor Installation</strong> experts are standing buy to help you get quotes and install or replace your gate motors.
</p>
</div>



<br/>

Find the
<h2 style ="margin-left:20px">Gate Motor Installation and Service Expert</h2>
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

<?php include "include/form.php"; ?>


<br/>
<br/>
Featured Gate Motor Experts<br/>
<br/>

<?php
    include_once "include/gurus.php";
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


<h2>Gate Motors Brands</h2>
<?php showBrands("installation"); ?>
 


<br/>
<br/>

<p>
    If you are just looking for some general information for <strong>gate motor installations</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>gate motor install</em> Experts.
    South Africa's leading Repairs and Services of Gate Motors Web Site.
</p>

<br/>
<br/>

<?php include "include/footer.php"; ?>

