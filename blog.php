<?php
/*
Template Name: blog_page
*/
?>
<?php get_header(); ?>
<div class="cf main-wrapper">
	<?php 
		$blog_query = new WP_QUERY(array(
			'post_type' => 'post'
		));
		if ( $blog_query->have_posts() ) : 
			while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
			<div class="loop-block <?php echo (++$j % 2 == 0) ? 'even' : 'odd'; ?>">
				<a href="<?php the_permalink(); ?>" class="loop-link">
					<h3 class="loop-title"><?php the_title(); ?></h3>
					<h4 class="loop-descr"><?php echo excerpt(16); ?></h4>
				</a>
			</div>
	<?php endwhile; else: ?>
		<p>Sorry, we haven't posts!</p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>