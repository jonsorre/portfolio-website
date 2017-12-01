<?php
/*Template name: Archive*/
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

<div class="grid-x grid-padding-x">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<div id="project-title" class="large-12 cell">
				<h2 class="hed-l title"><?php the_title(); ?></h2>
				<!-- <h2 class="hed-xl title"><?php the_subtitle(); ?></h2> -->
			</div>
			
	</div>

<ol reversed id="archive-list" class="grid-x grid-padding-x">
<?php

			// The Query
			$the_query = new WP_Query( 'category_name=work,viceland' );

			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

			<li class="archive-item large-12 cell">
			<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
				<h2 class="hed-m"><?php the_title(); ?></h2>
				<h4 class="body"><?php the_subtitle(); ?></h4>
				
			
			</a>
			</li>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

			
	
<?php endwhile; ?>
</ol>





<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer-proj' ) ); ?>