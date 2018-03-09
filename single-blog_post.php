<?php
/*Template name: blog-post*/
/**
 * The Template for displaying all single blog posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header-note' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<div id="project-info" class="grid-x">
			<div id="project-title" class="large-10 small-12 cell">
				<h2 class="hed-l title"><?php the_title(); ?></h2>

			</div>
            <div class="large-8 cell">
                <?php the_field('project_description'); ?>

            </div>
			
	</div>

	<div id="project-images" class="grid-x">
		<div class="dek cell">
			<?php the_content(); ?>			

			<!-- <?php if ( get_the_author_meta( 'description' ) ) : ?>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			<h3>About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
			<?php endif; ?> -->

		</div>
		
	</div>

	<div class="grid-x">
		<div class="dek cell">
			<h2 class="hed-m">Jon is a designer located in Jersey City. Currently at Vice and previously Viceland, Pacha and Yahoo. Jon is available for freelance projects.</h2>
		</div>
	</div>
	


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer-proj' ) ); ?>