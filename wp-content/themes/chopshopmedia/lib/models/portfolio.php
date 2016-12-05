<?php
// --------------------------------------------------------------------------
//
//   Portfolios
//
// --------------------------------------------------------------------------

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function csm_register_portfolio() {

  $labels = array(
    'name'                => 'Porfolios',
    'singular_name'       => 'Portfolio',
    'add_new'             => 'Add New Portfolio',
    'add_new_item'        => 'Add New Portfolio',
    'edit_item'           => 'Edit Portfolio',
    'new_item'            => 'New Portfolio',
    'view_item'           => 'View Portfolio',
    'search_items'        => 'Search Porfolios',
    'not_found'           => 'No Porfolios found',
    'not_found_in_trash'  => 'No Porfolios found in Trash',
    'parent_item_colon'   => 'Parent Portfolio:',
    'menu_name'           => 'Porfolios',
  );

  $args = array(
    'labels'              => $labels,
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-format-gallery',
    'show_in_nav_menus'   => true,
    'publicly_queryable'  => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'query_var'           => true,
    'can_export'          => true,
    'rewrite'             => array('slug' => 'our-work'),
    'capability_type'     => 'post',
    'supports'            => array(
        'title'
      )
  );

  register_post_type( 'portfolio', $args );
}

add_action( 'init', 'csm_register_portfolio' );
