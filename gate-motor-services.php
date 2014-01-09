<?php 
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$pageTitle = "Gate Motor Services | Gate Motors Repairs and Installation";
$metaTitle = "Gate Motor Repairs and Servicing of electric gates, and Installation of Gate Motors and buying a new motor.";
$metaDescription = "Gate Motor Guru - Gate Motor Repairs and Servicing of electric gates, and Installation of Gate Motors and buying a new motor, throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor services,gate motors,gate automation services";

include_once "include/header.php";
?>

<h1>Our Electric Gate Motor and Gate Automation Services</h1>
<div style="float:right;width:380px">
    <div style="background-color: #f1f1f1;">
    <b class="rtop">
      <b class="r1"></b> <b class="r2"></b> <b class="r3"></b> <b class="r4"></b>
    </b>
    <!--content goes here -->
    <div style="margin:15px">
        <p>
            Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
        </p>

        <p> Our <strong>Gate Motor Experts</strong> are standing by to help you get quotes for new installations or to assist you with fixing your broken gate motors.
        </p>

        <br/>

        <h2>Gate Motor Services</h2>
        <?php showServices(); ?>


        <br/>

        <h2>Gate Motors Brands</h2>
        <?php showBrands(); ?>

    </div>
    <!--content end -->
    <b class="rbottom">
      <b class="r4"></b> <b class="r3"></b> <b class="r2"></b> <b class="r1"></b>
    </b>
    </div>

</div>


<div style="width:495px;text-align: center; padding:10px">
    <div style="text-align:left">
          <br/>
            
            <span style="text-transform:uppercase">
                <strong style="font-size:200%">We do Gate Motor Repairs, Install and Supply New Gate Motors</strong></span>
            <br/>
            <br/>
    </div>
</div>
<br/>
<br/>


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
<?php
    if (isset($extraContent)) {
        include($extraContent);
        echo "<br/> <br/>";
    }
?>

<h2>Our Service Promise to you!</h2>
<h3>Good Value</h3>
<p>
    We always strive to give you market related pricing on motors and repair services, and to do the best possible
    quality job for the money. If you feel that you've been treated less than fair by one of our techicians or
    installation partners, please contact the founder at <b>andries.malan@gmail.com</b> or on <b>083 327 2921</b>.
</p>

<h3>Prompt and Responsive</h3>
<p>
We always have our dedicated assistant on standby during office hours, to take your calls. Her duty is to always
get promptly back to you with a solution! We won't leave you hanging! I hate it when companies are unresponsive to me,
and I'm sure YOU DO TOO! Thats why I've made response time a key criterion at Gate Motor Guru - [Andries Malan, the Founder of Gate Motor Guru]
</p>



<h3>Fair Treatment and Good Advice</h3>
<p>
    I hold all our technicians and installation partners to the same level of standard, that I myself would like
    to be treated to!
    <br/>
    If you are just looking for some general information for your <strong>gate motor</strong> you should try our
    <a href="forum/">forums</a>. If you need personal attention and great service try one of our approved <em>gate motor</em> Guru's.
    South Africa's leading Gate Motors Web Site.
</p>

<h3>Terms of Service</h3>
<p>
    GateMotorGuru (Pty) Ltd [Gate Motor Guru] acts as a referral agent - putting you in touch with the technician closest to you,
    based on our perceived match between your requirements and the expertise of the specific technician (guru partner), and based on partner
    availability.
</p>

<p>
    We actively monitor the performance of all partner technical companies - often small owner operated businesses who are
    dependant on us for their livelyhoods - and we actively investigate customer complaints.
    When we discover repeated complaints or can pinpoint misconduct by any of our partner technical teams, we drop them fast!
</p>

<p> Despite our best intentions of putting you in touch with high quality service and products, ultimately any transaction
    occurs between you and the guru partner company, and Gate Motor Guru cannot accept legal liability for services performed
    or products supplied by our partners to you.
</p>

<br/>
<br/>

<?php include "include/footer.php"; ?>

