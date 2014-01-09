<?php
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$pageTitle = "Motor Gate Guru | Motor Gates Repairs and Installation";
$metaTitle = "Motor Gate Repairs and Installation of Motor Gates";
$metaDescription = "Motor Gate Guru - We supply,install and repair gate motors of all major brands throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor,gate motors,gate automation";

include_once "include/header.php";
?>

<h1>Motor Gates and Gate Automation</h1>
<div style="float:right;width:380px">
    <div style="background-color: lightblue;">
    <b class="rtop">
      <b class="r1"></b> <b class="r2"></b> <b class="r3"></b> <b class="r4"></b>
    </b>
    <!--content goes here -->
    <div style="margin:15px">
        <p>
            Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
        </p>

        <p>
            Motor Gate Guru aims to be the number one source of information for everything motor gates related, whether
            it is selecting the right motor, getting help with your gate problems.
        </p>
        <p> Our <strong>Motor Gate Experts</strong> are standing by to help you get quotes and fix your broken gate motor.
        </p>
    </div>
    <!--content end -->
    <b class="rbottom">
      <b class="r4"></b> <b class="r3"></b> <b class="r2"></b> <b class="r1"></b>
    </b>
    </div>

</div>


<div style="width:495px;text-align: center;background-color: #858585; padding:10px">
    <div style="text-align:left">
          <br/>
            We do<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="text-transform:uppercase"><strong>Motor Gate Repairs</strong></span>&nbsp;&nbsp;&nbsp; and &nbsp;&nbsp;
            <span style="text-transform:uppercase"><strong>Install and Supply New Motor Gates</strong></span>
            <br/>
            <br/>
    </div>
</div>
<br/>
<br/>

Find the
<h2 style ="margin-left:20px">Motor Gate Guru</h2>
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
<table>
    <tr>
        <td style="width:50%">
            <?php include "include/tips-list-1.php"; ?>
        </td>
        <td style="width:50%;vertical-align: top;">
            <?php include "include/tips-list-2.php"; ?>
        </td>

    </tr>
</table>
<br/>

<?php include "include/form.php"; ?>


<br/>
<br/>
Featured Motor Gate Experts<br/>
<br/>

<?php
    include_once "include/gurus.php";
    showHomePageGurus();
?>




<div style="clear:both"></div>
<br/>
<br/>
<div style="float:right">
    Are you a Motor Gate Expert?<br/>
    &nbsp;&nbsp; ...looking for more business?<br/>
    <div style="text-align: center">
        <a href="partner-signup.php" style="text-decoration: none"><img src="images/join.jpg" alt="Join our Approved Motor Gate Gurus"/></a>
    </div>
    <div style="display:block;position:relative;left:30px">
        <img src="images/become-a-partner.gif"/>
    </div>
</div>

<div style="clear:both"/>

<br/>
<br/>

<h2>Motor Gate Services</h2>
<?php showServices(); ?>


<br/>

<h2>Motor Gates Brands</h2>
<?php showBrands(); ?>



<br/>
<br/>
<?php
    if (isset($extraContent)) {
        include($extraContent);
        echo "<br/> <br/>";
    }
?>

<h2>Gate Automation and Electric Gates</h2>
<p>
    Gate Automation is the process of converting a regular gate to an automatic gate with a motorised mechanism that
    drives the opening and closing of the electric gate. Such a conversion to automatic gates can either be accomplished with
    a sliding gate mechanism or a swinging gate mechanism.
</p>
<p>
    Sliding Motor Gates have become the norm these days, but in places where the sideways space for the gate to slide
    into simply isn't available (or in in situations where the existing gate is a double steel gate), a swing gate motor
    is installed.
</p>
<p>
    If you are just looking for some general information for your <strong>gate motor</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>motor gate</em> Guru's.
    South Africa's leading Motor Gates Web Site.
</p>

<br/>
<br/>

<?php include "include/footer.php"; ?>

