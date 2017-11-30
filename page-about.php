<?php
/*Template name: About*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>



	<div  id="site-head" class="grid-x grid-padding-x align-center">
		<div class="small-12 large-12 cell">

		<?php


		$args = array( 'category' => 59 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<h1 class="hed-l">
				<?php echo get_the_content(); ?>
			</h1>
		<?php endforeach; 
		wp_reset_postdata();?>


		</div>
	</div>

	<div id="info-row-1" class="grid-x grid-padding-x">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		
			<div class="large-7 large-offset-5 small-12 cell">
				<h4 class="hed-m">Info</h4>		
				<?php the_content(); ?>
					
			</div>

			
		
	</div>

	<div id="info-row-2" class="grid-x grid-padding-x">

		<div class="small-12 large-4 large-offset-5 cell">
			<h4 class="hed-m">Achievements</h4>
			<?php

			// The Query
			$the_query = new WP_Query( 'category_name=awards' );

			// The Loop
			if ( $the_query->have_posts() ) {
			        echo '<ul class="info-list">';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<li class="body">' . get_the_content() . '</li>';
				}
			        echo '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		?>
		
		</div>

		<div class="large-3 cell">
				<h4 class="hed-m">Contact</h4>
				
				<?php

				// The Query
				$the_query = new WP_Query( 'category_name=contact' );

				// The Loop
				if ( $the_query->have_posts() ) {
				        echo '';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<p>' . get_the_content() . '</p>';
					}
				        echo '';
				} else {
					// no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
			
			</div>

	</div>

	

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>