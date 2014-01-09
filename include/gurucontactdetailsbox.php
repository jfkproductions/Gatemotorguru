<?php include_once __DIR__."/officeHours.php"; ?>

<?php
    //See if we are displaying page for a guru removed from our panel, or temporarily suspended...
    if (!isset($guruInactive)) $guruInactive = FALSE; //if not set, set to false, otherwise we assume it will have a TRUE or 1 value set
?>


<?php
if (!$guruInactive) {
    ?>
    <div style=" border-style:solid;border-width:2px;border-color:black;padding:20px;width:270px">
        <div style="width:250px">
            Name : <?=$guruName?> <br/>
            Area : <?=$guruArea?> <br/>
            <?php /*Cell : <?=$guruCell?> <br/> */?>
       <?php
       ?>
<?php
    if ($IsOfficeHours) { //Only show number during office hours
?>
            PLEASE PHONE <?= $assistantNameUpper ?> (ASSISTANT) AT THE OFFICE: 079 613 7845

        </div>
    </div>

    <?php
    }//end-isOfficeHours
}//End-if-!guruInactive
else {
    //The guru is inactive
}
?>