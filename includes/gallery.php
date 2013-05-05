
<div id="content">
	
		<p class="keywords left"><em>keywords:</em> <?php
		asort ($galleryKeywords);		
		foreach ($galleryKeywords as $indKeywords) {
		echo "$indKeywords, ";	
		}
		?></p>
		
		<p class="gallery_action right"><a href="images/<?php 
			if (isset($_REQUEST['img']))
				{echo $_REQUEST['img'];}
			else
			{echo "1";}
			 ?>.jpg" target="_blank">download a comp</a><img src="<?php echo $dirPrefix; ?>images/arrow_down.gif" align="top" alt="" /></p>
		
		<div id="image_area">
		
		<img src="images/<?php 
			if (isset($_REQUEST['img']))
				{echo $_REQUEST['img'];}
			else
			{echo "1";}
			 ?>.jpg" alt="<?php echo $sectionName . " - " . $galleryName; ?>" />
		
		</div>
		
	</div>
	
	
	<div id="side">
	
		<img src="<?php echo $dirPrefix; ?>images/gallery_nav_<?php echo $sectionName; ?>.gif" width="245" height="25" usemap="#map_gallery_nav" alt="" />
		
			<map name="map_gallery_nav" id="map_gallery_nav">
			
			<area shape="rect" coords="0,0,62,25" href="../<?php 
			if ($firstGallery) {
				// nothing		
			}
			else {
				echo  $galleryNumber - 1;
			} ?>" title="previous <?php echo $sectionName; ?> gallery" alt="previous <?php echo $sectionName; ?> gallery" />
			
			<area shape="rect" coords="70,0,130,25" href="../<?php 
			if ($lastGallery) {
				// nothing			
			}
			else {
				echo  $galleryNumber + 1;
			} ?>" title="next <?php echo $sectionName; ?> gallery" alt="next <?php echo $sectionName; ?> gallery" />
			
			<area shape="rect" coords="138,0,245,25" href="../" title="back to <?php echo $sectionName; ?> home" alt="back to <?php echo $sectionName; ?> home" />
			
			</map>
		
		<p class="center">
			<span class="gallery_heading"><?php echo $galleryName; ?></span><br />
			<span class="gallery_subhead"><?php echo $gallerySubhead; ?></span>
		</p>
		
		<?php
		
		if ($maxPics < 20 || $_REQUEST['more'] == "on") {
			
			if ($_REQUEST['more'] == "on") {
		
				for ($numberOfPics = 1; $numberOfPics <= $maxPics; $numberOfPics++) {
				
				echo '<a href="?img=' . $numberOfPics . '&amp;more=on">
				<img src="thumbs/th_' . $numberOfPics . '.jpg" class="thumbnail" alt="' . $numberOfPics . '" /></a>
				
				';
				}
			}
			
			else {
				
				for ($numberOfPics = 1; $numberOfPics <= $maxPics; $numberOfPics++) {
				
				echo '<a href="?img=' . $numberOfPics . '">
				<img src="thumbs/th_' . $numberOfPics . '.jpg" class="thumbnail" alt="' . $numberOfPics . '" /></a>
				
				';
				}			
			}
		}
		
		else {
			
			for ($numberOfPics = 1; $numberOfPics <= 20; $numberOfPics++) {
			
			echo '<a href="?img=' . $numberOfPics . '">
			<img src="thumbs/th_' . $numberOfPics . '.jpg" class="thumbnail" alt="' . $numberOfPics . '" /></a>
			
			';
			}
			
		}
		
		?>
		
		<div class="clear" /></div>
		
		<?php
		
		if ($maxPics > 20) {
			
			echo '<p class="gallery_action left"><a href="?';
			
			if (isset($_REQUEST['img']))	{
				echo "img=" . $_REQUEST['img'] . "&amp;";
			} 
			
			if ($_REQUEST['more'] == "on") {
				echo "more=off\">fewer";
			}
			
			else {
				echo "more=on\">more";
			}
			
			 echo ' thumbs</a><img src="' . $dirPrefix . 'images/arrow_fwd.gif" align="top" alt="" /></p>';
		}
		?>
		
		<p class="gallery_action <?php
		if ($maxPics > 20) { echo "right"; }
		else { echo "center"; } 
		?>"><a href="http://www.flickr.com/photos/remixphoto/sets/<?php echo $flickrID; ?>/show/" target="_blank">slideshow</a><img src="<?php echo $dirPrefix; ?>images/arrow_fwd.gif" align="top" alt="" /></p>
		
		<div class="clear" /></div>
		
		<p class="gallery_action center"><a href="http://www.flickr.com/photos/remixphoto/sets/<?php echo $flickrID; ?>/" target="_blank">see this gallery at Flickr</a><img src="<?php echo $dirPrefix; ?>images/arrow_fwd.gif" align="top" alt="" /></p>
		
		<div class="clear" /></div>
		<p><?php echo $galleryDesc; ?></p>
		
		
	</div>
	