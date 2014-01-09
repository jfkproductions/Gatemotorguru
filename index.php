<?php 
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$pageTitle = "Gate Motor Guru | Gate Motors Repairs and Installation";
$metaTitle = "Gate Motor Repairs and Installation of Gate Motors";
$metaDescription = "Gate Motor Guru - We supply,install and repair gate motors of all major brands throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor,gate motors,gate automation";

include_once "include/header.php";
?>

<div style="float:left">
    <h1>Gate Motor and Gate Motors Automation</h1>
    <div style="width:495px;text-align: center; padding:10px">
        <div style="text-align:left">
              <br/>

                <span style="text-transform:uppercase">
                    <strong style="font-size:200%">We do Gate Motor Repairs, Install and Supply New Gate Motors</strong></span>
                <br/>
                <br/>
        </div>
    </div>
</div>

<div style="float:right;width: 360px">
    <?php /*
    <div style="background-color: #f1f1f1;">
    <b class="rtop">
      <b class="r1"></b> <b class="r2"></b> <b class="r3"></b> <b class="r4"></b>
    </b>
     * 
     */ ?>

    <div class="greyBoxTop"></div>
    <div class="greyBoxMiddle">
        <!--content goes here -->
        <div style="width:280px; padding-right:0px;padding-left:20px;padding-top:5px">
            <p style="margin-top:0px;padding-top: 0px">
                Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
            </p>

            <p>
                Gate Motor Guru aims to be the number one source of information for everything gate motors related, whether
                it is selecting the right motor, getting help with your gate problems.
            </p>
            <p style="margin-bottom:0px;padding-bottom: 0px"> Our <strong>Gate Motor Experts</strong> are standing by to help you get quotes and fix your broken gate motors.
            </p>
        </div>
        <!--content end -->
    </div>

    <div class="greyBoxBottom"></div>

    <?php /*
    <b class="rbottom">
      <b class="r4"></b> <b class="r3"></b> <b class="r2"></b> <b class="r1"></b>
    </b>
    </div>
    */ ?>
    
</div>

<br/>


<?php
    showAllAreasInSA();
?>

<div style="float:left">
<table style="border-collapse: collapse;">
    <tr style="">
        <td class="fadedBoxTop"><h2 style="padding-left:10px;font-size: 21px;padding-top:5px">When buying a Gate Motor</h2></td>
    </tr>
    <tr>
        <td class="fadedBoxMiddle">
            <div style="padding-left:10px;padding-right:45px;font-size:14px">


        <p>Be sure to select the best gate motor for your needs whether a sliding gate motor or a swing gate motor. </p>
        <p>Use an unbeatable Crypto Key remote that cannot be copied.</p>
        <p>Select a quality motor that will last a long time that handle the intense stresses that motors can be subjected to.</p>
        <p>The motor should be physically secured so that its security cannot be compromised.</p>
        <p>Use a backup battery to ensure you are not locked out in the event of a power failure!</p>
        <p>Ensure you get a peace-of-mind warranty.</p>

            </div>
        </td>
    </tr>
    <tr>
        <td class="fadedBoxBottom"></td>
    </tr>
</table>
</div>

<div style="float:left;width:535px;">
<?php include "include/form.php"; ?>
</div>

<div style="clear:both"></div>

<br/>

<h2 style="color:#363C7F;font-size: 26px">Gate Motor Repairs</h2>
<div style="font-size:18px;">
    <p>Lightning damage, electrical malfunction, wear and tear can all take its toll!</p>
    <p>Not only is it frustrating to have your gate not functioning, but it also poses a security risk!</p>

    <p>
    Whether it is a broken sliding gate mechanism, lightning damage, mechanical fault we can help you
    service and repair your gate motor.
    </p>

    <p>
    Gate Motor Guru aims to be the number one for Gate Motor Repairs in South Africa.
    </p>

    <p>
    Our Gate Motor Repair experts are standing by to help you get quotes for New Installations, Replacements,
    or to fix your broken gate motors.
    </p>

</div>

<div style="clear:both"></div>
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

<div style="clear:both"/>

<br/>
<br/>

<?php showServicesAndBrands(); ?>



<br/>
<br/>
<?php
    if (isset($extraContent)) {
        include($extraContent);
        echo "<br/> <br/>";
    }
?>

<h2 style="font-size: 26px">Gate Automation and Electric Gates</h2>
<p>
    Gate Automation is the process of converting a regular gate to an automatic gate with a motorised mechanism that
    drives the opening and closing of the electric gate. Such a conversion to automatic gates can either be accomplished with
    a sliding gate mechanism or a swinging gate mechanism.
</p>
<p>
    Sliding Gate Motors have become the norm these days, but in places where the sideways space for the gate to slide
    into simply isn't available (or in in situations where the existing gate is a double steel gate), a swing gate motor
    is installed.
</p>
<p>
    If you are just looking for some general information for your <strong>gate motor</strong> you should try our
    <a href="forum/">forums</a>. If you need personal attention and great service try one of our approved <em>gate motor</em> Guru's.
    South Africa's leading Gate Motors Web Site. <a href="/site-map.php">Site Map</a>
</p>

<br/>
<br/>

<?php include "include/footer.php"; ?>

