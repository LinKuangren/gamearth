<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_home_fields' );

function crb_attach_home_fields() {
}
