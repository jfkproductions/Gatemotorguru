<?php include_once __DIR__."/formvalidation.php"; ?>
<?php include_once __DIR__."/officeHours.php"; ?>


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

function showSelectArea()
{
    global $city,$province;
?>
<select id="x" name="city" onChange="areaSelected(this)">
  <optgroup label="Gauteng">
    <option value="pretoria" <?=@(($city=="Pretoria")?"selected":"") ?>>Pretoria</option>
    <option value="centurion" <?=@(($city=="Centurion")?"selected":"") ?>>Centurion</option>
    <option value="midrand" <?=@(($city=="Midrand")?"selected":"") ?>>Midrand</option>
    <option value="kempboksben" <?=@(($city=="Kempton Park"||$city=="Boksburg"||$city=="Benoni")?"selected":"") ?>>Kempton,Boksburg,Benoni</option>
    <option value="fourways" <?=@(($city=="Fourways")?"selected":"") ?>>Fourways</option>
    <option value="sandton" <?=@(($city=="Sandton")?"selected":"") ?>>Sandton</option>
    <option value="bryanston" <?=@(($city=="Bryanston")?"selected":"") ?>>Bryanston</option>
    <option value="randburg" <?=@(($city=="Randburg")?"selected":"") ?>>Randburg</option>
    <option value="roodepoort" <?=@(($city=="Roodepoort")?"selected":"") ?>>Roodepoort</option>
    <option value="johannesburg" <?=@(($city=="Johannesburg")?"selected":"") ?>>Johannesburg Other</option>
  </optgroup>
  <optgroup label="Western Cape">
    <option value="cape town" <?=@(($province=="Cape" || $city=="Cape Town")?"selected":"") ?>>Cape Town and Surrounding</option>
    <option value="stellenbosch" <?=@(($city=="Stellenbosch")?"selected":"") ?>>Stellenbosch</option>
    <option value="george" <?=@(($city=="George")?"selected":"") ?>>George</option>
    <option value="cape-winelands-district">Cape Winelands District</option>
    <option value="cape-west-coast-district">West Coast District</option>
    <option value="cape-overberg-district">Overberg District</option>
    <option value="cape-eden-district">Eden District</option>
    <option value="central-karoo-district">Central Karoo District</option>    
  </optgroup>
  <optgroup label="Eastern Cape">
    <option value="port-elizabeth" <?=@(($city=="Port Elizabeth")?"selected":"") ?>>Port Elizabeth</option>
    <option value="east-london" <?=@(($city=="East London")?"selected":"") ?>>East London</option>
    <option value="graaff-reinet" <?=@(($city=="Graaff Reinet")?"selected":"") ?>>Graaff Reinet</option>
    <option value="grahamstown" <?=@(($city=="Grahamstown")?"selected":"") ?>>Grahamstown</option>
    <option value="st-francis-bay" <?=@(($city=="St Francis Bay")?"selected":"") ?>>St Francis Bay</option>
    <option value="eastern-cape-other">Eastern Cape - OTHER</option> 
  </optgroup>
  <optgroup label="Northern Cape">
    <option value="colesberg" <?=@(($city=="Colesberg")?"selected":"") ?>>Colesberg</option>
    <option value="kimberley" <?=@(($city=="Kimberley")?"selected":"") ?>>Kimberley</option>
    <option value="upington" <?=@(($city=="Upington")?"selected":"") ?>>Upington</option>
    <option value="northern-cape-other">Northern Cape - OTHER</option>
  </optgroup>

  <optgroup label="KZN">
    <option value="durban" <?=@(($province=="Durban")?"selected":"") ?>>Durban and Surrounding</option>
    <option value="richards-bay" <?=@(($city=="Richards Bay")?"selected":"") ?>>Richards Bay</option>
    <option value="umshlanga" <?=@(($city=="Umshlanga")?"selected":"") ?>>Umshlanga</option>
    <option value="pietermaritzburg" <?=@(($city=="Pietermaritzburg")?"selected":"") ?>>Pietermaritzburg</option>
    <option value="new-castle" <?=@(($city=="New Castle")?"selected":"") ?>>New Castle</option>
  </optgroup>
    <option value="other">Other</option>
</select>
<?php
}

//<td colspan="2" valign="top"><h2 >
?>

<div style="padding: 15px;padding-left:20px; border: 2px dashed #393792;">
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
    <br/>
    <div style="padding:5px">
<?php
    if ($IsOfficeHours) { //Only show contact number inside form during office hours
?>
        <b>Please call 079 613 7845 or fill in the form below</b>
<?php
    }
?>
    </div>
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
            <td align="right" valign="top" class="td_label">Closest Service Area:</td>
            <td valign="middle" class="td_formelements">
              <?php showSelectArea(); ?>
            </td>
          </tr>
          <tr class="Hidden" id="trotherarea">
            <td align="right" valign="top" class="td_label">Enter your area:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="otherarea" id="otherarea" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="middle" class="td_formelements">
                <?php
                if (isset($formButtonText)) {
                    ?>
                }
                <label>
                    <input type="submit" name="button" id="button" value="<?= isset($formButtonText) ? $formButtonText : "Send your details";?>" />
                </label>
                <?php
                }
                else {
                    ?>
                <input type="image" src="images/send-details-button.jpg" name="button" id="button" value="<?= isset($formButtonText) ? $formButtonText : "Send your details";?>" />
                    <?
                }
                ?>
            </td>
          </tr>
         </table>
     <input type="hidden" name="Source-Page" value="<?=$_SERVER['REQUEST_URI']?>">
     <?php injectSPAMCHECKfield(); ?>
    </form>
</div>

<?php injectSPAMCHECKjs("form1"); ?>

<?php generateRequiredFieldsValidater(array("Name","ContactNumber")); ?>