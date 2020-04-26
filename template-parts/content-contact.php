<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php _s_post_thumbnail(); ?>
		<div class="title-group">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->



	<div class="entry-content left">
		<?php
		echo "<div class='contact'>";

		the_content();

		echo "</div>";

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="right">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48693.0206022887!2d-111.73370532550392!3d40.29099121832586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874d7804e4b45119%3A0x642bc3cf90b21ed1!2sOrem%2C%20UT!5e0!3m2!1sen!2sus!4v1587862275612!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', '_s' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
