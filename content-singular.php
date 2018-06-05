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
	<header>
		<h1>
			<?php the_title(); ?>
		</h1>
	</header>
	<section>
		<?php the_content(); ?>
	</section>
	<?php get_template_part('flexible', 'sections'); ?>
</article>
