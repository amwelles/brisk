<section class="hero<?php

	if( get_sub_field('classes') ) {
		echo ' '.get_sub_field('classes');
	} ?>"<?php

	if( get_sub_field('background_image') ) {
		echo ' style="background-image:url('. get_sub_field('background_image') .');"';
	}

	?>>
	<?php if( get_sub_field('title') ): ?>
		<h1><?php the_sub_field('title'); ?></h1>
	<?php endif; ?>
	<?php if( get_sub_field('content') ): ?>
		<?php the_sub_field('content'); ?>
	<?php endif; ?>
</section>
