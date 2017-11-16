<?php
/**
 * The template used to display Tag Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php if ( have_posts() ): ?>
	<div id="title" class="row">
		<div class="medium-12 columns">
			<h2>Keyword: <?php echo single_tag_title( '', false ); ?></h2>
		</div>
	</div>

<div class="row">

	<div id="tag" class="medium-6 small-12 columns">
			<ul>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<li><h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3></li>
		
		<?php endwhile; ?>
		</ul>
	</div>

</div>
<?php else: ?>
<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-footer' ) ); ?>