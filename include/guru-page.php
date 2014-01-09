<?php
include_once __DIR__."/globalsettings.php";
include_once __DIR__."/areas.php";
include_once __DIR__."/snippets.php";

/* insure that the right varialbes are set
 *  $guruName
 *  $guruCell
 *  $guruArea
 *  $guruPic
 */


$pageTitle = "Guru $guruName | Gate Motors Repairs and Installation";
$metaTitle = "Guru $guruName | Gate Motor Repairs and Installation of Gate Motors";
$metaDescription = "Guru $guruName |  Featured gate motor expert in $guruArea";
$metaKeywords = "$guruName,gate motors,gate automation";

include_once __DIR__."/header.php";

//See if we are displaying page for a guru removed from our panel, or temporarily suspended...
if (!isset($guruInactive)) $guruInactive = FALSE; //if not set, set to false, otherwise we assume it will have a TRUE or 1 value set

?>

<h1>Let <?= $guruInactive ? 'Us' : $guruName?> help you with all your Gate Motor requirements</h1>

<?php
    if (!isset($newLayout)) {
        ?>
            <p>
                Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
            </p>
        <?php
    }
?>


<?php
    if (isset($newLayout) && $newLayout == 1) {
        ?>
        <div style="float:left">
            <p>
                Whether it is help with a sliding gate motor or a swing gate, you've come to the right place.
            </p>

            <?php
                if (!$guruInactive) $formButtonText = "Send your details to $guruName";
                include __DIR__."/form-for-guru.php";
            ?>
        </div>
        <div style="float:right;width:302px;height:368px;padding-right:50px">
            <br/>
            <br/>
            <br/>
            <img src="images/<?=$guruPic?>" style="width:241px;height:294"/>
        </div>
        <div style="clear:both"></div>
        <?php include($partnerInfo);?>

<?php
    }
    else { //Use the old layout with no photo
        ?>
        <div style="float:right">
            <div style=" border-style:solid;border-width:2px;border-color:black;padding:20px">
                <div style="width:250px">
                    Name : <?=$guruName?> <br/>
                    Area : <?=$guruArea?> <br/>
                    <?php /*Cell : <?=$guruCell?> <br/> */?>
                    PLEASE PHONE <?= $assistantNameUpper ?> (ASSISTANT) AT THE OFFICE: 079 613 7845
                </div>
            </div>
            <div>
                <br/>
                <br/>
                <?php if (isset($partnerInfo)) include($partnerInfo); ?>
                <br/>

            </div>
        </div>

        <div style="float:left">
            <?php
                $formButtonText = "Send your details to $guruName";
                include __DIR__."/form-for-guru.php";
            ?>
        </div>
        <?php
    }//end-else

?>

<div style="clear:both"></div>




<div style="float:right">
    <br/>
    <br/>
    Are you a Gate Motor Expert?<br/>
    &nbsp;&nbsp; ...looking for more business?<br/>
    <div style="text-align: center">
        <a href="partner-signup.php" style="text-decoration: none"><img src="images/join.jpg" alt="Join our Approved Gate Motor Gurus"/></a>
    </div>
    <div style="display:block;position:relative;left:30px">
        <img src="images/become-a-partner.gif"/>
    </div>
</div>

<br/>

<div style="clear:both"></div>
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

