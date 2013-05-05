<?php

$sectionName = "contact";

$dirLevel = 1;
$dirPrefix = "../";

include("../includes/top.php");

?>
	

<p class="section_heading"><?php echo $sectionName; ?></p>

<div class="section_column">

	<p class="section_subhead">Email</p>
	
	<p><a href="#" class="hideEmail">mail (at) remixphoto dot ws</a></p>
	
	<p class="section_subhead">Phone</p>
	
	<p>718.312.8190</p>
	
	
	<p class="section_subhead">AIM</p>
	
	<p><a href="aim:goim?screenname=remixphoto">Remix Photo</a></p>
	
	
	
	<p class="section_subhead">SNS</p>
	
	<p><a href="http://www.flickr.com/photos/remixphoto/collections/" target="_blank">Flickr</a></p>
	
	<p><a href="http://www.linkedin.com/in/remixdesign" target="_blank">LinkedIn</a></p>

</div>

<div class="section_column_wide">

	<p class="section_subhead">Mail Form</p>
	
	<?php
				
				function showform() {
				echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
				
				Name<br />
				<input type="text" name="name" size="27"';
				if (isset($_POST['name'])) {echo ' value="' . $_POST['name'] . '"';}
				echo ' /><br /><br />
				
				Email Address<br />
				<input type="text" name="email" size="27"';
				if (isset($_POST['email'])) {echo ' value="' . $_POST['email'] . '"';}
				echo ' /><br /><br />
				
				Comments<br />
				
				<textarea name="comments" rows="8" cols="26">';
				if (isset($_POST['comments'])) {echo $_POST['comments'];}
				echo '</textarea><br /><br />
				
				<input class="submit" type="submit" name="submit" value="send message" />
				</form>';
				}
				
				
				if (isset($_POST['submit']))
				{	
					if (empty($_POST['comments']))
					{$_POST['comments'] = FALSE; echo '<h3>Please include a message before submitting.</h3>';}
					
					if ($_POST['comments']) {
				
						$datesent = date("l, F j G:i");
						
						$comments = stripslashes($_POST['comments']);
					
						$body = "Name:  {$_POST['name']}\n
	Email Address: {$_POST['email']}\n\n
				
	Comments:\n
					
						{$comments}
					
						\n\n
					
				Date sent: {$datesent}";
					
						$headers = "From: {$_POST['email']}";
					
						mail('leisl@remixphoto.ws', 'Site mail', $body, $headers);
					
						echo '<h4>Thank you for your message.</h4>';
				
						}
						
						else
						{
							showform();
						}
					}
				
				else {
					showform();
				}
					 
				ob_end_flush(); 
				
				?>
</div>

<?php
include("../includes/bottom.php");
?>