<?php
$sectionName = "blog";

$dirLevel = 1;
$dirPrefix = "../";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head profile="<?php get_profile_uri(); ?>">

	<title><?php wp_title( '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', true, 'right' ); ?> blog &nbsp;&nbsp;&nbsp; Remix Photo &nbsp;&nbsp;&nbsp; New York City event party concert theater freelance photographer</title>

	<meta name="description" content="Remix Photo is a New York City based photography studio, specializing in events." />

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

	<meta http-equiv="Content-Style-Type" content="text/css" />
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen, projection" />
	
	<style type="text/css">
	@import url("<?php bloginfo('home') ?>/../css/basic.css");
	</style>
	
	<style type="text/css" media="screen">
	@import url("<?php bloginfo('home') ?>/../css/screen.css");
	</style>
	
	<style type="text/css" media="print">
	@import url("<?php bloginfo('home') ?>/../css/print.css");
	</style>

	<script src="<?php bloginfo('home') ?>/../includes/hideEmail.js" type="text/javascript"></script>

  	<!-- Links: RSS + Atom Syndication + Pingback etc. -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo( 'rss_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Theme Hook -->
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); // loads the javascript required for threaded comments ?>
	<?php wp_head(); ?>

<!--END head-->
</head>

<div id="top">

	<div id="top_content">
	
	<a href="<?php bloginfo('home') ?>/../">
	<img src="<?php bloginfo('home') ?>/../images/top_01.gif" id="top_01" alt="remix photo" /></a>
	
	<div id="top_02">	
		<p>New York City</p>
			
		<a class="hideEmail" href="#">mail (at) remixdesign dot ws</a><br />
		
		718.312.8190
	
	</div>
	
	
	<img src="<?php bloginfo('home') ?>/../images/top_03.gif" id="top_03" usemap="#map_top_03" alt="navigation" />
	
		<map name="map_top_03" id="map_top_03">
		<area shape="rect" coords="2,19,70,41" href="<?php bloginfo('home') ?>/../events/" title="events" alt="events" />
		<area shape="rect" coords="224,19,280,41" href="<?php bloginfo('home') ?>/../stock/" title="stock" alt="stock" />
		<area shape="rect" coords="102,19,192,41" href="<?php bloginfo('home') ?>/../portraits/" title="portraits" alt="portraits" />
		<area shape="rect" coords="314,19,380,41" href="<?php bloginfo('home') ?>/../nature/" title="nature" alt="nature" />
		<area shape="rect" coords="2,59,35,75" href="<?php bloginfo('home') ?>/../info/" title="info" alt="info" />
		<area shape="rect" coords="69,59,137,75" href="<?php bloginfo('home') ?>/../estimate/" title="pricing" alt="estimate/" />
		<area shape="rect" coords="171,59,228,75" href="<?php bloginfo('home') ?>/../contact/" title="contact" alt="contact" />
		<area shape="rect" coords="263,59,299,75" href="<?php bloginfo('home') ?>/../blog/" title="blog" alt="blog" />
		<area shape="rect" coords="334,59,379,75" href="<?php bloginfo('home') ?>/.././" title="home" alt="home" />		
		</map>
	
	</div>

</div>

<?php if ($showStrip) { 

	echo '<div id="strip" style="background-image: url(' . $dirPrefix . 'images/strip_' . $sectionName . '.jpg);">&nbsp;</div>';
}
?>

<div id="body">