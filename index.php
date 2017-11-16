<?php
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


	<div class="grid-x grid-padding-x align-center">
		<div id="site-head" class="small-12 large-12 cell">

		<?php


		$args = array( 'category' => 49 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<h1 class="hed-l">
				<?php echo get_the_content(); ?>
			</h1>
		<?php endforeach; 
		wp_reset_postdata();?>


		</div>
	</div>

				<div class="grid">
							  	
							  	<div class="grid-sizer"></div>
							  	<div class="gutter-sizer"></div>
	
				<?php query_posts('category_name=work&posts_per_page=7'); ?>


				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				
					<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
					<div <?php post_class( 'grid-item', $post_id ); ?>>
						<div class="index-thumb" style="background:url('<?php the_post_thumbnail_url( large ); ?>'); background-position: center center; background-size: cover, cover; background-repeat: no-repeat;">
						<!-- <?php echo get_the_post_thumbnail( $post_id, 'large', $attr ); ?> -->
						</div>
						
						<div class="overlay-info">
						<h4 class="hed-m"><?php the_title(); ?></h4>
						<p class="body"><?php the_subtitle(); ?></p>
						</div>
					</div>
					</a>

					<?php endwhile; wp_reset_postdata();?>
				</div>

		
		





<div class="grid-x grid-padding-x align-center">
	<div class="small-12 cell">
	<?php else: ?>
		
	<h4>Work coming soon!</h4>

	<?php endif; wp_reset_postdata();?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>