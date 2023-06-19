<?php
/**
 * Wordpress includes
 *
 * The $wordpress_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$wordpress_includes = [
  'lib/assets.php',            // Scripts and stylesheets
  'lib/extras.php',            // Custom functions
  'lib/setup.php',             // Theme setup
  'lib/titles.php',            // Page titles
  'lib/wrapper.php',           // Theme wrapper class
  'lib/customizer.php',        // Theme customizer
  'lib/custom_post_types.php', // Custom post type
  'lib/carbon.php',            // Custom fields
  'lib/minify.php',            // Disable minification for the current theme
];

foreach ($wordpress_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'gamearth'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}

unset($file, $filepath);
