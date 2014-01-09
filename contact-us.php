<?php 
include_once "include/globalsettings.php";
include_once "include/officeHours.php";
include_once "include/gurus.php";
$pageTitle = "Contact us -  Gate Motor Guru";
$metaTitle = "Gate Motor Guru - Contact Us";
$metaDescription = "Contact Details for Gate Motor Guru, SA's Top site for Gate Automation, Gate Motor Repairs,Sales and Installations.";
$metaKeywords = "Contact Us,gate motor guru contact details,contact gate motor guru";

include "include/header.php";
?>

  <tr>
  <td colspan="2">
	<h1>Contact Us - <?=$defCompanyName?></h1>
		<h2>What we do</h2>
			<p>
			We Supply, Install and Repair Gate Motors throughout South Africa. All major brands such as centurion, gemini and more.
			<br/>
			Click here for more information about some of the <a href="/electric-gate-motors.php">electric gate motors</a> that we supply.
			</p>

		<h2>The people behind <strong>Gate Motor Guru</strong></h2>

                <h3>Our Gate Motor Experts in Gauteng</h3>
                <?php showGautengGurus(); ?>
                <div style="clear: both">
                </div>
                <br/>

<?php
    if ($IsOfficeHours) {
?>
                <div style="border-style:solid;padding:10px;">
                PLEASE PHONE <u><?= $assistantName ?></u> <b> - 079 613 7845 - </b><br/>
                &nbsp;&nbsp;<b><?= $assistantGenderUpper?> will help you with all Prices, Quotes, Booking of a Technician, and all follow-ups and enquiries.</b>
                </div>
<?php
    } else { //else its NOT office hours
        ?>
                <div style="border-style:solid;padding:10px;">
                    We are only available by phone during <u>office hours</u> (Mon-Fri 8:00-17:00)<br/><br/>
                &nbsp;&nbsp;<b>Use our contact form and we'll get back to you at the earliest convenience.</b>
                </div>
        <?php
    }
?>
                <h3>We take service serious, fill in the form below and we will get back to you FAST</h3>
                <?php
                    include "include/form.php";
                ?>
                <br/>



                <h3>About the Founder </h3>
			<strong>Andries Malan</strong><br/>
                        <br/>
			Andries has always had a keen entrepreneurial sense, and has started and operated several other businesses including
			an IT Support Business. He brings management and marketing experience to the team. His philosophy is grounded in the concept
			that "You only deserve to make money when you add value and do what you promise".
			<br/>Contact Andries on: 083 327 2921 (personal cell) / 079 613 7845 (business cell)<br/>


                        <br/>
			ARE YOU A GATE MOTOR INSTALLER, AND WOULD LIKE TO RECEIVE JOBS FROM US?<br/>
			Contact Andries for all partner enquiries, on 083 327 2921/079 613 7845, or email andries.malan@gmail.com<br/>
                        Or visit our <a href="partner-signup.php">Partner Sign-up</a> page.
			</p>



                
		<h2>Company Details</h2>
			<p>
			Website is managed by <br/>
			GateMotorGuru (Pty) Ltd<br/>
			On behalf of Claritec Trading and Investments (owner of website), and our partner Gate Motor Installers.
			</p>

                        <p>Each guru partner - an installer or repairer, is an independent company - usually a small owner operated
                            business that Gate Motor Guru has identified as trustworthy and of good service.
                        </p>

                        <p> GateMotorGuru (Pty) Ltd - acts as a referral agent, putting you in touch with the closest
                            technician company that we believe can help you. Any transactions are ultimately between you and the respective gate motor guru partner company.
                        </p>

  </td>
  </tr>

  <tr>
    <td colspan="2" valign="top"><img src="images/footer.jpg" width="901" height="37" alt="image"/></td>
  </tr>
</table>

<?php include "include/footer.php"; ?>


</body>
</html>
