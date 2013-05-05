<?php

ini_set('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>

<title><?php 
if (isset($galleryName)) {
	
	$galleryName_forTitle = str_replace("<br />", "&nbsp;", $galleryName);	
	echo $galleryName_forTitle . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";	
	
} ?>Remix Photo &nbsp;&nbsp;&nbsp; New York City event party concert theater freelance photographer</title>

<style type="text/css">
@import url("<?php echo $dirPrefix; ?>css/basic.css");
</style>

<style type="text/css" media="screen">
@import url("<?php echo $dirPrefix; ?>css/screen.css");
</style>

<style type="text/css" media="print">
@import url("<?php echo $dirPrefix; ?>css/print.css");
</style>

<meta name="description" content="Remix Photo is a New York City based photography studio, specializing in events." />

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta http-equiv="Content-Style-Type" content="text/css" />

<script src="<?php echo $dirPrefix; ?>includes/hideEmail.js" type="text/javascript"></script>

</head>

<body>

<div id="top">

	<div id="top_content">
	
	<a href="<?php echo $dirPrefix; ?>./">
	<img src="<?php echo $dirPrefix; ?>images/top_01.gif" id="top_01" alt="remix photo" /></a>
	
	<div id="top_02">	
		<p>New York City</p>
			
		<a class="hideEmail" href="#">mail (at) remixdesign dot ws</a><br />
		
		718.312.8190
	
	</div>
	
	
	<img src="<?php echo $dirPrefix; ?>images/top_03.gif" id="top_03" usemap="#map_top_03" alt="navigation" />
	
		<map name="map_top_03" id="map_top_03">
		<area shape="rect" coords="2,19,70,41" href="<?php echo $dirPrefix; ?>events/" title="events" alt="events" />
		<area shape="rect" coords="224,19,280,41" href="<?php echo $dirPrefix; ?>stock/" title="stock" alt="stock" />
		<area shape="rect" coords="102,19,192,41" href="<?php echo $dirPrefix; ?>portraits/" title="portraits" alt="portraits" />
		<area shape="rect" coords="314,19,380,41" href="<?php echo $dirPrefix; ?>nature/" title="nature" alt="nature" />
		<area shape="rect" coords="2,59,35,75" href="<?php echo $dirPrefix; ?>info/" title="info" alt="info" />
		<area shape="rect" coords="69,59,137,75" href="<?php echo $dirPrefix; ?>estimate/" title="pricing" alt="estimate/" />
		<area shape="rect" coords="171,59,228,75" href="<?php echo $dirPrefix; ?>contact/" title="contact" alt="contact" />
		<area shape="rect" coords="263,59,299,75" href="<?php echo $dirPrefix; ?>blog/" title="blog" alt="blog" />
		<area shape="rect" coords="334,59,379,75" href="<?php echo $dirPrefix; ?>./" title="home" alt="home" />		
		</map>
	
	</div>

</div>

<?php if ($showStrip) { 

	echo '<div id="strip" style="background-image: url(' . $dirPrefix . 'images/strip_' . $sectionName . '.jpg);">&nbsp;</div>';
}
?>

<div id="body">