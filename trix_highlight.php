<?php
/*
Plugin Name: Trix Highlight
Plugin URI:  https://github.com/conzultrix/trix_highlight
Description: Creates custome post type for Conzultrix Highlights.
Version:     0.1
Author:      Conzultrix
Author URI:  http://www.conzultrix.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/conzultrix/trix_highlight
GitHub Branch:     master
*/

defined( 'ABSPATH' ) or die( ' ' );

add_action( 'init', 'create_highlight_post_type' );

function create_highlight_post_type() {
  
  $highlight_label = array(
    'name'                  => __('Highlights'),
    'singular_name'         => __('Highlight'),
    'all_items'             => __('All Highlights'),
    'add_new'               => _x('Add New Highlight', 'highlights'),
    'add_new_item'          => __('Add New Highlight'),
    'edit_item'             => __('Edit Highlight'),
    'new_item'              => __('New Highlight'),
    'view_item'             => __('View Highlight'),
    'search_items'          => __('Search in Highlight'),
    'not_found'             => __('No Highlight found'),
    'not_found_in_trash'    => __('No Highlights found in trash'),
    'parent_item_colon'     => '',
  );
  $args = array(
    'labels'                => $highlight_label,
    'public'                => true,
    'rewrite'               => array('slug' => 'highlights'),
    'menu_postion'          => 6,
    'supports'              => array('title','editor'),
  );
  
  register_post_type('trix_highlight', $args);
    
}

// export custom field
if(function_exists("register_field_group")) {

	register_field_group(array (
		'id' => 'acf_highlight',
		'title' => 'Highlight',
		'fields' => array (
			array (
				'key' => 'field_5786e499cee79',
				'label' => 'Highlight Image',
				'name' => 'highlight_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'trix_highlight',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>
