<?php

namespace Wordpress\Starter\Extras;

use Wordpress\Starter\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'gamearth') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function supprimer_lire_la_suite() {
  return '...';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\supprimer_lire_la_suite');

/**
 * Remove gdpr logo
 */
function gdpr_company_logo_module() {
  return '';
}

add_filter( 'gdpr_company_logo_module', __NAMESPACE__ . '\\gdpr_company_logo_module', 10);
