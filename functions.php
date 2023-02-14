<?php

//? enqueue  assets
include_once('inc/enqueue_assets.php');

//? register  nav
include_once('inc/theme_nav.php');

//?theme supports
include_once('inc/theme_supports.php');

//?custom posts
include_once('inc/custom_post.php');

//?options page
include_once('inc/theme_options/options.php');



// function remove_contact7_stylesheet()
// {
//    wp_dequeue_style('contact-form-7');
// }
// add_action('wp_print_styles', 'remove_contact7_stylesheet', 100);
