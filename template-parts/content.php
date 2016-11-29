<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package meyer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-header-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
	</header><!-- .entry-header -->
	
	<div class="entry-content vcontainer">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'meyer' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'meyer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<!-- <div class="vcontainer">
		<div class="entry-nav">
			<?php //the_post_navigation(); ?>
		</div>
	</div> -->

	<footer class="entry-footer">
		<?php //meyer_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
