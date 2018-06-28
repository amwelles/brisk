<?php

if( have_rows('sections') ): 
	while( have_rows('sections') ): the_row();

		switch( get_row_layout() ) {
			case 'title':
				get_template_part('section', 'title');
				break;
			case 'wysiwyg':
				get_template_part('section', 'wysiwyg');
				break;
			case 'hero':
				get_template_part('section', 'hero');
				break;
		}

	endwhile;
endif;

?>
