<?php
/**
 * Template Name: Full Width
 *
 * Page template for
 *
 * @package Aadya
 * @since Aadya 0.1
 */

get_header(); ?>
<?php 
	$aadya_col =  aadya_get_content_cols(); 
	$aadya_col = 12; //we have to override this to achieve the 2 column effect
?>	
<div class="col-md-<?php echo $aadya_col;?>" role="content">
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div> <!-- .col-md-<?php echo $aadya_col;?> .content -->	
<?php get_footer(); ?>

