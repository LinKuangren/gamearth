<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_homepage_fields' );

function crb_get_all_pages_options() {
    $pages = get_pages();
    $options = array();
    foreach ( $pages as $page ) {
        $options[ $page->ID ] = $page->post_title;
    }
    return $options;
}

function crb_attach_homepage_fields() {

    # Notre action
    Container::make( 'post_meta', __( 'Our action', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_homepage_section_action_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_action_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_action_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'select', 'crb_homepage_section_action_linked_page', __('Target page', 'gamearth'))->set_options( crb_get_all_pages_options() ),
        Field::make( 'complex', 'crb_homepage_section_action_contents', __('Action contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'paragraph', __('Paragraph', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Notre impact
    Container::make( 'post_meta', __( 'Our impact', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_homepage_section_impact_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_impact_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'complex', 'crb_homepage_section_impact_contents', __('Impact contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Banniere Impact - Fonds
    Container::make( 'post_meta', 'Banner', __('Banner', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_home_section_banner', __('Image', 'gamearth') )
    ));

    # Notre Fonds
    Container::make( 'post_meta', __( 'Our fund', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_homepage_section_fund_logo', __('Logo', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_fund_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_fund_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_fund_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'select', 'crb_homepage_section_fund_linked_page', __('Target page', 'gamearth'))->set_options( crb_get_all_pages_options() ),
        Field::make( 'complex', 'crb_homepage_section_fund_contents', __('Fund contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') )
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'textarea', 'crb_homepage_section_fund_paragraph', __('Fund paragraph', 'gamearth') )
    ));

    # Notre média
    /* A COMPLETER */
    Container::make( 'post_meta', __( 'Our media', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_homepage_section_media_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_media_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_media_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'select', 'crb_homepage_section_media_linked_page', __('Target page', 'gamearth') )->set_options( crb_get_all_pages_options() ),
    ));

    # Notre ecosysteme
    Container::make( 'post_meta', __( 'Our ecosystem', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-homepage.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_homepage_section_ecosystem_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_ecosystem_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'text', 'crb_homepage_section_ecosystem_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'select', 'crb_homepage_section_ecosystem_linked_page', __('Target page', 'gamearth') )->set_options( crb_get_all_pages_options() ),
        Field::make( 'complex', 'crb_homepage_section_ecosystem_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'complex', 'crb_homepage_section_ecosystem_columns', __('Ecosystem columns', 'gamearth') )
            ->add_fields( array(
                Field::make( 'text', 'title', __('Title', 'gamearth') )
            ))
            ->set_max( 6 )
            ->set_layout( 'tabbed-horizontal' ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'complex', 'crb_homepage_section_ecosystem_partners', __('Ecosystem partners', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'partner_logo', __('Partner logo', 'gamearth') )
        ) )
        ->set_max( 6 )
        ->set_layout( 'tabbed-horizontal' ),
    ));

}
