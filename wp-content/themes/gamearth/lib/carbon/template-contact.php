<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_contact_fields' );

function crb_attach_contact_fields() {
    Container::make( 'post_meta', __( 'Contact element', 'gamearth') )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'template-contact.php')
    ->add_fields( array(
        Field::make( 'image', 'crb_contact_banner', __("Contact banner", 'gamearth') ),
        Field::make( 'text', 'crb_contact_title', __('Title', 'gamearth') ),
        Field::make( 'text', 'crb_contact_subtitle', __('Subtitle', 'gamearth') ),
        Field::make( 'text', 'crb_contact_form_shortcode', __('Contact Form 7 shortcode', 'gamearth') ),
        Field::make( 'text', 'crb_contact_end_sentence', __('End sentence', 'gamearth') ),
        Field::make( 'text', 'crb_contact_cta_name', __('CTA Name', 'gamearth') )
        ->set_width(30),
        Field::make( 'text', 'crb_contact_cta_link', __('CTA Link', 'gamearth') )
        ->set_width(70)
    ));
}
