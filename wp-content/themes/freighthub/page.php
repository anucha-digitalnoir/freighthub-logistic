<?php
/*
Default Page Template
 */

get_header(); ?>

<div class="container fhl-content">
	<div class="row">
		<div id="content" class="content-area col-md-12">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<header class="entry-header">
						<h1 class="entry-title">
							<?php the_title(); ?>
						</h1>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'frieghthub' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>
				</article>
				<?php endwhile; // end of the loop. ?>
			</main>
		</div>
	</div>
</div>
<?php get_footer(); ?>
