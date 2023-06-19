<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_ecosystem_fields' );

function crb_attach_ecosystem_fields() {

    # Debut
    Container::make( 'post_meta', __( 'start', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_ecosystem_section_start_logo', __('Logo Game Earth', 'gamearth') ),
        Field::make( 'text', 'crb_ecosystem_section_start_cta_name', __('CTA Name', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_start_contents', __('Banniere', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'icone', __('Image', 'gamearth') )
        ) )
        ->set_max( 1 )
        ->set_layout( 'tabbed-horizontal' ),
        Field::make( 'textarea', 'crb_ecosystem_section_start_paragraph', __('Start paragraph', 'gamearth') )
    ));

    # Confiance
    Container::make( 'post_meta', __( 'confiance', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_confiance_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_confiance_contents', __('Action contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
        ) )
        ->set_max( 3 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Engagé
    Container::make( 'post_meta', __( 'Engagé', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_engage_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_engage_contents', __('Impact contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
        ) )
        ->set_max( 4 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Soutient
    Container::make( 'post_meta', __( 'Soutient', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_soutien_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_soutien_contents', __('Impact contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') ),
        ) )
        ->set_max( 6 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Equipe
    Container::make( 'post_meta', __( 'Equipe', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_equipe_title', __('Title', 'gamearth') ),
        Field::make( 'image', 'crb_ecosystem_section_equipe_image', __('Image', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_equipe_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') )
        ) )
        ->set_max( 6 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Experts Partenaires
    Container::make( 'post_meta', __( 'Experts', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_expert_title', __('Title', 'gamearth') ),
        Field::make( 'textarea', 'crb_ecosystem_section_expert_paragraph', __('Start paragraph', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_expert_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
            Field::make( 'text', 'title', __('Title', 'gamearth') ),
            Field::make( 'text', 'description', __('Description', 'gamearth') )
        ) )
        ->set_max( 5 )
        ->set_layout( 'tabbed-horizontal' )
    ));

    # Entreprises Partenaires
    Container::make( 'post_meta', __( 'Partenaire', 'gamearth') )
    ->where( 'post_template', '=', 'template-ecosystem.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_ecosystem_section_partenaire_title', __('Title', 'gamearth') ),
        Field::make( 'complex', 'crb_ecosystem_section_partenaire_contents', __('Ecosystem contents', 'gamearth') )
        ->add_fields( array(
            Field::make( 'image', 'image', __('Image', 'gamearth') ),
        ) )
        ->set_max( 4 )
        ->set_layout( 'tabbed-horizontal' )
    ));

}
