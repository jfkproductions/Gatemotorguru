<?php include_once __DIR__."/formvalidation.php"; ?>

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


//<td colspan="2" valign="top"><h2 >
?>

<div style="padding: 15px;margin-left:200px">

    <h2><u>New Partner Sign-up Enquiry Form:</u></h2>

    <br/>
    <div>
     <form id="form1" name="form1" method="post" action="/partner-submit.php">
         <table width="100%" border="0" cellspacing="1" cellpadding="0" class="form_table">

          <tr>
            <td align="right" valign="top" class="td_label">Your name and surname:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="PartnerName" id="textfield" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Cellphone or Primary Contact number:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="PartnerTel" id="textfield2" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Other contact number:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="OtherTel" id="textfield3" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Email Address:</td>
            <td valign="middle" class="td_formelements"><label>
              <input type="text" name="email" id="email" size="32" />
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Tell us about yourself, your business and your experience working with gate motors:</td>
            <td valign="middle" class="td_formelements"><label>
              <textarea name="PartnerDescription" id="textarea" cols="40" rows="5"></textarea>
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="top" class="td_label">Your Service Areas where you operate:</td>
            <td valign="middle" class="td_formelements"><label>
                    <input type="PartnerServiceAreas" name="area" id="area" size="60" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="middle" class="td_formelements">
              <br/>
              <input type="image" name="submit" id="submit" src="images/partner-yes-button.jpg" alt="submit" />
            </td>
          </tr>
         </table>
    <input type="hidden" name="Source-Page" value="<?=$_SERVER['REQUEST_URI']?>">
    <?php injectSPAMCHECKfield(); ?>
    </form>
    <div>
</div>

<?php injectSPAMCHECKjs("form1"); ?>