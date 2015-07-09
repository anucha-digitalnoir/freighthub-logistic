<?php
/*
Commonly its for news page
*/

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="content" class="content-area col-md-8">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<header class="entry-header">
						<h1 class="entry-title">
							<?php the_title(); ?>
						</h1>
						<div class="entry-meta">
							<?php freighthub_posted_on(); ?>
						</div>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php endwhile; // end of the loop. ?>
			</main>
		</div>
		<div id="sidebar" class="widget-area col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
