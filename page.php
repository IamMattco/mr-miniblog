<?php get_header(); ?>

<div class="page">
	<div class="container">
		<div class="posts">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<article>
						<h3><A href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		      	<?php the_content(); ?>
					</article>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		
		</div>

		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>