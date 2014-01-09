<?php
/*
 * Check and STOP spam form submits
 *
 * Check if required fields are filled in
 *
 * Utility methods to help with above.
 */

function injectSPAMCHECKfield()
{
    ?>
    <input type="hidden" name="checkspam" value="notgood">
    <?php
}

function injectSPAMCHECKjs($formName)
{
    ?>
    <script type="text/javascript">
    var formname = "<?=$formName?>";
    var fieldname = "checkspam";
    var finalvalue = "itsgood";
    var soft_sell = "document.";
    soft_sell += formname;
    soft_sell += "." + fieldname + ".va";
    eval(soft_sell + "lue='"+finalvalue+"'");
    </script>
    <?php
}

function validateThisForm()
{
    ?> onsubmit="javascript:return ValidateForm(this)" <?php
}

function generateRequiredFieldsValidater($fieldsToCheck)
{
    ?>
    <script type="text/javascript">
        function ValidateForm(form)
        {
            <?php
            foreach ($fieldsToCheck as $fieldToCheck)
            {
                ?>
                if ((form.<?=$fieldToCheck?>.value==null) || (form.<?=$fieldToCheck?>.value.length==0)) {
                    //<?=$fieldToCheck?> is empty
                    alert('Please enter <?=$fieldToCheck?>')
                    form.<?=$fieldToCheck?>.focus();
                    return false;
                }
                <?php
             }?>
            //All checks passed
            return true;
        }
    </script>
    <?
}


function checkBlankPost()
{
    if(count($_POST) == 0) {
        die("It seems you didn't submit any form fields. If you see this, it means there is a problem - please contact Andries on 083 327 2921 so I can fix it<br/><br/> You can also email gatemotorguru@gmail.com");
    }
}

function displayPOSTvarsAsHiddenFields()
{
    foreach ($_POST as $field=>$value) {
        ?>
        <input type="hidden" name="<?=$field?>" value="<?=$value?>"/>
        <?php
    }
}

function displayHumanTestForm($submitPHP)
{   ?>
    <form id="form1" name="form1" method="post" action="<?=$submitPHP?>">
        <?php displayPOSTvarsAsHiddenFields() ?>
        Please confirm that you are an actual person and not an automated spam robot, by entering <b>1234</b> in the field below:<br/>
        <input type="text" name="verifyhuman"/>
        <input type="submit" name="send" value="send"/>
    </form>
    <?php
}


function blockSpam($submitPHP)
{
    checkBlankPost(); //don't allow blank submits
    if (!isset($_POST['checkspam']) && !(isset($_POST['verifyhuman']))) die("ERROR: Could not find anti-spam checking fields. Please alert Andries of site error on 083 327 2921 or email andries.malan@gmail.com");
    if (isset($_POST['checkspam']) && $_POST['checkspam']=="itsgood") return; //Spam check passed
    if (!isset($_POST['verifyhuman'])) {
        //Seems like the person (or robot) trying to submit doesn't have javascript, lets challenge them
        displayHumanTestForm($submitPHP);
        die("please verify");
    }
    //OK it seems like the person has now tried to submit the verifyhuman test
    if ($_POST['verifyhuman'] != "1234") {
        //Robot or Person failed to enter the 1234 that was asked
        die("Sorry you had to enter 1234. If you need further assistance call Andries on 083 327 2921 or email andries.malan@gmail.com");
    }
}


?>
