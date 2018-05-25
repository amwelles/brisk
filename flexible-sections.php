<?php

if( have_rows('sections') ): 
	while( have_rows('sections') ): the_row();

		switch( get_row_layout() ) {
			case 'content':
				get_template_part('section', 'content');
				break;
			case 'hero':
				get_template_part('section', 'hero');
				break;
		}

	endwhile;
endif;

?>
