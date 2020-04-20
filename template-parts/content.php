<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<div clas="title-group">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title">', '</h1>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
				 	<?php
					_s_posted_on();
					_s_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<?php
		if (has_post_thumbnail()) :
			echo '<div class="image-holder">';
			_s_post_thumbnail();
			echo '</div>';
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			$content = get_the_content();
			$content = apply_filters( 'the_content', $content );
			$content = str_replace( ']]>', ']]&gt;', $content );
			$content = !is_singular() ? wp_trim_words($content, $num_words = 20) : $content;
			echo $content;

			if (!is_singular()) :
				echo '<a class="read-more" href="' . esc_url( get_permalink() ) . '" rel="bookmark">Read More!</a>' ;
			endif;
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
