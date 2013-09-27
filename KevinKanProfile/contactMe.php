<?php
//Written By: Kevin Kan
//Require the header file once (to ensure it doesn't appear multiple times.
//The header file contains the company logo and nav bar
require_once 'header.php';
?>
<div class='pageContent'>
<h1>Contact Me</h1>
<h2>Contact Information</h2>
<ul>
	<li>Email: intrepidhonor@gmail.com</li>
	<li>Phone: (705)735-4158</li>
	<li>Work: Student at Georgian College, no phone number</li>
	<li>Postal Code: L4N 0C2</li>
	<li>Address: 31 Russel Hill Dr. Barrie, Ontario , Canada </li>
</ul>
<?php 
//Email form
$senderName="";
$senderEmail="";
$subject="";
$message="";
$errorMessage="";
if(isset($_POST['SEND'])){
	$senderName=trim($_POST['senderName']);
	$senderEmail=trim($_POST['senderEmail']);
	$subject=trim($_POST['subject']);
	$message=trim($_POST['message']);
	$errorMessage.=(strlen($senderName)<2)?"<li>Your name must be larger than 2 charaters.</li>":"";
	$errorMessage.=(preg_match('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Z]{2,4}/',$senderEmail))?"<li>Email is invalid.</li>":"";
	$errorMessage.=(empty($subject))?"<li>Subject is empty.</li>":"";
	$errorMessage.=(empty($message))?"<li>Message is empty</li>":"";
	if(empty($errorMessage)){
		$to='intrepidhonor@gmail.com';
		mail($to, $subject, $message, 'From:' .$senderName.'<'. $senderEmail.'>');
	}
}
?>
<form id='quickContact' method="post" action="contactMe.php" enctype='multipart/form-data'>
	<fieldset>
		<legend>Quick Contact</legend>
		<label for="senderName">Your name:</label>
		<input type="text" id="senderName" name="senderName" value="<?php echo $senderName; ?>" required/>
		<label for="senderEmail">Your Email:</label>
		<input type="email" id="senderEmail" name="senderEmail" value="<?php echo $senderEmail;?>" required/>
		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" value="<?php echo $subject;?>" required/>
		<label for="message">Message:</label>
		<textarea id="message" name="message" required><?php echo $message;?></textarea>
		<input id='quickContactSubmit' type="submit" value="SEND" name="SEND" />
		<?php 
		if (!empty($errorMessage)){
			 echo "<div id='emailError'>The email wasn't sent because... <ul>".$errorMessage."</ul></div>";
		}?>
	</fieldset>
</form>	  

</div>
<?php 
//footer file contains the closing to the body and document
//also contains the footer(legal disclaimer).
require_once 'footer.php';
?>