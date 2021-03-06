<?php get_header(); ?>

		<section class="page-header">
			<div class="inner" data-type="prlx" data-speed="0.375">
				<h2 class="page-title">
					<?php _e('Search','hoccer'); ?>: <?php the_search_query(); ?>
				</h2>
				<aside class="page-meta">
					<?php echo $wp_query->found_posts . '&#32;' . __('Results','hoccer'); ?>
				</aside>
			</div>
		</section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="inner">
				<header class="post-header">
					<h2 class="post-title">
						<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
				</header>
				<div class="clear"></div>
			</div>
		</section>
	<?php endwhile; ?>
		<nav id="pagination">
			<div class="inner">
				<?php wp_pagination_navi(); ?>
			</div>
		</nav>
	<?php else : ?>
		<div id="search-search" class="searcharea">
			<h2 class="visuallyhidden"><?php _e('Search','hoccer'); ?></h2>
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>