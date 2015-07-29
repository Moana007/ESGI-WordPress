<?php /* Template Name: allArticle */ ?>

<?php get_header(); ?>
<!-- - - - - - - - - - - - - - - -->


<div class="test"></div>
<?php display_hello(); ?>
<div class="col-md-8 col-md-offset-2" id="menu_top"><?php dynamic_sidebar('my_custom_zone_menu');?></div>
<div class="col-md-8 highlight" >
	<?php while (have_posts()) :
		echo "<h2>".the_title()."</h2>";
		echo "Ca marche";
    	the_post();
    	echo "<div style='width:100%; height:2px; background-color:black;margin:20px 0 20px 0;'></div>";
	endwhile; ?>
</div>
<div class="col-md-3 col-md-offset-1 highlight"><?php dynamic_sidebar('my_custom_zone');?></div>

<!-- $_SERVER['REQUEST_URI']; /wordpress/index.php/tous-les-articles/ -->

<!-- - - - - - - - - - - - - - - -->
<div><?php get_footer(); ?></div>

</body>
</html>