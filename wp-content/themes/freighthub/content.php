<?php
/**
 * @package freighthub
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<h3 class="entry-title">
			<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
		</h3>
	</header>
	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div>
</article>
