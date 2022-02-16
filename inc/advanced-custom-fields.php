<?php
/*
=====================
	ACF functions
=====================
*/


/*
=====================
	ACF options page
=====================
*/
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Options'),
            'menu_title'  => __('Theme Options'),
            'redirect'    => false,
        ));

        // Add sub page.
        $headerOptions = acf_add_options_page(array(
            'page_title'  => __('Header Options'),
            'menu_title'  => __('Header'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}
add_action('acf/init', 'my_acf_op_init');


/*
=====================
	ACF Flexible Template Loop
=====================
*/

function the_acf_loop(){
  get_template_part('parts/loop/acf-blocks','loop');
}
