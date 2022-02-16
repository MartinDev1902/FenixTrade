<?php

if( have_rows('blocks') ):
    while ( have_rows('blocks') ) : the_row();
        if( get_row_layout() == 'opportunities' ):
            get_template_part('template-parts/opportunities');
        endif;
    endwhile;
endif;

