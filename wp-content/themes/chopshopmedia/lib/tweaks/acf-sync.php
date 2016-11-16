<?php

// --------------------------------------------------------------------------
//
//  ACF Sync Directory
//
// --------------------------------------------------------------------------

// --------------------------------------------------------------------------
//   Save JSON
// --------------------------------------------------------------------------

add_filter('acf/settings/save_json', 'csm_acf_json_save_point');

function csm_acf_json_save_point( $path )
{
  // update path
  $path = get_stylesheet_directory() . '/lib/fields';

  // return
  return $path;
}


// --------------------------------------------------------------------------
//   Load JSON
// --------------------------------------------------------------------------

add_filter('acf/settings/load_json', 'csm_acf_json_load_point');

function csm_acf_json_load_point( $paths )
{
  // remove original path (optional)
  unset($paths[0]);

  // append path
  $paths[] = get_stylesheet_directory() . '/lib/fields';

  // return
  return $paths;
}
