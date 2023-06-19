<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function list_pages() {
  $pages = get_pages();
  $list = [];
  foreach ($pages as $page) {
    $list[$page->ID] = $page->post_title;
  }

  return $list;
}

function all_pages_options() {
  $pages = get_pages();
  $options = array();
  foreach ( $pages as $page ) {
      $options[ $page->ID ] = $page->post_title;
  }
  return $options;
}

function crb_attach_theme_options() {
  $basic_options_container = Container::make( 'theme_options', __( 'Theme Options', 'gamearth' ) )
    ->add_fields( array(
      Field::make( 'text', 'crb_mapbox_token', __('Mapbox Token', 'gamearth') ),
      Field::make( 'text', 'crb_recalled_shortcode', __('Recalled shortcode', 'gamearth') ),
      Field::make( 'text', 'crb_contact_field_email', __('Email for field contact', 'gamearth') ),
  ) );

  Container::make( 'theme_options', __( 'Social Links', 'gamearth') )
    ->set_page_parent( $basic_options_container )
    ->add_fields(array(
      Field::make( 'image', 'crb_facebook_image', __('Facebook Icon', 'gamearth') )
        ->set_width(25),
      Field::make( 'text', 'crb_facebook_page', __('Facebook', 'gamearth') )
        ->set_width(75),
      Field::make( 'image', 'crb_linkedin_image', __('LinkedIn Icon', 'gamearth') )
        ->set_width(25),
      Field::make( 'text', 'crb_linkedin_page', __('LinkedIn', 'gamearth') )
        ->set_width(75),
      Field::make( 'image', 'crb_instagram_image', __('Instagram Icon', 'gamearth') )
        ->set_width(25),
      Field::make( 'text', 'crb_instagram_page', __('Instagram', 'gamearth') )
        ->set_width(75),
    ));

  Container::make( 'theme_options', __( 'Header Options', 'gamearth') )
    ->set_page_parent( $basic_options_container )
    ->add_fields(array(
      Field::make( 'image', 'crb_header_logo', __('Header logo', 'gamearth' ) ),
      Field::make( 'text', 'crb_header_baseline', __('Header baseline', 'gamearth' ) ),
      Field::make( 'text', 'crb_header_cta_contact_text', __('CTA text contact', 'gamearth' ) ),
      Field::make( 'select', 'crb_header_linked_page', __('Target page', 'gamearth'))->set_options( all_pages_options() ),
      Field::make( 'select', 'crb_header_homelink', __('Homepage', 'gamearth'))->set_options( all_pages_options() ),
      Field::make( 'select', 'crb_footer_contactlink', __('Contact Page', 'gamearth'))->set_options( all_pages_options() ),
      Field::make( 'image', 'crb_header_ecoindex', __('Ecoindex image', 'gamearth' ) ),
    ));

  Container::make( 'theme_options', __( 'Pages', 'gamearth') )
    ->set_page_parent( $basic_options_container )
    ->add_fields(array(
      Field::make( 'select', 'crb_home_page', __('Home page', 'gamearth') )
        ->add_options('list_pages'),
    ));

  // Footer
  Container::make( 'theme_options', __( 'Footer Options', 'gamearth') )
  ->set_page_parent( $basic_options_container )
  ->add_fields(array(
    Field::make( 'image', 'crb_footer_logo', __('Footer logo', 'gamearth' ) ),
    Field::make( 'text', 'crb_adress_fund_title', __('Fund address title', 'gamearth')),
    Field::make( 'complex', 'crb_adresses_fund', __('Fund address', 'gamearth'))
      ->add_fields( array(
        Field::make( 'text', 'crb_adress_line', __('Fund adress line', 'gamearth') ),
        Field::make( 'text', 'crb_adress_cp_city', __('Fund postal code & city', 'gamearth') )
      )),
    Field::make( 'text', 'crb_adress_sas_title', __('SAS address title', 'gamearth')),
    Field::make( 'complex', 'crb_adresses_sas', __('SAS address', 'gamearth'))
      ->add_fields( array(
        Field::make( 'text', 'crb_adress_first_line', __('SAS adress first line', 'gamearth') ),
        Field::make( 'text', 'crb_adress_second_line', __('SAS adress second line', 'gamearth') ),
        Field::make( 'text', 'crb_adress_third_line', __('SAS adress third line', 'gamearth') )
      )),
    Field::make( 'text', 'crb_legal_term_title', __('Legal term title', 'gamearth')),
    Field::make( 'complex', 'crb_legal_terms', __('Legal terms', 'gamearth'))
      ->add_fields( array(
        Field::make( 'text', 'crb_legal_term_name', __('Legal term name', 'gamearth') ),
        Field::make( 'text', 'crb_legal_term_link', __('Legal term link', 'gamearth') )
      ))
      ->set_max( 3 )
      ->set_layout( 'tabbed-horizontal' ),
    Field::make( 'textarea', 'crb_information_text', __('Information text', 'gamearth'))
  ));
}
