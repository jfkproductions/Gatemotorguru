<?php
include_once "include/globalsettings.php";
include_once "include/areas.php";
include_once "include/snippets.php";

$brand = "gemini";
$pageTitle = "Gemini Gate Motors | Buy Install Repair";
$metaTitle = "$brand Gate Motor Repairs and Installation of Gate Motors";
$metaDescription = "Gemini Gate Motors and more - We supply,install and repair gate motors of all major brands throughout South Africa. Centurion,Gemini,Hansa - you name it.";
$metaKeywords = "$brand gate motor,$brand gate motors,$brand gate automation";

include_once "include/header.php";
?>
<?php
    //include "include/gate-motor-brand.php"; <- Old one - has its own header include
    include "include/gemini-products-page.php";
?>

<?php
    include "include/footer.php";
?>