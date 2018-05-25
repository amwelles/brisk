<?php
/**
 * Content Template
 *
 * This file is the content template for the WordPress theme. It displays a 
 * regular post content area.
 *
 * @package WordPress
 * @subpackage Brisk
 * @since Brisk 1.0
 */

?>

<article>
	<div class="container">
		<header>
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		</header>
		<section>
			<?php the_content(); ?>
		</section>
	</div>
</article>
