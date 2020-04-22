<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-donations">
		<?php
		while ( have_posts() ) :
			the_post();
			give_get_template_part( 'single-give-form/content', 'single-give-form' );
		endwhile; // End of the loop.
		?>
		<div class="give_forms">
			<h1>Donate Legos</h1>
			<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
