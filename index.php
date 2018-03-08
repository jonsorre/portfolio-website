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


	<div class="grid-x">
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

				<div id="likes-dislikes" class="grid-x">
					<div class="small-6 large-6 cell">
						<h5 class="hed-l">Likes</h5>
						<div class="grid-x">
							<div class="large-6 cell">
								<ul class="likes">
									<li class="hed-m">Beaches</li>
									<li class="hed-m">Books</li>
									<li class="hed-m">Candles</li>
									<li class="hed-m">Cats</li>
									<li class="hed-m">Cooking</li>
									<li class="hed-m">Curling</li>
									<li class="hed-m">Dogs</li>
									<li class="hed-m">Furniture</li>
									<li class="hed-m">Hiking</li>
									<li class="hed-m">Hockey</li>
								</ul>
							</div>
							<div class="large-6 cell">
								<ul class="likes">
									<li class="hed-m">Instagram</li>
									<li class="hed-m">Languages</li>
									<li class="hed-m">Pizza</li>
									<li class="hed-m">Plants</li>
									<li class="hed-m">Ramen</li>
									<li class="hed-m">Rugs</li>
									<li class="hed-m">Surfing</li>
									<li class="hed-m">Tacos</li>
									<li class="hed-m">Yoga</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="small-6 large-6 cell">
						<h5 class="hed-l">Dislikes</h5>
						<div class="grid-x">
							<div class="large-6 cell">
								<ul class="dislikes">
									<li class="hed-m">Bills</li>
									<li class="hed-m">Olives</li>
									<li class="hed-m">Sharks</li>
									<li class="hed-m">Sunburn</li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				<div id="work-section" class="grid-x">
							  	
						
					<h5 class="hed-l">These are some projects I've worked on...</h5>
					<?php query_posts('category_name=work&posts_per_page=5'); ?>


					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					
						<a class="work-item small-12 large-12 cell" href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
						
							<div class="index-thumb" style="background:url('<?php the_post_thumbnail_url( full ); ?>'); background-position: center center; background-size: cover, cover; background-repeat: no-repeat;">
							<!-- <?php echo get_the_post_thumbnail( $post_id, 'large', $attr ); ?> -->
							</div>
							
							<div class="overlay-info">
							<h2 class="hed-m"><?php the_title(); ?></h2>
							</div>
						
						</a>

						<?php endwhile; wp_reset_postdata();?>
				</div>

		
		





<div class="grid-x">
	<div class="small-12 cell">
	<?php else: ?>
		
	<h4 class="hed-l">Work coming soon!</h4>

	<?php endif; wp_reset_postdata();?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>