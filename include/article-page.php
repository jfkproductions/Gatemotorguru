<?php
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";

include __DIR__."/articles/".$article;

include_once __DIR__."/header.php";
?>


<?php
    showArticle();
?>

<br/>
<br/>

<p>
    If you need service from a Gate Motor Expert, Select your closest Area:
</p>

<?php
    showAllAreasInSA();
?>
<div style="clear:both"></div>
<br/>
<br/>

<h2>Gate Motor Services</h2>
<?php showServices(); ?>


<br/>

<h2>Gate Motors Brands</h2>
<?php showBrands(); ?>


<br/>
<br/>
<?php include __DIR__."/partner-bait-snippet.php"; ?>
<div style="clear:both"/>

<br/>
<br/>

<p>
    Back to <a href="forum/">forums</a>
</p>

<br/>
<br/>

<?php include __DIR__."/footer.php"; ?>

