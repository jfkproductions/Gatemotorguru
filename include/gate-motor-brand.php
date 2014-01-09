<?php 
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";

$pageTitle = "$brand Gate Motors | Gate Motor Repairs and Installation";
$metaTitle = "$brand Gate Motor Repairs and Installation of Gate Motors";
$metaDescription = "$brand Gate Motors and more - We supply,install and repair gate motors of all major brands throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "$brand gate motor,$brand gate motors,$brand gate automation";

include_once __DIR__."/header.php";
?>

<h1><?=ucwords($brand)?> Gate Motors</h1>
<?php
    if ($brand == "centurion") {
        ?>
        <div style="float:left">
            <img src="images/centurion-gate-motors.jpg" alt="Centurion Gate Motors"/>
        </div>
        <?php
    }
?>
<div style="float:right;width:380px">
<p>
    Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
    We can help with you with <?=$brand?> gate motors and all other major brands.
</p>

<p>
    Gate Motor Guru aims to be the number one source of information for everything gate motors related, whether
    it is selecting the right motor, or getting help with your gate problems.
</p>
<p> How can we help you with your <strong><?=ucwords($brand)?> Gate Motor</strong> needs? Our experts are standing buy to help you get quotes and fix your broken gate motors.
</p>
</div>

<br>

<div style="clear:both">
</div>


Find a
<h2 style ="margin-left:20px"><?=ucwords($brand)?> Gate Motor Expert </h2>
<span style="margin-left:160px">close to you!</span>
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
<br>
<br>

<?php
    if ($brand == "centurion") include(__DIR__."/centurion-models-info.php");
    if ($brand == "gemini") include(__DIR__."/gemini-models-info.php");
    if ($brand == "hansa") include(__DIR__."/hansa-models-info.php");
    
?>

<br>
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

<h2><?=ucwords($brand)?> Gate Motor Services</h2>
<?php showServices($brand); ?>


<br/>


<br/>
<br/>

<p>
    If you are just looking for some general information for your <strong>gate motor</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>gate motor</em> Guru's.
    South Africa's leading Gate Motors Web Site.
</p>

<br/>
<br/>

<?php include __DIR__."/footer.php"; ?>

