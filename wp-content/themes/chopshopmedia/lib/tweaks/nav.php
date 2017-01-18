<?php

/**
 * Cleaner walker for wp_nav_menu()
 *
 * Walker_Nav_Menu (WordPress default) example output:
 *   <li id="menu-item-8" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8"><a href="/">Home</a></li>
 *   <li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9"><a href="/sample-page/">Sample Page</a></l
 *
 * NavWalker example output:
 *   <li class="menu-home"><a href="/">Home</a></li>
 *   <li class="menu-sample-page"><a href="/sample-page/">Sample Page</a></li>
 *
 * You can enable/disable this feature in functions.php (or lib/config.php if you're using Sage):
 * add_theme_support('soil-nav-walker');
 */
class NavWalker extends Walker_Nav_Menu {
  private $cpt; // Boolean, is current post a custom post type
  private $archive; // Stores the archive page for current URL

  public function __construct() {
    add_filter('nav_menu_css_class', array($this, 'cssClasses'), 10, 2);
    add_filter('nav_menu_item_id', '__return_null');
    $cpt           = get_post_type();
    $this->cpt     = in_array($cpt, get_post_types(array('_builtin' => false)));
    $this->archive = get_post_type_archive_link($cpt);
  }

  public function checkCurrent($classes) {
    return preg_match('/(current[-_])|active/', $classes);
  }

  // @codingStandardsIgnoreStart
  public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
    $element->is_subitem = ((!empty($children_elements[$element->ID]) && (($depth + 1) < $max_depth || ($max_depth === 0))));

    if ($element->is_subitem) {
      foreach ($children_elements[$element->ID] as $child) {
        if ($child->current_item_parent || url_compare($this->archive, $child->url)) {
          $element->classes[] = 'active';
        }
      }
    }

    $element->is_active = strpos($this->archive, $element->url);

    if ($element->is_active) {
      $element->classes[] = 'active';
    }


    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
  }
  // @codingStandardsIgnoreEnd

  public function cssClasses($classes, $item) {
    $slug = sanitize_title($item->title);

    if ($this->cpt) {
      $classes = str_replace('current_page_parent', '', $classes);

      if (url_compare($this->archive, $item->url)) {
        $classes[] = 'active';
      }
    }

    $classes = preg_replace('/(current(-menu-|[-_]page[-_])(item|parent|ancestor))/', 'active', $classes);
    $classes = preg_replace('/^((menu|page)[-_\w+]+)+/', '', $classes);

    $classes[] = 'menu-item';
    $classes[] = 'menu-' . $slug;

    $classes = array_unique($classes);

    function trim_the_items($element) {
      $element = trim($element);
      return !empty($element);
    }

    return array_filter($classes, 'trim_the_items');
  }


  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $indent = str_repeat("\t", $depth);
    $attributes  = '';

    ! empty ( $item->attr_title )
    and $item->attr_title !== $item->title
    and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';

    ! empty ( $item->url )
    and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

    // echo "<pre>";
    // var_dump($item);
    // echo "</pre>";

    $number      = get_field( 'page_number', $item->object_id );
    $attributes  = trim( $attributes );
    $title       = apply_filters( 'the_title', $item->title, $item->ID );
    $item_output = "$args->before<a $attributes>$args->link_before $number $title</a>"
                 . "$args->link_after$args->after";

    $output .= $indent . "<li class=\"" . implode(' ', apply_filters( 'nav_menu_css_class', $item->classes, $item )) . "\">";

    $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
    );
  }
}

/**
 * Clean up wp_nav_menu_args
 *
 * Remove the container
 * Remove the id="" on nav menu items
 */
function csm_nav_menu_args($args = '') {
  $nav_menu_args = array();
  $nav_menu_args['container'] = false;

  if (!$args['items_wrap']) {
    $nav_menu_args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
  }

  if (!$args['walker']) {
    $nav_menu_args['walker'] = new NavWalker();
  }

  return array_merge($args, $nav_menu_args);
}
add_filter('wp_nav_menu_args', 'csm_nav_menu_args');
add_filter('nav_menu_item_id', '__return_null');
