<?php
/*
	=====================
		Custom Post Types
	=====================	
*/

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'Portfolio', [
		'label'  => null,
		'labels' => [
			'name'               => 'Portfolio', // основное название для типа записи
			'singular_name'      => 'Case', // название для одной записи этого типа
			'add_new'            => 'New Case', // для добавления новой записи
			'add_new_item'       => 'Add Case', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Case', // для редактирования типа записи
			'new_item'           => '', // текст новой записи
			'view_item'          => 'View Case', // для просмотра записи этого типа.
			'search_items'       => 'Search case', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Portfolio', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-portfolio',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}