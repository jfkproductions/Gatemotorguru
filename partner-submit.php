<?php
include_once "include/globalsettings.php";
include_once "include/GuruAllocator.php";
include_once "include/areas.php";
include_once "include/snippets.php";
include_once "include/formvalidation.php";

$pageTitle = "Thank you partner- Gate Motor Guru";
$metaTitle = "Thank you partner- Gate Motor Guru";
$metaDescription = "Gate Motor Guru - Thank you for submitting your partner details.";
$metaKeywords = "";

include_once "include/header.php";
?>

<?php blockSpam("partner-submit.php"); ?>

<?php
//returns strings seperated by newlines of labeled list of all HTML FORM post fields
function allPostFields()
{
    $result = "";
    foreach ($_POST as $field=>$value) {
        $result = $result."$field    : $value\n";
    }
    return $result;
}

function sendPartner()
{


        $leadEmailSubject = "PARTNER ENQUIRY - GATEMOTORGURU.CO.ZA";
        global $mainContactPerson;
        global $mainContactNumber;


	$mail_to="christiaan@gatemotorguru.co.za";
	$mailHeader = "Return-Path: andries.malan@gmail.com\r\n"
		. "From: andries.malan@gmail.com\r\n";

	$mail_sub= "$leadEmailSubject";
		
	$mail_mesg = 
        "$leadEmailSubject\n"
        . "\n"
        . "\n"
        . allPostFields()
        . "Notes      :  ".$_POST["textarea"]."\n"
        . "=============================================================>\n";
              
        //Check for success/failure of delivery
        if(mail($mail_to,$mail_sub,$mail_mesg, $mailHeader))
          ;
        else {
          echo "An internal server error has occured - Contact Andries on 083 327 2921 or andries.malan@gmail.com";
        }
		
   
}//END function-Send Lead

function SavePartnerInDB()
{

    openDB();

    $insertSql = "INSERT INTO `partnerinquiry` (leadDateTime, name, number1, number2, notes, email) ".
                    "VALUES ( NOW(), '".	$_POST["textfield"]."', '".     //NAME
                                                                                            $_POST["textfield2"]."', '".    //Number 1
                                                                                            $_POST["textfield3"]."', '".    //Number 2
                                                                                            $_POST["textarea"]."', '".		//NOTES
                                                                                            $_POST["email"]."')";           //email

    if (mysql_query($insertSql)) {
       //SUCCESS
    }
    else {
          print "Possible database Error - However your information has been submitted";
	}
}

?>


<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">

<?php
    sendPartner()
?>

  
   <tr>
    <td valign="top" class="left">
		<h1>Thank you!</h1>
		<br/>
		<br/>
		<p>
		We will usually get back to you the same day,<br/> or within the next business day.
		</p>
	</td>
    <td valign="top" class="right">
		
		
    </td>
  </tr>
 

  <tr>
    <td colspan="2" valign="top"><img src="images/footer.jpg" width="901" height="37" /></td>
  </tr>
</table>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?=$trackingCode?>

<?php
include_once "include/footer.php";
?>