<!-- Sidebar Starts -->
<div id="sidebar">

	<!-- Widgetized Sidebar Top -->    						
	<div class="widgetized">	
	    <?php dynamic_sidebar(5); ?>		           
	</div>

    <!-- TABS STARTS -->           
	<?php if (get_option('woo_tabs') == "false") { ?>
	<div id="tabs" class="block">
	
		<ul class="idTabs wrap tabs">
			<li><a href="#pop"><?php _e('Popular',woothemes); ?></a></li>
			<li><a href="#comm"><?php _e('Comments',woothemes); ?></a></li>
			<li><a href="#tagcloud"><?php _e('Tags',woothemes); ?></a></li>
		</ul>
		<div class="inside">
			<ul id="pop">
				<?php include(TEMPLATEPATH . '/includes/popular.php' ); ?>                    
			</ul>

			<ul id="comm">
				<?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
			</ul>	
			
			<div id="tagcloud">
				<?php wp_tag_cloud('smallest=12&largest=20'); ?>
			</div>
		</div>
		
	</div>
    <?php } ?>
	<!-- TABS ENDS -->

	<!-- Widgetized Sidebar -->	
	<div class="widgetized">
	    <?php dynamic_sidebar(1); ?>		           
	</div>	
	
</div>
<!-- Sidebar Ends -->