<?php
/*Template name: blog*/
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




				


				<div class="grid-x">
							  	
						
					
					<?php query_posts( array(
					    // 'category_name'  => 'blog',
					    'post_type' => blog_post,
					    'posts_per_page' => 3,
					    'paged'          => $paged
					) ); ?>


					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					
						<a class="blog-item large-12 cell" href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
							<article class="grid-x">
							<div class="large-10 small-12 cell"><h2 class="hed-l"><?php the_title(); ?></h2></div>
							
							<div class="dek cell">
								<h5 class="hed-m"><?php the_subtitle(); ?></h5>
								<span></span>
							</div>
							
							</article>
						</a>

						

					<?php endwhile; wp_reset_postdata();?>

					<?php else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>

				</div>

				<div class="grid-x">
						<div class="large-12 cell">
							<div class="hed-m"><?php next_posts_link( 'Older' ); ?></div>
							<div class="hed-m"><?php previous_posts_link( 'Newer' ); ?></div>
						</div>

				</div>
		
	

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>