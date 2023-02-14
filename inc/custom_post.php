<?php


add_action('init', 'custom_post_type');
function custom_post_type()
{

   // Set UI labels for Custom Post Type
   $slider_labels = array(
      'name'                => __('Sliders', 'finanzamania'),
      'singular_name'       => __('Slider', 'finanzamania'),
      'menu_name'           => __('Home sliders', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $slider_args = array(
      'labels'              => $slider_labels,
      'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );


   // Set UI labels for Custom Post Type
   $about_tab_labels = array(
      'name'                => __(
         'About tabs',
         'finanzamania'
      ),
      'singular_name'       => __('About tab', 'finanzamania'),
      'menu_name'           => __('About tabs', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $about_tab_args = array(
      'labels'              =>
      $about_tab_labels,
      'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
      'public'              => true,
      'show_in_menu'        => true,
      'menu_icon' => 'dashicons-analytics',

   );
   // Set UI labels for Custom Post Type
   $Faq_post_labels = array(
      'name'                => __('Faq posts', 'finanzamania'),
      'singular_name'       => __('Faq post', 'finanzamania'),
      'menu_name'           => __('Feature posts', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $faq_post_args = array(
      'labels'              =>
      $Faq_post_labels,
      'supports'            => array(
         'title', 'editor', 'excerpt',
      ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );
   // Set UI labels for Custom Post Type
   $Service_post_labels = array(
      'name'                => __('Service post', 'finanzamania'),
      'singular_name'       => __('Service posts', 'finanzamania'),
      'menu_name'           => __('Service posts', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $service_post_args = array(
      'labels'              =>
      $Service_post_labels,
      'supports'            => array(
         'title', 'editor', 'excerpt', 'thumbnail'
      ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );
   // Set UI labels for Custom Post Type
   $projects_labels = array(
      'name'                => __('Projects', 'finanzamania'),
      'singular_name'       => __('Project', 'finanzamania'),
      'menu_name'           => __('Projects slider', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $projects_args = array(
      'labels'              =>
      $projects_labels,
      'supports'            => array(
         'title', 'editor', 'excerpt', 'thumbnail'
      ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );
   // Set UI labels for Custom Post Type
   $team_labels = array(
      'name'                => __('Team members', 'finanzamania'),
      'singular_name'       => __('Team member', 'finanzamania'),
      'menu_name'           => __('Team members', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $team_args = array(
      'labels'              =>
      $team_labels,
      'supports'            => array(
         'title', 'editor', 'thumbnail'
      ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );
   $testimonial_labels = array(
      'name'                => __('Testimonials', 'finanzamania'),
      'singular_name'       => __(
         'Testimonial',
         'finanzamania'
      ),
      'menu_name'           => __('Clint testimonials', 'finanzamania'),

   );

   // Set other options for Custom Post Type

   $testimonial_args = array(
      'labels'              =>
      $testimonial_labels,
      'supports'            => array(
         'title', 'editor', 'thumbnail'
      ),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-analytics',

   );
   // Registering your Custom Post Type
   register_post_type('sliders', $slider_args);
   register_post_type('about_tab', $about_tab_args);
   register_post_type('faq_posts', $faq_post_args);
   register_post_type('service_posts', $service_post_args);
   register_post_type('projects', $projects_args);
   register_post_type('team', $team_args);
   register_post_type('testimonial', $testimonial_args);
}




