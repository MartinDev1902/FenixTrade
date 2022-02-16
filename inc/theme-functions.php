<?php
/*
	=====================
		Header nav menu
	=====================	
*/

//Nav arrows
function filter_walker_nav_menu_start_el( $item_output, $item, $depth, $args ) {
    if(in_array('menu-item-has-children',$item->classes)){
        return '<div class="menu-item__parent">'.$item_output.'<img class="menu-item__icon" src="'.get_template_directory_uri().'/assets/images/icon-nav-arrow.svg"/></div>';
    }
	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'filter_walker_nav_menu_start_el', 10, 4 );