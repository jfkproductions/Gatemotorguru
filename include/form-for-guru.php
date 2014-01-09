<?php include_once __DIR__."/formvalidation.php"; ?>

<?php
    //See if we are displaying page for a guru removed from our panel, or temporarily suspended...
    if (!isset($guruInactive)) $guruInactive = FALSE; //if not set, set to false, otherwise we assume it will have a TRUE or 1 value set
?>

<script type="text/javascript">
function areaSelected(t)
{
    tr = document.getElementById('trotherarea');

    if (t.value == "other") {
        tr.className = "Visible";
    }
    else {
        tr.className = "Hidden";
    }

}
</script>


<?php
/*
 * Implement form-submit for a specific guru
 */

?>

<div style="padding: 15px; border: 3px dashed blue;">
<?php
    if (!isset($city)) {
?>
    <h2>Quote Request / Service Request / Enquiry Form </h2>
<?php
    }
    else {
?>
    <h2>Contact our gate motor expert in <?=$city?> for <u>Repairs</u>, <u>New Motors</u>, <u>Installs</u>, <u>General Inquiries</u></h2>
<?php
    }
?>

<?php
    //Display notice that specific guru is no longer active - if guru has been marked as inactive
    if (isset($guruName) && $guruInactive) {
        ?>
    <span style="background-color: yellow"><b>NOTE</b>: <?=$guruName?> is no longer associated with us,<br/> use the form below if you are a new customer<br/> and would like one of our other gate motor experts to assist you.</span>
    <br/>
    <h3><u>New Customer Enquiry Form:</u></h3>
        <?php
    }
?>

    <br/>
     <form id="form1" name="form1" method="post" action="submit.php" <?php validateThisForm(); ?>>
         <table width="100%" border="0" cellspacing="1" cellpadding="0" class="form_table">

          <tr>
            <td align="right" valign="top" class="td_label">Your name and surname:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="Name" id="textfield" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Cellphone or Primary Contact number:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="ContactNumber" id="textfield2" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Other contact number:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="OtherPhoneNumber" id="textfield3" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Email:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="EmailAddress" id="email" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Notes or instructions for us:</td>
            <td valign="middle" class="td_formelements"><label>
              <textarea name="Notes" id="textarea" cols="20" rows="5"></textarea>
            </label></td>
          </tr>
          
          <tr>
            <td>&nbsp;</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="submit" name="button" id="button" value="<?= isset($formButtonText) ? $formButtonText : "Send your details";?>" />
            </label></td>
          </tr>
         </table>
         <input type="hidden" name="Send-To-Specific-Guru" value="<?=$guruName?>">
         <input type="hidden" name="Source-Page" value="<?=$_SERVER['REQUEST_URI']?>">
         <?php injectSPAMCHECKfield(); ?>
    </form>

<?php
    //Display notice that specific guru is no longer active - if guru has been marked as inactive
    if (isset($guruName) && $guruInactive) {
        ?>
    <br/>
    <br/>
    <span style="background-color: yellow"><b>NOTE: PREVIOUS AND EXISTING CUSTOMERS LOOKING FOR <?=  strtoupper($guruName)?></b><br/> Please call him directly on <?=$guruCell?> </span>
    <br/>
    <br/>
    <span style="background-color: yellow"><b>NEW CUSTOMERS</b><br/> Please call Gate Motor Guru office on 079 613 7845 for service</span>

        <?php
    }
?>

</div>
<br/>
<br/>


<?php injectSPAMCHECKjs("form1"); ?>

<?php generateRequiredFieldsValidater(array("Name","ContactNumber")); ?>