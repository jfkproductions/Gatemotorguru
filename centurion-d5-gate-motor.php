<?php 
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$pageTitle = "Centurion D5 Gate Motor | Gate Motors Sales Repairs and Installation";
$metaTitle = "Centurion D5 Gate Motor Sales Repairs and Installations";
$metaDescription = "Centurion D5 Gate Motor Information, Sales, Installation and Repairs - We supply,install and repair gate motors of all major brands throughout South Africa.";
$metaKeywords = "D5 gate motor,Centurion D5 Gate Motor,centurion gate automation";

include_once "include/header.php";
?>

<h1>Centurion D5 Gate Motor</h1>

<div style="float:left">
    <img src="images/centurion-d5-gate-motor.png" alt="Centurion D5 Gate Motor"/>
</div>

<div style="float:right;width:380px">
    <div style="background-color: lightblue;">
    <b class="rtop">
      <b class="r1"></b> <b class="r2"></b> <b class="r3"></b> <b class="r4"></b>
    </b>
    <!--content goes here -->
    <div style="margin:15px">
        <h2>Centurion D5 and D5 Evo Quick Facts</h2>
        The tried and tested D5, 500kg gate operator for domestic and light-industrial applications.
        <h3>Main Features</h3>
        <ul>
            <li>Battery backup</li>
            <li>Potent push force</li>
            <li>Intelligent speed control</li>
            <li>Rapid and smooth opening and closing</li>
            <li>Exceptionally easy system set up via LCD user interface</li>
            <li>Onboard NOVA (KeeloqTM encryption) multichannel receive</li>
            <li>Custom Built low Ratio GearBox</li>
            <li>18m/min opening speed</li>
            <li>Anti-crush sensors through DOSS (Digital Origin Seeking System)</li>
            <li>Engineered from Quality Materials to last up to 20 years</li>
        </ul>
        <br/>
        <a href="http://www.centsys.co.za/?q=con,114,Product%20Documentation">
            Find the Technical Brochures and Installation Guide on the Manufacturer's site
        </a>
        <br/>






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
            <span style="text-transform:uppercase"><strong>Gate Motor Repairs</strong></span>&nbsp;&nbsp;&nbsp; and &nbsp;&nbsp;
            <span style="text-transform:uppercase"><strong>Install and Supply New Gate Motors</strong></span>
            <br/>
            <br/>
    </div>
</div>
<br/>
<br/>

<div style="clear:both"></div>


<h2 style ="margin-left:20px">Let one of our Gate Motor Experts assist you with Sales And Support on the Centurion D5</h2>
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

<h2>Gate Motor Services</h2>
<?php showServices(); ?>


<br/>




<br/>
<br/>
<?php
    if (isset($extraContent)) {
        include($extraContent);
        echo "<br/> <br/>";
    }
?>

<h2>Centurion D5 Gate Motor Installation</h2>
<p>
    You can find DIY (Do-it-yourself) <a href="centurion-gate-motor-installation.php">D5 Gate Motor Installation Instructions</a> on this page.(Just scroll down to the bottom of that page)
</p>

<p>
    If you are just looking for some general information for your <strong>centurion D5 gate motor</strong> you should try our
    forums. If you need personal attention and great service try one of our approved <em>centurion gate motor</em> Guru's.
    South Africa's leading Gate Motors Web Site.
</p>

<br/>
<br/>

<?php include "include/footer.php"; ?>

