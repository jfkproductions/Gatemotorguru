<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
date_default_timezone_set("UTC");
echo date("Y-M-d H:i:s")."<br/>";


	$mail_to="amalan-23@forms.zohocreator.com";
	/*
	$mailHeader = "Return-Path: gatemotorguru.co.za@dedi224.jnb2.host-h.net\r\n"
		. "From: gatemotorguru.co.za@dedi224.jnb2.host-h.net\r\n";

		webmaster@dedi224.jnb2.host-h.net
	*/

	$header = "";
	$header .= "Reply-To: andries.malan@gmail.com\r\n";
    $header .= "Return-Path: andries.malan@gmail.com\r\n";
    $header .= "From: andries.malan@gmail.com\r\n";
	$header .= "CC: andries.malan@gmail.com";

    //$header .= "Organization: My Organization\r\n";
    //$header .= "Content-Type: text/plain\r\n";
	$mailHeader = $header;


	$mail_sub= "zoho test gm lead";

        //Determine how to set the area or guru that the form was submitted to
        $requestedAreaOrGuru = "";

	$mail_mesg =
		"Date Captured: ".date("d-M-Y H:i:s")."\n".
		"Name: test2\n".
		"Source of Enquiry: Web Form\n".
                "Contact Number: \n".
                "Other Contact Nr: \n".
                "Email Address: \n".
                "Notes: \n".
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



?>
