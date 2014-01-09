<?php
/* 
 * Show the Province / Cities selection block(s)
 */


function showServices($brand="",$where="")
{
    if ($brand == "" && $where=="") {
?>
        <ul>
            <li><a style="color:black" href="gate-motor-repairs.php">Gate Motor Repairs</a></li>
            <li><a style="color:black" href="gate-motor-installations.php">Gate Motor Installs</a></li>
            <li><a style="color:black" href="buy-gate-motor.php">Buy a Gate Motor</a></li>
        </ul>
<?php
    }//end-if
    else
    if ($brand != "" && $where == "") {
?>
        <ul>
            <li><a style="color:black" href="<?=str_replace(" ","-",$brand)?>-gate-motor-repairs.php"><?=ucwords($brand)?> Gate Motor Repairs</a></li>
            <li><a style="color:black" href="<?=str_replace(" ","-",$brand)?>-gate-motor-installation.php"><?=ucwords($brand)?> Gate Motor Installs</a></li>
            <li><a style="color:black" href="buy-<?=str_replace(" ","-",$brand)?>-gate-motor.php">Buy <?=ucwords($brand)?> Gate Motor</a></li>
        </ul>
<?php
    }

} //end-showServices


function showBrands($extra="", $pre="")
{
    if ($extra=="" && $pre=="") {
?>
        <ul>
            <li><a style="color:black" href="centurion-gate-motors.php">Centurion Gate Motors</a></li>
            <li><a style="color:black" href="gemini-gate-motors.php">Gemini Gate Motors</a></li>
            <li><a style="color:black" href="hansa-gate-motors.php">Hansa Gate Motors</a></li>
        </ul>
<?php
    }//end-if-extra==""
    else if ($pre == "") {
        //Some value has been set for extra
?>
        <ul>
            <li><a style="color:black" href="centurion-gate-motor-<?=str_replace(" ","-",$extra)?>.php">Centurion Gate Motor <?=ucwords($extra)?></a></li>
            <li><a style="color:black" href="gemini-gate-motor-<?=str_replace(" ","-",$extra)?>.php">Gemini Gate Motor <?=ucwords($extra)?></a></li>
            <li><a style="color:black" href="hansa-gate-motor-<?=str_replace(" ","-",$extra)?>.php">Hansa Gate Motor <?=ucwords($extra)?></a></li>
        </ul>
<?php
    }//end-else
    else {
        //Some value has been set for pre
?>
        <ul>
            <li><a style="color:black" href="<?=str_replace(" ","-",$pre)?>-centurion-gate-motor.php"><?=ucwords($pre)?> Centurion Gate Motor</a></li>
            <li><a style="color:black" href="<?=str_replace(" ","-",$pre)?>-gemini-gate-motor.php"><?=ucwords($pre)?> Gemini Gate Motor</a></li>
            <li><a style="color:black" href="<?=str_replace(" ","-",$pre)?>-hansa-gate-motor.php"><?=ucwords($pre)?> Hansa Gate Motor</a></li>
        </ul>
<?php
    }
} //end-function:showServices
?>


<?php
function showServicesAndBrands()
{
    ?>
<div style="clear:both"></div>
<div style="width:300px;float:left">
    <h2 style="text-decoration: underline">Gate Motor Services</h2>
    <p>
        <a class="ServicesButton" href="gate-motor-repairs.php">Gate Motor Repairs</a>
    </p>
    <p>
        <a class="ServicesButton" href="gate-motor-installations.php">Gate Motor Installs</a>
    </p>
    <p>
        <a class="ServicesButton" href="buy-gate-motor.php">Buy a Gate Motor</a>
    </p>

</div>

<div style="width:300px;float:left;">
    <p>
        <a class="ImageLinkBoxLess" href="centurion-gate-motors.php">
            <img src="images/centurion-logo.jpg" alt="Centurion Systems" style="padding-left:26px"/>
        </a>
    </p>

    <p>
        <a class="ImageLinkBoxLess" href="gemini-gate-motors.php">
            <img src="images/gemini-logo.jpg" alt="Gemini Gate Motors" style="padding-left:26px"/>
        </a>
    </p>

    <p>
        <a class="ImageLinkBoxLess" href="hansa-gate-motors.php">
            <img src="images/hansa-logo.jpg" alt="Hansa Gate Motors" style="padding-left:26px"/>
        </a>
    </p>

</div>

<div style="width:300px;float:left">
    <h2 style="text-decoration: underline">Gate Motor Brands</h2>
    <p>
        <a class="BrandsButton" href="centurion-gate-motors.php">Centurion Gate Motors</a>
    </p>
    <p>
        <a class="BrandsButton" href="gemini-gate-motors.php">Gemini Gate Motors</a>
    </p>
    <p>
        <a class="BrandsButton" href="hansa-gate-motors.php">Hansa Gate Motors</a>
    </p>

</div>

<div style="clear:both"></div>

<?php
} //end-function:showServicesAndBrands
?>


<?php
function showCenturionHansaGemini()
{
    ?>
<span>
    <a class="ImageLinkBoxLess" href="centurion-gate-motors.php">
        <img src="images/centurion-logo.jpg" alt="Centurion Systems" style="padding-left:26px"/>
    </a>
</span>
<span>
    <a class="ImageLinkBoxLess" href="hansa-gate-motors.php">
        <img src="images/hansa-logo.jpg" alt="Hansa Gate Motors" style="padding-left:26px"/>
    </a>
</span>
<span>
    <a class="ImageLinkBoxLess" href="gemini-gate-motors.php">
        <img src="images/gemini-logo.jpg" alt="Gemini Gate Motors" style="padding-left:26px"/>
    </a>
</span>

    <?php
}//end-showCenturionHansaGemini
?>

<?php
function showCenturionHansa()
{
    ?>

<span style="float:left;height:193px;display:table;">
    <div style="vertical-align: middle; display:table-cell;">
        <div>
    <a class="ImageLinkBoxLess" href="centurion-gate-motors.php">
        <img src="images/centurion-logo.jpg" alt="Centurion Systems" style="padding-left:26px"/>
    </a>
        </div>
    </div>
</span>
<span style="float:left;height:193px;display:table;">
    <div style="vertical-align: middle; display:table-cell;">
        <div>
    <a class="ImageLinkBoxLess" href="hansa-gate-motors.php">
        <img src="images/hansa-logo.jpg" alt="Hansa Gate Motors" style="padding-left:26px"/>
    </a>
        </div>
    </div>
</span>

    <?php
}//end-showCenturionHansaGemini
?>