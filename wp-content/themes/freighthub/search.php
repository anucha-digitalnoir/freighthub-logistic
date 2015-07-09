<?php
/**
 * The template for displaying search results pages.
 *
 * @package freighthub
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<section id="content" class="content-area col-md-8">
			<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'frieghthub' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'loop' ); ?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
				<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main>
			<!-- #main --> 
		</section>
		<!-- #primary -->
		
		<div id="sidebar" class="widget-area col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
