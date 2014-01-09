<?php
include_once "include/globalsettings.php";
include_once "include/GuruAllocator.php";
include_once "include/areas.php";
include_once "include/snippets.php";
include_once "include/formvalidation.php";

$pageTitle = "Thank you - Gate Motor Guru";
$metaTitle = "Thank you - Gate Motor Guru";
$metaDescription = "Gate Motor Guru - Thank you for submitting your details.";
$metaKeywords = "";

include_once "include/header.php";
?>

<?php blockSpam("submit.php"); ?>


<?php
function sendLeadZOHO() 
{

	$mail_to="amalan-23@forms.zohocreator.com";
	/*
	$mailHeader = "Return-Path: gatemotorguru.co.za@dedi224.jnb2.host-h.net\r\n"
		. "From: gatemotorguru.co.za@dedi224.jnb2.host-h.net\r\n";
		
		webmaster@dedi224.jnb2.host-h.net
	*/							 
		
	$header = "";
	$header .= "Reply-To: noreply@gatemotorguru.co.za\r\n";
        $header .= "Return-Path: noreply@gatemotorguru.co.za\r\n";
        $header .= "From: noreply@gatemotorguru.co.za\r\n";
	//$header .= "CC: andries.malan@gmail.com";

    //$header .= "Organization: My Organization\r\n";
    //$header .= "Content-Type: text/plain\r\n"; 
	$mailHeader = $header;	
		
		
	$mail_sub= "zoho gm lead";

        //Determine how to set the area or guru that the form was submitted to
        $requestedAreaOrGuru = "";
        if (isset($_POST['otherarea']) && strlen($_POST['otherarea']) > 0) {
            $requestedAreaOrGuru = $_POST['otherarea'];
        }else {
            //Other area is not set, see if regular area is set
            if (isset($_POST['city']) && strlen($_POST['city']) > 0)
                $requestedAreaOrGuru = $_POST['city'];
        }
        //Show button in case it is set to "Send to Guru X"
        if (isset($_POST['button']) && strlen($_POST['button']) > 0 && $_POST['button'] != "Send your details") {
            $requestedAreaOrGuru = $requestedAreaOrGuru . "|".$_POST['button'];
        }

        //Append source page
        if (isset($_POST['Source-Page']))
            $requestedAreaOrGuru = $requestedAreaOrGuru . "|Source-Page ".$_POST['Source-Page'];


	$mail_mesg = 
		"Date Captured: ".date("d-M-Y H:i:s")."\n".
		"Name: ".$_POST["Name"]."\n".
		"Source of Enquiry: Web Form\n".
                "Contact Number: ".$_POST['ContactNumber']."\n".
                "Other Contact Nr: ".$_POST['OtherPhoneNumber']."\n".
                "Email Address: ".$_POST['EmailAddress']."\n".
                "Client Notes: ".$_POST['Notes']."\n".
                "Requested Area or Partner: ".$requestedAreaOrGuru."\n".
                "Lead Status: Just Captured\n".
                "Allocate Partner: \n".
                "More Notes about this client: \n".
                "Client Physical Address: \n".
                "Work Team Allocated: \n".
                "Date/Time of next scheduled action: \n".
                "Description of next scheduled action: \n";

 
        //Check for success/failure of delivery
        if(mail($mail_to,$mail_sub,$mail_mesg, $mailHeader))
          ;
        else {
          echo "An internal server error has occured - Contact Andries Directly on 083 327 2921 and please tell me about this.";
		}
		
   
}
//-END OF ZOHO

//returns strings seperated by newlines of labeled list of all HTML FORM post fields
function allPostFields()
{
    $result = "";
    foreach ($_POST as $field=>$value) {
        $result = $result."$field    : $value\n";
    }
    return $result;
}

function sendLead($guruEmail)
{



        $leadEmailSubject = "LEAD FROM GATEMOTORGURU.CO.ZA";
        //global $ccList;
        

	$mail_to="$guruEmail";
	$mailHeader = "Return-Path: webmaster@gatemotorguru.co.za\r\n"
		. "From: webmaster@gatemotorguru.co.za\r\n";
		//. "CC: $ccList\r\n";

	$mail_sub= "$leadEmailSubject";	
		
	$mail_mesg = 
        "$leadEmailSubject\n"
        . "\n"
        . "PLEASE CONTACT CLIENT\n"
        . "\n"
        . "\n"
        . "Information Provided:\n"
        . "\n"
        .allPostFields()
        . "=============================================================>\n";
              
        //Check for success/failure of delivery
        if(mail($mail_to,$mail_sub,$mail_mesg, $mailHeader)){
            //Do nothing if succesful
        }
        else {
            echo "$mail_to,$mail_sub,$mail_mesg, $mailHeader)";
          echo "An internal server error has occured - Contact Andries on 083 327 2921 or andries.malan@gmail.com";
        }
		
   
}//END function-Send Lead

function SaveLeadInDB()
{

    return; // WARNING !!! Hard Coded for now to do nothing

    openDB();

    $insertSql = "INSERT INTO `lead` (leadDateTime, name, number1, number2, notes, email) ".
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

<body>

		
<?php
        if (isset($_POST['city']))
            $city = $_POST['city']; // CITY SELECTED BY USER ON LEAD-FORM
        else $city = "";

        //Allocate to next guru based on City
        $guruEmail = nextGuruEmailAddress($city);


	//Send EMAIL
	//sendLead($guruEmail);
        sendLead("christiaan@gatemotorguru.co.za"); // !!! HARD CODED

	//Add to ZOHO CRM
	//sendLeadZOHO();



        //Save lead in main lead database
        saveLeadInDB(); //? Perhaps we should save to which guru the lead was allocated

 ?>  

<h1>Thank you!</h1>
<br/>
<br/>
<p>
    <u>We will get back to you within 15 minutes</u> (during office hours),<br/> or within the next business day (for requests submitted after hours).
</p>

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