<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_action_fields' );

function crb_attach_action_fields() {

    # Calculer
    Container::make( 'post_meta', __( 'Calculer', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_calculer_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_calculer_contents', __('Action contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
            Field::make( 'text', 'description-next', __('Description 2', 'gamearth') ),
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
        ) )
        ->set_max( 1 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'complex', 'crb_action_section_calculer_contents_next', __('Action contents-next', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'image', 'image-next', __('Image', 'gamearth') ),
            Field::make( 'text', 'title-next', __('Title', 'gamearth') ),
        ) )
        ->set_max( 1 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'complex', 'crb_action_section_calculer_contents_more', __('Action contents-more', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description-more', __('Description', 'gamearth') ),
        ) )
        ->set_max( 1 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Banniere limite - Action
    Container::make( 'post_meta', 'Banner', __('Banner', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_action_section_banner', __('Image', 'gamearth') )
    ));

    # Comprendre
    Container::make( 'post_meta', __( 'Comprendre', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_comprendre_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_comprendre_contents', __('Contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'complex', 'crb_action_section_comprendre_contents_next', __('Contents next', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'description-un', __('Description', 'gamearth') ),
            Field::make( 'text', 'description-deux', __('Description_next', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
    ));

    # Banniere limite-2 - Action
    Container::make( 'post_meta', 'Banner', __('Banner-2', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_action_section_banner_next', __('Image', 'gamearth') )
    ));

    # Reduire
    Container::make( 'post_meta', __( 'Reduire', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_reduire_title', __('Title', 'gamearth') ),
        Field::make( 'image', 'crb_action_section_reduire_image', __('Image', 'gamearth') ),
        Field::make( 'text', 'crb_action_section_reduire_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_reduire_contents', __('Action contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') )
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Contribuer
    Container::make( 'post_meta', __( 'Contribuer', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_contribuer_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_action_section_contribuer_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'image', 'crb_action_section_contribuer_image', __('Image', 'gamearth') ),
        Field::make( 'text', 'crb_action_section_contribuer_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_contribuer_contents', __('Action contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'text', 'description', __('Description', 'gamearth') )
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
    ));

    # Banniere limite-3 - Action
    Container::make( 'post_meta', 'Banner', __('Banner-3', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_action_section_banner_more', __('Image', 'gamearth') )
    ));

    # Communiquer
    Container::make( 'post_meta', __( 'Communiquer', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_communiquer_title', __('Title', 'gamearth') ),
        Field::make( 'image', 'crb_action_section_communiquer_image', __('Image', 'gamearth') ),
        Field::make( 'text', 'crb_action_section_communiquer_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_communiquer_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') )
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
    ));

    # Engager
    Container::make( 'post_meta', __( 'Engager', 'gamearth') )
    ->where( 'post_template', '=', 'template-action.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_action_section_engager_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_action_section_engager_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'complex', 'crb_action_section_engager_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
            Field::make( 'text', 'paragraph', __('Rappel', 'gamearth') )
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'complex', 'crb_action_section_engager_contents_next', __('Ecosystem contents-next', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' ),
    ));

}
