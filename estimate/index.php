<?php

$sectionName = "estimate";

$dirLevel = 1;
$dirPrefix = "../";

include("../includes/top.php");

?>

<p class="section_heading">get an estimate</p>

<div class="section_column">
	
	<p>Thank you for your interest in Remix Photo's services. In order to best evaluate your needs, please complete the form below to receive a pricing estimate. You can expect a confirmation within one business day, and a detailed reply within two business days.</p>

</div>

<div class="section_column_wide">

<?php
				
				function showform() {
				echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				
				<strong>Name</strong><br />
				<input type="text" name="name" size="27"';
				if (isset($_POST['name'])) {
					echo ' value="' . $_POST['name'] . '"';
				}
				echo ' /><br /><br />
				
				<strong>Email Address</strong><br />
				<input type="text" name="email" size="27"';
				if (isset($_POST['email'])) {
					echo ' value="' . $_POST['email'] . '"';
				}
				echo ' /><br /><br />
				
				Phone Number<br />
				<input type="text" name="phone" size="27"';
				if (isset($_POST['phone'])) {
					echo ' value="' . $_POST['phone'] . '"';
				}
				echo ' /><br /><br />
				
				Company Name<br />
				<input type="text" name="company" size="27"';
				if (isset($_POST['company'])) {
					echo ' value="' . $_POST['company'] . '"';
				}
				echo ' /><br /><br />
				
				How did you hear about Remix Photo?<br />
				<input type="text" name="how" size="27"';
				if (isset($_POST['how'])) {
					echo ' value="' . $_POST['how'] . '"';
				}
				echo ' /><br /><br />
				
				<strong>I need an estimate for...</strong><br />
				<input type="checkbox" name="type[]" value="event"';
				if (isset($_POST['type'])) {
					if (in_array("event",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> event photography<br />
				
				<input type="checkbox" name="type[]" value="portrait"';
				if (isset($_POST['type'])) {
					if (in_array("portrait",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> portrait photography<br />
				
				<input type="checkbox" name="type[]" value="other"';
				if (isset($_POST['type'])) {
					if (in_array("other",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> other photography commission<br />
				
				<input type="checkbox" name="type[]" value="licensing"';
				if (isset($_POST['type'])) {
					if (in_array("licensing",$_POST['type'])) {
						echo ' checked="checked"';
					}
				}
				echo ' /> image licensing<br /><br />
				
				<strong>Please briefly describe the nature of the event or commission,<br />
				or the nature of the usage for licensed images.</strong><br />
				
				<textarea name="details" rows="8" cols="26">';
				if (isset($_POST['details'])) {echo stripslashes($_POST['details']);}
				echo '</textarea><br /><br />
				
				Please paste the URLs of any images being requested for license,<br />
				or any images in the portfolio to be used as a visual reference.<br />
				
				<textarea name="reference" rows="8" cols="26">';
				if (isset($_POST['reference'])) {echo $_POST['reference'];}
				echo '</textarea><br /><br />
				
				<input class="submit" type="submit" name="submit" value="send request" />
				</form>';
				}
				
				
				if (isset($_POST['submit']))	{
					
					
					if (empty($_POST['name']))	{
						$_POST['name'] = FALSE; echo '<h3>Please include your name.</h3>';
					}
					
					if (empty($_POST['email']))	{
						$_POST['email'] = FALSE; echo '<h3>Please include your email address.</h3>';
					}
					
					if (empty($_POST['type']))	{
						$_POST['type'] = FALSE; echo '<h3>Please indicate the type of estimate you are requesting.</h3>';
					}
					
					if (empty($_POST['details']))	{
						$_POST['details'] = FALSE; echo '<h3>Please include the details of your request.</h3>';
					}
					
					
					if ($_POST['name'] && $_POST['email'] && $_POST['type'] && $_POST['details']) {
				
						$datesent = date("l, F j G:i");
						
						$details = stripslashes($_POST['details']);
						
						$type = implode(", ", $_POST['type']);
					
						$body = "Name:  {$_POST['name']}\n
						Email Address: {$_POST['email']}\n
						Phone Number: {$_POST['phone']}\n
						Company Name: {$_POST['company']}\n
						How did you hear about Remix Photo? {$_POST['how']}\n\n	
						
						Type of job:\n
						{$type}\n\n	
						
						details:\n					
						{$details}\n\n
						
						reference links:\n					
						{$_POST['reference']}\n\n
	
						Date sent: {$datesent}";
					
						$headers = "From: {$_POST['email']}";
					
						mail('leisl@remixphoto.ws', 'Estimate Request', $body, $headers);
					
						echo "<p><strong>Thank you for your estimate request.</strong> Your message has been sent. You can expect a confirmation within one business day, and a detailed reply within two business days.</p>";
				
						}
						
					else	{
						showform();
					}
				}
				
				else {
					showform();
				}
				
				?>
</div>

<?php
include("../includes/bottom.php");
?>