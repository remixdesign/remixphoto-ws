<div class="section_column">


		
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

			
				<h4><a href="<?php bloginfo('home') ?>">Latest Posts</a></h4>
			
				<h4><?php _e( 'Categories', 'sandbox' ) ?></h4>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
						
				<h4><?php _e( 'Archives', 'sandbox' ) ?></h4>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
				
				
				<h4>Subscribe</h4>
				<ul>
					<li><a href="">via RSS</a></li>
					<li><a href="" target="_blank">via Email</a></li>
				</ul>
				
			
<?php endif; // end primary sidebar widgets  ?>
		
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
			
				<h4><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h4>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
						<input type="submit" class="button submit" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
				</form>
			

<?php wp_list_bookmarks('title_before=<h4>&title_after=</h4>&show_images=1') ?>

			

<?php endif; // end secondary sidebar widgets  ?>
		
	
</div>
