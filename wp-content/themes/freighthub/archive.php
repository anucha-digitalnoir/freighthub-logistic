<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package freighthub
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="content" class="content-area col-md-8">
			<main id="main" class="site-main" role="main">
				<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</header>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
				<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main>
		</div>
		<div id="sidebar" class="widget-area col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
