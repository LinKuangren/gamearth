<?php

namespace Wordpress\Starter\Setup;

use Wordpress\Starter\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('gamearth', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'gamearth')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));

  require_once(__DIR__ . '/../vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'gamearth'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'gamearth'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

add_image_size( 'custom_size_header_logo', 100, 100, array( 'center', 'center' ) );

add_image_size( 'custom_size_home_section_action_image', 150, 400, array( 'center', 'center' ) );
add_image_size( 'custom_size_home_section_impact_image', 200, 230, array( 'center', 'center' ) );
add_image_size( 'custom_size_home_section_banner', 1920, 576, array( 'center', 'center' ) );
add_image_size( 'custom_size_home_section_fund_image', 200, 200, array( 'center', 'center' ) );

add_image_size( 'custom_size_home_section_media_thumbnail', 260, 602, array( 'center', 'center' ) );
add_image_size( 'custom_size_home_section_media_page', 398, 365, array( 'center', 'center' ) );
add_image_size( 'custom_size_home_section_ecosystem_image', 75, 75, array( 'center', 'center' ) );

add_image_size( 'custom_size_fund_section_heroes_image_title', 200, 1000, array( 'center', 'center' ) );
add_image_size( 'custom_size_fund_section_objective_image', 150, 400, array( 'center', 'center' ) );

add_image_size( 'custom_size_ecosystem_banner', 1920, 1080, array( 'center', 'center' ) );

add_image_size( 'custom_size_fund_logo', 250, 250, array( 'center', 'center' ) );
add_image_size( 'custom_size_footer_logo', 200, 200, array( 'center', 'center' ) );
add_image_size( 'custom_size_footer_social_logo', 32, 32, array( 'center', 'center' ) );

add_image_size( 'custom_size_objective_banner', 1920, 667, array( 'center', 'center' ) );

add_image_size( 'custom_size_medias_carrousel_image', 1920, 550, array( 'center', 'center' ) );
add_image_size( 'custom_size_single_media_banner', 1920, 420, array( 'center', 'center' ));

add_image_size( 'custom_size_contact_banner', 1920, 420, array( 'center', 'center' ));
/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
    is_page_template('template-homepage.php'),
  ]);

  return apply_filters('gamearth/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  if ( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', false);
  }

  if (Assets\asset_exists('vendor.css')) {
    wp_enqueue_style('gamearth/vendor.css', Assets\asset_path('vendor.css'), false, null);
  }

  if (Assets\asset_exists('main.css')) {
    wp_enqueue_style('gamearth/main.css', Assets\asset_path('main.css'), false, null);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('gamearth/vendors.js', Assets\asset_path('vendors.js'), [], null, true);
  wp_enqueue_script('gamearth/main.js', Assets\asset_path('main.js'), [], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 0);

/**
 * Ensure GDPR is correctly loaded
 */
/*
function remove_gdpr()
{
  $priority = has_action('wp_footer', array('Moove_GDPR_Controller', 'moove_gdpr_cookie_popup_modal'));
  remove_action('wp_footer', array('Moove_GDPR_Controller', 'moove_gdpr_cookie_popup_modal'), $priority);
}
add_action('wp_footer', __NAMESPACE__ . '\\remove_gdpr', 0);

add_action('get_footer', array('Moove_GDPR_Controller', 'moove_gdpr_cookie_popup_modal'));
*/
