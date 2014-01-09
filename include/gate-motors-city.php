<?php
// ASSUMES $city has been set
include_once __DIR__."/globalsettings.php";

$pageTitle = "Gate Motors $city | GateMotor Guru";
$metaTitle = "Gate Motor Repairs and Installation of Gate Motors in $city";
$metaDescription = "We supply,install and repair gate motors in $city. Brands: Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "gate motor $city,gate motors $city,gate motor repairs $city, sliding gate motor $city";

include __DIR__."/header.php";
include __DIR__."/gurus.php";
?>

<h1>Gate Motors in <?= $city ?> | Gate Motor Guru handles Repairs, New Installations, and Sales</h1>
<p>
    For all your Gate Automation and Gate Motor Repair needs in <?= $city ?>, covering all major brands.
</p>

<h2>Who can help you in <?= $city ?></h2>
<?php showCityGurus($city); ?>
<div style="clear:both"></div>

<p>
    For help in <a href="/"> other cities and places in South Africa click here</a>.
</p>
<p>
    We cover all major brands including <a href="centurion-gate-motors.php">Centurion</a>,
    <a href="gemini-gate-motors.php">Gemini</a>, <a href="hansa-gate-motors.php">Hansa gate motors</a>.
</p>

<br/>


<u>Filling in the form below will automatically forward your request to the closest gate motor guru that is available.</u><br/>
<br/>

<?php include __DIR__."/form.php"; ?>




<br/>
<br/>
<br/>


<?php include __DIR__."/footer.php"; ?>


</body>
</html>
