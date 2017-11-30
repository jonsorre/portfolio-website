<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<div id="project-info" class="grid-x grid-padding-x">
			<div id="project-title" class="large-7 large-offset-5 small-12 cell">
				<h2 class="hed-l title"><?php the_title(); ?></h2>

                
            <div class="large-8 cell">
                <?php the_field('project_description'); ?>

            </div>

			</div>
			
	</div>

	<div id="project-images" class="grid-x grid-padding-x">
		<div class="large-12 cell">
			<?php the_content(); ?>			

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			<h3>About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
			<?php endif; ?>

		</div>
		
	</div>
	

    <div class="grid-x grid-padding-x align-center">
         <div id="more-label" class="large-12 cell">
            <h6 class="hed-l">More</h6>
         </div>
    </div>    

    <div class="grid-x grid-padding-x align-center">

    	<?php $prevPost = get_previous_post(true);
            if($prevPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $prevPost->ID
                );
                $prevPost = get_posts($args);
                foreach ($prevPost as $post) {
                    setup_postdata($post);
        ?>
            <div class="large-6 medium-6 cell">
                
                 <div class="more-projects">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>

                        <div class="overlay-info">
                            <h4 class="hed-m"><?php the_title(); ?></h4>
                            <p class="body"><?php the_subtitle(); ?></p>
                        </div>
                    </a>
                </div>

            </div>
        <?php
                    wp_reset_postdata();
                } //end foreach
            } // end if
             
            $nextPost = get_next_post(true);
            if($nextPost) {
                $args = array(
                    'posts_per_page' => 1,
                    'include' => $nextPost->ID
                );
                $nextPost = get_posts($args);
                foreach ($nextPost as $post) {
                    setup_postdata($post);
        ?>
            <div class="large-6 medium-6 cell">
                
                <div class="more-projects">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>

                        <div class="overlay-info">
                            <h4 class="hed-m"><?php the_title(); ?></h4>
                            <p class="body"><?php the_subtitle(); ?></p>
                        </div>
                    </a>
                </div>

            </div>
        <?php
                    wp_reset_postdata();
                } //end foreach
            } // end if
        ?>
     </div>


<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer-proj' ) ); ?>