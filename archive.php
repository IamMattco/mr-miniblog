<?php get_header(); ?>

<div class="page">
	<div class="container">
		<div class="posts">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<?php the_post_thumbnail( 'category-thumb' ); ?> 
					<article>
						<h3><A href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="date"><i class="fa fa-pencil"></i> <?php the_author(); ?> / <i class="fa fa-calendar"></i> <?php the_date(); ?></div>
		      	<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>

			<?php require_once MR_THEME_DIR.'pagination.php' ?>
		
		</div>

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>