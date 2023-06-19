<?php

namespace Wordpress\Starter\Minify;

function filter_w3tc_minify_js_do_tag_minification($do_tag_minification, $script_tag, $file)
{
  if (strrpos(strtolower($file), 'gamearth') > -1) {
    return false;
  }

  return $do_tag_minification;
}

add_filter('w3tc_minify_js_do_tag_minification', __NAMESPACE__ . '\\filter_w3tc_minify_js_do_tag_minification', 10, 3);
