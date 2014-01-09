<?php 
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/gurus.php";

$pageTitle = "Gate Motors $province | GateMotor Guru";
$metaTitle = "Gate Motor Repairs and Installation of Gate Motors in $province";
$metaDescription = "We supply,install and repair gate motors in $province. Brands: Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor,gate motors,gate motor repairs, sliding gate motor";

//render HEADER
include __DIR__."/header.php";

//Fill in "the" when needed
if ($province == "Cape") $province = "the Cape";

//Durban "Province" is actually KZN
if ($province == "Durban") $province = "KZN and Durban Area";


?>

<h1>Gate Motors in <?=$province?> | Gate Motor Guru handles Repairs, New Installations, and Sales</h1>
<p>
    For all your Gate Automation and Gate Motor Repair needs in <?=$province?>, covering all major brands.
</p>

<p>
    We have a collection of skilled gate motor guru's throughout <?=$province?>, so we can help you with all your
    gate motor repairs in <?=$province?>, as well as sourcing and installation of new gate motors.
</p>
<p>
    We cover all major brands including <a href="centurion-gate-motors.php">Centurion</a>,
    <a href="gemini-gate-motors.php">Gemini</a>, <a href="hansa-gate-motors.php">Hansa gate motors</a>.
</p>

<br/>


<?php
    //remove extra "The" or "KZN and Area"
    if ($province == "the Cape") $province = "Cape";
    if ($province == "KZN and Durban Area") $province = "Durban";
    ShowCitiesInProvince($province);
?>



<div style="clear:both"></div>
<br/>
<br/>
<br/>

<?php include __DIR__."/form.php"; ?>


<br/>
<br/>
Featured Gate Motor Experts in this province:<br/>
<br/>

<?php
    include_once __DIR__."/gurus.php";
    showProvinceGurus($province);
?>



<div style="clear:both"></div>
<br/>
<br/>
Are you a Gate Motor Expert?<br/>
&nbsp;&nbsp; ...looking for more business?<br/>
<div style="text-align: center">
    <a href="partner-signup.php" style="text-decoration: none"><img src="images/join.jpg" alt="Join our Approved Gate Motor Gurus"/></a>
</div>
<br/>
<br/>



<?php include __DIR__."/footer.php"; ?>


</body>
</html>
