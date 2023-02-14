<?php
add_action('after_setup_theme', 'theme_supports');
function theme_supports()
{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails', array('post', 'sliders', 'service_posts', 'projects', 'team', 'testimonial'));
}
