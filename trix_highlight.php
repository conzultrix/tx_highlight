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

add_action( 'init', 'create_app_post_type' );

function create_app_post_type() {
  
  $app_label = array(
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
    'public'                => false,
    'rewrite'               => array('slug' => 'highlights'),
    'menu_postion'          => 6,
    'supports'              => array('title','editor'),
  );
  
  register_post_type('trix_highlight', $args);
    
}
?>
