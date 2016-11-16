<?php
// --------------------------------------------------------------------------
//
//   Allow files to be uploaded via Media Library
//
// --------------------------------------------------------------------------

function csm_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'csm_mime_types');
