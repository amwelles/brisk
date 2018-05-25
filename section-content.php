<section class="content<?php

	if( get_sub_field('classes') ) {
		echo ' '.get_sub_field('classes');
	} ?>">
	<div class="container">
		<?php if( get_sub_field('content') ): ?>
			<?php the_field('content'); ?>
		<?php endif; ?>
	</div>
</section>
