
<?php
/**
* Template Name: allInterview
*/
 get_header(); ?>


<div class="test"></div>
	<?php display_hello(); ?>
	<div class="col-md-8 col-md-offset-2" id="menu_top"><?php dynamic_sidebar('my_custom_zone_menu');?></div>
	<div class="col-md-8 highlight" >
		
			<?php
		  	//$temp_query = $wp_query;
			//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args=array('post_type' => 'interview');
			$wp_query = new WP_Query($args);
			while ($wp_query->have_posts()) {
				echo "<strong>".the_title()."</strong>";
		    	the_post();
		    	the_content();			
		    }
			?>
	</div>
<div class="col-md-3 col-md-offset-1 highlight"><?php dynamic_sidebar('my_custom_zone');?></div>

<!-- $_SERVER['REQUEST_URI']; /wordpress/index.php/tous-les-articles/ -->

<!-- - - - - - - - - - - - - - - -->
<div><?php get_footer(); ?></div>

</body>
</html>