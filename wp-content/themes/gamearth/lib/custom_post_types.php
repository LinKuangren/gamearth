<?php

namespace Wordpress\Starter\CustomPostTypes;

function add_custom_post_types() {
}

add_action( 'init', __NAMESPACE__ . '\\add_custom_post_types' );
