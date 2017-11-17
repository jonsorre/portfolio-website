<?php
/*Template name: Work*/
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<!-- <div class="row">
	<div id="title" class="small-10 columns text-big">
	

	<?php if ( have_posts() ): ?>
	<h2><?php the_title(); ?></h2>
	</div>	
</div> -->

<?php query_posts('category_name=work'); ?>




	<div class="grid">
		<div class="grid-sizer"></div>
	  	<div class="gutter-sizer"></div>
			<?php while ( have_posts() ) : the_post(); ?>

			<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
			<div <?php post_class( 'grid-item', $post_id ); ?>>
						
						<div class="index-thumb" style="background:url('<?php the_post_thumbnail_url( large ); ?>'); background-position: center center; background-size: cover, cover; background-repeat: no-repeat;">
						<!-- <?php echo get_the_post_thumbnail( $post_id, 'large', $attr ); ?> -->
						</div>

						
						<div class="overlay-info">
						<h2 class="hed-l"><?php the_title(); ?></h2>
						<p class="body"><?php the_subtitle(); ?></p>
						</div>
						

					</div>
				</a>
	<?php endwhile; ?>			
	
	</div>

<div class="grid-x grid-x-padding align-center text-center">
<div class="large-12 small-12 cell"></div>

<?php else: ?>
<h4>Work Coming Soon!</h4>
<?php endif; ?>

</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer-proj' ) ); ?>