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


	<div id="blog-post-head" class="grid-x">
			<div id="blog-post-title" class="large-10 small-12 cell">
				<h2 class="hed-l"><?php the_title(); ?></h2>

			</div>
            <div class="dek cell">
                <h5 class="hed-m"><?php the_subtitle(); ?></h5>

            </div>
			
	</div>

	<div id="blog-post-wrapper" class="grid-x">
		<div id="blog-post-content" class="cell">
			<?php the_content(); ?>			

			<!-- <?php if ( get_the_author_meta( 'description' ) ) : ?>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			<h3>About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
			<?php endif; ?> -->

		</div>

		<div id="blog-post-sig" class="cell">
			<h2 class="hed-m">Jon is a <a href="<?php echo site_url(); ?>">designer</a> located in Jersey City. Currently at <a href="http://vice.com" target="_blank">Vice</a> and previously Viceland, Pacha and Yahoo. Jon is <a href="mailto:hello@jonsorrentino.com?subject=New Project">available</a> for freelance projects.</h2>
		</div>

		<div id="post-pagination" class="cell">
			<div class="hed-m"><a href="<?php echo site_url(); ?>/blog"><span id="arrow">⇠</span><span>Back</span></a></div>
		</div>
	</div>

	
		

	
	


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer-proj' ) ); ?>