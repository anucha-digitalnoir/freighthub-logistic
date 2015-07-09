<?php
/**
 * The template for displaying 404 pages (not found).
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="content" class="content-area col-md-12">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title">
							<?php _e( 'Oops!  That page can&rsquo;t be found.', 'freighthub' ); ?>
						</h1>
					</header>
					<div class="page-content">
						<p>
							<?php _e( 'Nothing Found Here. Are you lost?', 'freighthub' ); ?>
						</p>
					</div>
				</section>
			</main>
		</div>
	</div>
</div>
<?php get_footer(); ?>
